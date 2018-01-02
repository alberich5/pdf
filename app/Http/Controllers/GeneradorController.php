<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class GeneradorController extends Controller
{
    public function imprimir(){
    //Mediante carbon añadimos a la variable today el dia actual
	$today = Carbon::now()->format('d/m/Y');
	//añadimos el nombre de la vista, en este caso "ejemplo" y la variable "today" que enviaremos a la vista.
	$pdf = \PDF::loadView('ejemplo', compact('today'));
	//el metodo download descargará la vista en formato pdf, en el metodo download escribimos el nombre del archivo (ejemplo.pdf)
	return $pdf->download('ejemplo.pdf');
	}
}
