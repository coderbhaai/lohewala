<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Contact;
use App\Http\Livewire\Pages\Thankyou;
use App\Http\Livewire\Pages\Fourofour;
use App\Http\Livewire\Pages\Aboutus;

use App\Http\Livewire\Blog\Blogpage;
use App\Http\Livewire\Blog\Single;

use App\Http\Livewire\Admin\Adminmeta;
use App\Http\Livewire\Admin\Admincomments;
use App\Http\Livewire\Admin\Adminblogmeta;
use App\Http\Livewire\Admin\Adminblog;
use App\Http\Livewire\Admin\Addblog;
use App\Http\Livewire\Admin\Updateblog;
use App\Http\Livewire\Admin\Adminsubscribe;
use App\Http\Livewire\Admin\Adminusers;

Route::get('/', Home::class)->name('home');
Route::get("/contact", Contact::class)->name('contact');
Route::get("/thank-you", Thankyou::class)->name('thankyou');
Route::get("/about-us", Aboutus::class)->name('about');

Route::get('/blog', Blogpage::class)->name('blog');
Route::get('/tag/{url}', Blogpage::class)->name('tags');
Route::get('/category/{url}', Blogpage::class)->name('category');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () { return view('dashboard'); })->name('dashboard');
        Route::get('/admin/meta', Adminmeta::class)->name('meta');
        Route::get('/admin/comments', Admincomments::class)->name('admincomments');
        Route::get('/admin/blogmeta', Adminblogmeta::class)->name('blogmeta');
        Route::get('/admin/blog', Adminblog::class)->name('adminblog');
        Route::get('/admin/addblog', Addblog::class)->name('addblog');
        Route::get('/admin/updateblog/{id}', Updateblog::class)->name('updateblog');
        Route::get('/admin/users', Adminusers::class)->name('adminusers');
        Route::get('/admin/subscription', Adminsubscribe::class)->name('adminSubscription');
    });
});

Route::get('/404', FourOFour::class)->name('404');
Route::get('/{url}', Single::class)->name('single');