<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Finanza;
use Barryvdh\DomPDF\Facade\Pdf;

class Finanzas extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $tipo_transaccion, $descripcion, $monto, $fecha;

    protected $finanzas;

    public function mount()
    {
        $this->loadFinanzas();
    }

    public function loadFinanzas()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $this->finanzas = Finanza::latest()
            ->orWhere('tipo_transaccion', 'LIKE', $keyWord)
            ->orWhere('descripcion', 'LIKE', $keyWord)
            ->orWhere('monto', 'LIKE', $keyWord)
            ->orWhere('fecha', 'LIKE', $keyWord)
            ->paginate(10);
    }

    public function render()
    {
        $this->loadFinanzas();

        return view('livewire.finanzas.view', [
            'finanzas' => $this->finanzas,
        ]);
    }

    public function downloadPDF()
    {
        $finanzas = Finanza::latest()
            ->orWhere('tipo_transaccion', 'LIKE', $this->keyWord)
            ->orWhere('descripcion', 'LIKE', $this->keyWord)
            ->orWhere('monto', 'LIKE', $this->keyWord)
            ->orWhere('fecha', 'LIKE', $this->keyWord)
            ->get(); // Para obtener todos los registros sin paginación

        $pdf = Pdf::loadView('livewire.finanzas.pdf', compact('finanzas'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'finanzas.pdf'
        );
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->tipo_transaccion = null;
        $this->descripcion = null;
        $this->monto = null;
        $this->fecha = null;
    }

    public function store()
    {
        $this->validate([
            'tipo_transaccion' => 'required',
            'descripcion' => 'required',
            'monto' => 'required',
            'fecha' => 'required',
        ]);

        Finanza::create([
            'tipo_transaccion' => $this->tipo_transaccion,
            'descripcion' => $this->descripcion,
            'monto' => $this->monto,
            'fecha' => $this->fecha,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Finanza Successfully created.');
    }

    public function edit($id)
    {
        $record = Finanza::findOrFail($id);
        $this->selected_id = $id;
        $this->tipo_transaccion = $record->tipo_transaccion;
        $this->descripcion = $record->descripcion;
        $this->monto = $record->monto;
        $this->fecha = $record->fecha;
    }

    public function update()
    {
        $this->validate([
            'tipo_transaccion' => 'required',
            'descripcion' => 'required',
            'monto' => 'required',
            'fecha' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Finanza::find($this->selected_id);
            $record->update([
                'tipo_transaccion' => $this->tipo_transaccion,
                'descripcion' => $this->descripcion,
                'monto' => $this->monto,
                'fecha' => $this->fecha,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            session()->flash('message', 'Finanza Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Finanza::where('id', $id)->delete();
        }
    }
}
