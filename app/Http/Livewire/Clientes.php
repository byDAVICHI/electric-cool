<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class Clientes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $direccion, $telefono, $email;

    protected $clientes;

    public function mount()
    {
        $this->loadClientes();
    }

    public function loadClientes()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $this->clientes = Cliente::latest()
            ->orWhere('nombre', 'LIKE', $keyWord)
            ->orWhere('direccion', 'LIKE', $keyWord)
            ->orWhere('telefono', 'LIKE', $keyWord)
            ->orWhere('email', 'LIKE', $keyWord)
            ->paginate(10);
    }

    public function render()
    {
        $this->loadClientes();

        return view('livewire.clientes.view', [
            'clientes' => $this->clientes,
        ]);
    }

    public function downloadPDF()
    {
        $clientes = Cliente::latest()
            ->orWhere('nombre', 'LIKE', $this->keyWord)
            ->orWhere('direccion', 'LIKE', $this->keyWord)
            ->orWhere('telefono', 'LIKE', $this->keyWord)
            ->orWhere('email', 'LIKE', $this->keyWord)
            ->get(); // Para obtener todos los registros sin paginación

        $pdf = Pdf::loadView('livewire.clientes.pdf', compact('clientes'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'clientes.pdf'
        );
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->direccion = null;
        $this->telefono = null;
        $this->email = null;
    }

    public function store()
    {
        $this->validate([
            'email' => 'required',
        ]);

        Cliente::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Cliente Successfully created.');
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->direccion = $record->direccion;
        $this->telefono = $record->telefono;
        $this->email = $record->email;
    }

    public function update()
    {
        $this->validate([
            'email' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Cliente::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'direccion' => $this->direccion,
                'telefono' => $this->telefono,
                'email' => $this->email,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            session()->flash('message', 'Cliente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Cliente::where('id', $id)->delete();
        }
    }
}
