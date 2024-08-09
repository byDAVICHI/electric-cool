<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Proveedore;
use Barryvdh\DomPDF\Facade\Pdf;

class Proveedores extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $direccion, $telefono, $email;

    protected $proveedores;

    public function mount()
    {
        $this->loadProveedores();
    }

    public function loadProveedores()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $this->proveedores = Proveedore::latest()
            ->orWhere('nombre', 'LIKE', $keyWord)
            ->orWhere('direccion', 'LIKE', $keyWord)
            ->orWhere('telefono', 'LIKE', $keyWord)
            ->orWhere('email', 'LIKE', $keyWord)
            ->paginate(10);
    }

    public function render()
    {
        $this->loadProveedores();

        return view('livewire.proveedores.view', [
            'proveedores' => $this->proveedores,
        ]);
    }

    public function downloadPDF()
    {
        $proveedores = Proveedore::latest()
            ->orWhere('nombre', 'LIKE', $this->keyWord)
            ->orWhere('direccion', 'LIKE', $this->keyWord)
            ->orWhere('telefono', 'LIKE', $this->keyWord)
            ->orWhere('email', 'LIKE', $this->keyWord)
            ->get(); // Para obtener todos los registros sin paginación

        $pdf = Pdf::loadView('livewire.proveedores.pdf', compact('proveedores'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'proveedores.pdf'
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

        Proveedore::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Proveedore Successfully created.');
    }

    public function edit($id)
    {
        $record = Proveedore::findOrFail($id);
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
            $record = Proveedore::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'direccion' => $this->direccion,
                'telefono' => $this->telefono,
                'email' => $this->email,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            session()->flash('message', 'Proveedore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Proveedore::where('id', $id)->delete();
        }
    }
}
