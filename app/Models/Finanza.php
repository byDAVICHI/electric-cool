<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finanza extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'finanzas';

    protected $fillable = ['tipo_transaccion','descripcion','monto','fecha'];
	
}
