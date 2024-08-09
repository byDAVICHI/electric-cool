<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Servicio;
use Barryvdh\DomPDF\Facade\Pdf;

class Servicios extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $descripcion, $costo, $fecha_inicio, $fecha_fin, $estatus;

    protected $servicios;

    public function mount()
    {
        $this->loadServicios();
    }

    public function loadServicios()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $this->servicios = Servicio::latest()
            ->orWhere('nombre', 'LIKE', $keyWord)
            ->orWhere('descripcion', 'LIKE', $keyWord)
            ->orWhere('costo', 'LIKE', $keyWord)
            ->orWhere('fecha_inicio', 'LIKE', $keyWord)
            ->orWhere('fecha_fin', 'LIKE', $keyWord)
            ->orWhere('estatus', 'LIKE', $keyWord)
            ->paginate(10);
    }

    public function render()
    {
        $this->loadServicios();

        return view('livewire.servicios.view', [
            'servicios' => $this->servicios,
        ]);
    }

    public function downloadPDF()
    {
        $servicios = Servicio::latest()
            ->orWhere('nombre', 'LIKE', $this->keyWord)
            ->orWhere('descripcion', 'LIKE', $this->keyWord)
            ->orWhere('costo', 'LIKE', $this->keyWord)
            ->orWhere('fecha_inicio', 'LIKE', $this->keyWord)
            ->orWhere('fecha_fin', 'LIKE', $this->keyWord)
            ->orWhere('estatus', 'LIKE', $this->keyWord)
            ->get(); // Para obtener todos los registros sin paginación

        $pdf = Pdf::loadView('livewire.servicios.pdf', compact('servicios'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'servicios.pdf'
        );
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->descripcion = null;
        $this->costo = null;
        $this->fecha_inicio = null;
        $this->fecha_fin = null;
        $this->estatus = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'estatus' => 'required',
        ]);

        Servicio::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'costo' => $this->costo,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'estatus' => $this->estatus,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Servicio Successfully created.');
    }

    public function edit($id)
    {
        $record = Servicio::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->descripcion = $record->descripcion;
        $this->costo = $record->costo;
        $this->fecha_inicio = $record->fecha_inicio;
        $this->fecha_fin = $record->fecha_fin;
        $this->estatus = $record->estatus;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'costo' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'estatus' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Servicio::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'costo' => $this->costo,
                'fecha_inicio' => $this->fecha_inicio,
                'fecha_fin' => $this->fecha_fin,
                'estatus' => $this->estatus,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            session()->flash('message', 'Servicio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Servicio::where('id', $id)->delete();
        }
    }
}
