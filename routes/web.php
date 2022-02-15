<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    # Ruta de dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    ############## RUTAS PARA LOS POSTS ###################

    Route::resource('/dashboard/posts', PostController::class);

    # Ruta de la tabla de administracion de los posts
    // Route::get('/dashboard/posts/table', function () {
    //     return view('components.posts.table-posts');
    // })->name('table');
    // # Ruta para ver los posts
    // Route::get('/dashboard/posts/show', function () {
    //     return view('components.posts.show-posts');
    // })->name('show');
    // #Ruta para crear posts
    // Route::get('/dashboard/posts/create', function () {
    //     return view('components.posts.creation-posts');
    // })->name('create');

    ############# RUTAS PARA LAS AREAS #######################

    # Ruta para mostrar las areas
    Route::get('/dashboard/areas/show', function () {
        return view('components.areas.show-area');
    })->name('show-area');
    # Ruta para crear las areas
    Route::get('/dashboard/areas/create', function () {
        return view('components.areas.creation-area');
    })->name('create-area');
    # Ruta para crear las areas
    Route::get('/dashboard/areas/table', function () {
        return view('components.areas.table-area');
    })->name('table-area');

    ############# RUTAS PARA LAS CLASES #######################

    # Ruta para mostrar las courses
    Route::get('/dashboard/courses/show', function () {
        return view('components.courses.show-courses');
    })->name('show-courses');
    # Ruta para crear las courses
    Route::get('/dashboard/courses/create', function () {
        return view('components.courses.creation-courses');
    })->name('create-courses');
    # Ruta para crear las courses
    Route::get('/dashboard/courses/table', function () {
        return view('components.courses.table-courses');
    })->name('table-courses');

    ############# RUTAS PARA LAS ASIGNATURAS #######################

    # Ruta para mostrar las courses
    Route::get('/dashboard/asig/show', function () {
        return view('components.asig.show-asig');
    })->name('show-asig');
    # Ruta para crear las courses
    Route::get('/dashboard/asig/create', function () {
        return view('components.asig.creation-asig');
    })->name('create-asig');
    # Ruta para crear las courses
    Route::get('/dashboard/asig/table', function () {
        return view('components.asig.table-asig');
    })->name('table-asig');

    # Ruta para el contenido de las clases

    Route::get('dashboard/asig/{course_name}/period/{course_period}', function ($course_name, $course_period) {
        return view('components.asig.asig-body', compact('course_name', 'course_period'));
    })->name('content');

    ############# RUTA PARA LAS SECCIONES #################
    Route::get('/dashboard/sections', function () {
        return view('components.sections.sections');
    })->name('sections');

});

Route::get('/contactanos', function () {
    $email = new ContactanosMailable;
    Mail::to('oscarddiazvelasquez@gmail.com')->send($email);
        return 'Correo Enviado';
})->name('contact');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
