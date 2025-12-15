<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controllers
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\GabineteController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\PantallaController;
use App\Http\Controllers\ProcesadorController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\RefrigeracionController;
use App\Http\Controllers\GraficaController;
use App\Http\Controllers\MadreController;
use App\Http\Controllers\TecladoController;
use App\Http\Controllers\AlimentacionController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\OrdenDetallesController;
use App\Http\Controllers\PagosRealizadosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompradoController;
use App\Http\Controllers\EstatusEntidadController;
use App\Http\Controllers\CategoriaController;

// Middleware\
use App\Http\Middleware\RolesUser;
use App\Http\Middleware\RolesAdmin;
use App\Http\Middleware\GuestAdminMiddleware;



// Dashboard
Route::get('/', function(){
   return to_route('tienda.index');
});


////////////////////////////////// 

// Seccion de administrador
Auth::routes();

// Route::get('admin/login', function(){
//    return to_route('admin.login');
// });

Route::prefix('admin')->name('admin.')->group(function()
{

   Route::middleware([GuestAdminMiddleware::class])->group(function()
   {
      Route::get('/login', [AdminLoginController::class, 'index']);
      Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
   });


   Route::middleware(['auth',RolesAdmin::class])->group(function()
   {
      Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
   });
   
});


Route::get('/home', [App\Http\Controllers\TiendaController::class,'index'])
->name('Tienda')
->middleware(RolesUser::class);
////////////////////////////////////////////////////////////////////////////////////////// 

// Rutas para el crud
Route::middleware(['auth',RolesAdmin::class])->group(function()
{
   Route::middleware(['auth'])->group(function()
   {
      Route::resource('equipo', EquipoController::class);
      Route::resource('gabinete', GabineteController::class);
      Route::resource('mouse', MouseController::class);
      Route::resource('pantalla', PantallaController::class);
      Route::resource('procesador', ProcesadorController::class);
      Route::resource('ram', RamController::class);
      Route::resource('refrigeracion', RefrigeracionController::class);
      Route::resource('grafica', GraficaController::class);
      Route::resource('madre', MadreController::class);
      Route::resource('teclado', TecladoController::class);
      Route::resource('alimentacion', AlimentacionController::class);
      Route::resource('cpu', CpuController::class);
      Route::resource('user', UserController::class);
      Route::resource('estatusEntidad', EstatusEntidadController::class);
      Route::resource('categorium', CategoriaController::class);
   });
});




// Route::middleware(['auth',RolesUser::class])->group(function()
// {
Route::middleware(['auth'])->group(function()
   {
// Carrito de compras
Route::resource('carrito', CarritoController::class);
// Ordenes
Route::resource('orden', OrdenController::class);
// Ordenes Detalles
Route::resource('detalles', OrdenDetallesController::class);
// Productos comprados
Route::resource('comprados', CompradoController::class);

// Realizacion de pagos
Route::resource('pagos', PagosRealizadosController::class);
Route::get('/pagos', 'App\Http\Controllers\PagosRealizadosController@index')->name('index');
Route::get('checkout', 'App\Http\Controllers\PagosRealizadosController@checkout')->name('Tienda.checkout');
Route::get('stripe/checkout', 'App\Http\Controllers\PagosRealizadosController@checkout')->name('stripe.checkout');
Route::get('/success','App\Http\Controllers\PagosRealizadosController@success')->name('success');
Route::get('/cancel','App\Http\Controllers\PagosRealizadosController@cancel')->name('cancel');
   });

// });


// Tienda
Route::resource('tienda', TiendaController::class);

Route::get('/baja', [App\Http\Controllers\TiendaController::class,'baja'])
->name('baja');

Route::get('/media', [App\Http\Controllers\TiendaController::class,'media'])
->name('media');

Route::get('/alta', [App\Http\Controllers\TiendaController::class,'alta'])
->name('alta');
////////////////////////////////////////////////////////////////



