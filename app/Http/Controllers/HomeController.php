<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 🏠 Home Page
    public function home()
    {
        return view('web.home');
    }

    // ℹ️ About Page
    public function about()
    {
        return view('web.about');
    }

    // 🛠 Services Page
    public function services()
    {
        return view('web.services');
    }

    // 📞 Contact Page
    public function contacts()
    {
        return view('web.contacts');
    }

    // 📝 Blog List Page
    public function blog()
    {
        return view('web.blog.index');
    }

    // 📝 Single Blog Page by Slug
    public function blogBySlug($slug)
    {
        // Example: Fetch from DB later
        return view('web.blog.show', ['slug' => $slug]);
    }
}
