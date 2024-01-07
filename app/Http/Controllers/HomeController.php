<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\PagePost;
use App\Models\NavPost;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(NavPost $nav, PagePost $page): View
    {
        $categories_parent = NavPost::orderBy('position', 'asc')->where('parent_id', '>', 0)->get();
        $categories_home = NavPost::orderBy('position', 'asc')->where('parent_id', '=', 0)->get();
        $categories = NavPost::orderBy('position', 'asc')->get();

        $category_parent = array();
        $category_home = array();

        foreach ($categories_parent as $parent) {
            $category_parent[] = $parent->parent_id;
        }

        foreach ($categories_home as $home) {
            $category_home[] = $home->id;
        }

        $pages = PagePost::orderBy('id', 'asc')->get();

        return view('home', compact('categories','category_parent','category_home','categories_parent','pages'));
    }
}
