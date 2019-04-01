<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to BLOG APPLICATION";
        return view('pages.index')->with('title', $title);  
    }

    public function about() {
        $title = "About Us";
        return view('pages.about', compact('title'));
    }

    public function service() {
        $data = [
            "title" => "How we can serve",
            "services" => ["Provide Blogs", "Seminars", "Online Teaching", "Published Books"]
        ];
        return view('pages.service')->with($data);
    }
}
