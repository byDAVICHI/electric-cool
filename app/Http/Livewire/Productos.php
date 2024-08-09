<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;

class Productos extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $precio, $marca, $cantidad;

    protected $productos;

    public function mount()
    {
        $this->loadProductos();
    }

    public function loadProductos()
    {
        $keyWord = '%'.$this->keyWord .'%';
        $this->productos = Producto::latest()
            ->orWhere('nombre', 'LIKE', $keyWord)
            ->orWhere('precio', 'LIKE', $keyWord)
            ->orWhere('marca', 'LIKE', $keyWord)
            ->orWhere('cantidad', 'LIKE', $keyWord)
            ->paginate(10);
    }

    public function render()
    {
        $this->loadProductos();

        return view('livewire.productos.view', [
            'productos' => $this->productos,
        ]);
    }

    public function downloadPDF()
    {
        $productos = Producto::latest()
            ->orWhere('nombre', 'LIKE', $this->keyWord)
            ->orWhere('precio', 'LIKE', $this->keyWord)
            ->orWhere('marca', 'LIKE', $this->keyWord)
            ->orWhere('cantidad', 'LIKE', $this->keyWord)
            ->get(); // Para obtener todos los registros sin paginación

        $pdf = Pdf::loadView('livewire.productos.pdf', compact('productos'));
        return response()->streamDownload(
            fn () => print($pdf->output()),
            'productos.pdf'
        );
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->precio = null;
        $this->marca = null;
        $this->cantidad = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marca' => 'required',
            'cantidad' => 'required',
        ]);

        Producto::create([
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'marca' => $this->marca,
            'cantidad' => $this->cantidad,
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Producto Successfully created.');
    }

    public function edit($id)
    {
        $record = Producto::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->precio = $record->precio;
        $this->marca = $record->marca;
        $this->cantidad = $record->cantidad;
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marca' => 'required',
            'cantidad' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Producto::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'precio' => $this->precio,
                'marca' => $this->marca,
                'cantidad' => $this->cantidad,
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            session()->flash('message', 'Producto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Producto::where('id', $id)->delete();
        }
    }
}

