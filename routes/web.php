<?php

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
    return view('pages.welcome');
});

Route::get('/about', function() {
    return view('pages.about');
});


// PORTFOLIO PANEL

Route::get('/log', [
    'uses' => 'LogController@index',
    'as' => 'pages.login.index'
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as' => 'pages.contact'
]);

Route::post('/contact/store', [
    'uses' => 'ContactController@store',
    'as' => 'pages.contact.store'
]);

Route::get('/project', [
    'uses' => 'ProjectsController@index',
    'as' => 'pages.project.index'
]);

Route::get('/canvas', [
    'uses' => 'CanvasController@index',
    'as' => 'pages.canvas.index'
]);

Route::get('/book', [
    'uses' => 'BooksController@index',
    'as' => 'pages.book.index'
]);

Route::get('/book/{id}', [
    'uses' => 'BooksController@show',
    'as' => 'pages.book.show'
]);

Route::get('/blog', [
    'uses' => 'PostsController@index',
    'as' => 'pages.post.index'
]);

Route::get('/blog/{slug}', [
    'uses' => 'PostsController@show',
    'as' => 'pages.post.show'
]);

// ADMIN PANEL

Route::group([
    'middleware' => 'roles',
    'roles' => 'Admin'
    ], function() {
    
        Route::get('/admin', [
            'uses' => 'AdminController@index',
            'as' => 'admin'
        ]);

        // contact

        Route::get('/admin/contact', [
            'uses' => 'AdminContactsController@index',
            'as' => 'admin.contact'
        ]);

        Route::get('/admin/contact/delete/{project}', [
            'uses' => 'AdminContactsController@destroy',
            'as' => 'admin.contact.destroy'
        ]);

        Route::get('/admin/contact/show/{post}', [
            'uses' => 'AdminContactsController@show',
            'as' => 'admin.contact.show'
        ]);

        // project

        Route::get('/admin/project', [
            'uses' => 'AdminProjectsController@index',
            'as' => 'admin.project'
        ]);

        Route::post('/admin/project/store', [
            'uses' => 'AdminProjectsController@store',
            'as' => 'admin.project.store'
        ]);

        Route::get('/admin/project/add', [
            'uses' => 'AdminProjectsController@create',
            'as' => 'admin.project.create'
        ]);

        Route::get('/admin/project/edit/{project}', [
            'uses' => 'AdminProjectsController@edit',
            'as' => 'admin.project.edit'
        ]);

        Route::post('/admin/project/{project}', [
            'uses' => 'AdminProjectsController@update',
            'as' => 'admin.project.update'
        ]);

        Route::get('/admin/project/delete/{project}', [
            'uses' => 'AdminProjectsController@destroy',
            'as' => 'admin.project.destroy'
        ]);

        // book

        Route::get('/admin/book', [
            'uses' => 'AdminBooksController@index',
            'as' => 'admin.book'
        ]);

        Route::post('/admin/book/store', [
            'uses' => 'AdminBooksController@store',
            'as' => 'admin.book.store'
        ]);

        Route::get('/admin/book/add', [
            'uses' => 'AdminBooksController@create',
            'as' => 'admin.book.create'
        ]);

        Route::get('/admin/book/edit/{book}', [
            'uses' => 'AdminBooksController@edit',
            'as' => 'admin.book.edit'
        ]);

        Route::post('/admin/book/{book}', [
            'uses' => 'AdminBooksController@update',
            'as' => 'admin.book.update'
        ]);

        Route::get('/admin/book/delete/{book}', [
            'uses' => 'AdminBooksController@destroy',
            'as' => 'admin.book.destroy'
        ]);

        // canvas

        Route::get('/admin/canvas', [
            'uses' => 'AdminCanvasController@index',
            'as' => 'admin.canvas'
        ]);

        Route::post('/admin/canvas/store', [
            'uses' => 'AdminCanvasController@store',
            'as' => 'admin.canvas.store'
        ]);

        Route::get('/admin/canvas/add', [
            'uses' => 'AdminCanvasController@create',
            'as' => 'admin.canvas.create'
        ]);

        Route::get('/admin/canvas/edit/{canvas}', [
            'uses' => 'AdminCanvasController@edit',
            'as' => 'admin.canvas.edit'
        ]);

        Route::post('/admin/canvas/{canvas}', [
            'uses' => 'AdminCanvasController@update',
            'as' => 'admin.canvas.update'
        ]);

        Route::get('/admin/canvas/delete/{canvas}', [
            'uses' => 'AdminCanvasController@destroy',
            'as' => 'admin.canvas.destroy'
        ]);

        // book

        Route::get('/admin/book', [
            'uses' => 'AdminBooksController@index',
            'as' => 'admin.book'
        ]);

        Route::post('/admin/book/store', [
            'uses' => 'AdminBooksController@store',
            'as' => 'admin.book.store'
        ]);

        Route::get('/admin/book/add', [
            'uses' => 'AdminBooksController@create',
            'as' => 'admin.book.create'
        ]);

        Route::get('/admin/book/edit/{book}', [
            'uses' => 'AdminBooksController@edit',
            'as' => 'admin.book.edit'
        ]);

        Route::post('/admin/book/{book}', [
            'uses' => 'AdminBooksController@update',
            'as' => 'admin.book.update'
        ]);

        Route::get('/admin/book/delete/{book}', [
            'uses' => 'AdminBooksController@destroy',
            'as' => 'admin.book.destroy'
        ]);

        // technologies

        Route::get('/admin/tags', [
            'uses' => 'AdminTechnologiesController@index',
            'as' => 'admin.technology'
        ]);

        Route::post('/admin/tags/store', [
            'uses' => 'AdminTechnologiesController@store',
            'as' => 'admin.technology.store'
        ]);

        Route::get('/admin/tags/add', [
            'uses' => 'AdminTechnologiesController@create',
            'as' => 'admin.technology.create'
        ]);

        Route::get('/admin/tags/edit/{technology}', [
            'uses' => 'AdminTechnologiesController@edit',
            'as' => 'admin.technology.edit'
        ]);

        Route::post('/admin/tags/{technology}', [
            'uses' => 'AdminTechnologiesController@update',
            'as' => 'admin.technology.update'
        ]);

        Route::get('/admin/tags/delete/{technology}', [
            'uses' => 'AdminTechnologiesController@destroy',
            'as' => 'admin.technology.destroy'
        ]);

        // blog

        Route::get('/admin/blog', [
            'uses' => 'AdminPostsController@index',
            'as' => 'admin.posts'
        ]);

        Route::post('/admin/blog/store', [
            'uses' => 'AdminPostsController@store',
            'as' => 'admin.posts.store'
        ]);

        Route::get('/admin/blog/add', [
            'uses' => 'AdminPostsController@create',
            'as' => 'admin.posts.create'
        ]);

        Route::get('/admin/blog/show/{post}/edit', [
            'uses' => 'AdminPostsController@edit',
            'as' => 'admin.posts.edit'
        ]);

        Route::get('/admin/blog/show/{post}', [
            'uses' => 'AdminPostsController@show',
            'as' => 'admin.posts.show'
        ]);

        Route::post('/admin/blog/{post}', [
            'uses' => 'AdminPostsController@update',
            'as' => 'admin.posts.update'
        ]);

        Route::get('/admin/blog/delete/{post}', [
            'uses' => 'AdminPostsController@destroy',
            'as' => 'admin.posts.destroy'
        ]);
        
        // logout
        
        Route::get('/logout', [
            'uses' => '\App\Http\Controllers\Auth\LoginController@logout',
            'as' => 'logout'
        ]);

});

// OTHER

Auth::routes();
