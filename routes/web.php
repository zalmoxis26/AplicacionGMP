<?php

use Illuminate\Support\Facades\Route;
use App\Pedidos;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\PedidosExport;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Cotizaciones/CreateNvo','CotizacionesController@CreateNvo')->name('Cotizaciones.CreateNvo');
Route::get('/Cotizaciones/{id}/CotizacionPDF','CotizacionesController@Pdf')->name('CotizacionPDF');
//Route::get('/Pedidos/PedidoPDF','PedidosController@Pdf')->name('PedidosPDF');

   
/*---------IMPRIMIR EXCELL-------------*/

/*---TODOS LOS PEDIDOS-------------*/
Route::get('/Pedidos/PedidosExcell','PedidosController@Todos')->name('Xport_Todos');  
/*---TODOS LOS EN OBRA-------------*/
Route::get('/Pedidos/ENOBRAExcell','PedidosController@ENOBRA')->name('Xport_EN OBRA'); 
/*---------PEDIDOS DESDE FECHA SELECCIONADA A LA ACTUAL-------------*/
Route::get('/Pedidos/{cliente}/Excell','PedidosController@DesdeFecha')->name('Xport_Fecha'); 
/*---POR CLIENTE-------------*/
Route::get('/Pedidos/{id}/ExcelCliente','PedidosController@PorCliente')->name('Xport_Cliente'); 
/*---------FIN EXCELL-------------*/
Route::resource ('/Clientes', 'ClientesController');
Route::resource ('/Equipos', 'EquiposController');
Route::resource ('/Pedidos', 'PedidosController');
Route::resource ('/Cotizaciones', 'CotizacionesController');


    