<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\PagePost;
use App\Models\NavPost;
use Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pages = PagePost::latest()->paginate(20);
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $navigations = NavPost::orderBy('id', 'asc')->get();
        return view('pages.create', compact('navigations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
        ]);

        $user_id = Auth::id();
        $input = $request->all();
        $category = NavPost::latest()->where('id',  $input['category_id'])->value('name');

        if(empty($category))
        $category = "Home";

        PagePost::create([
            'title' => $input['title'],
            'content' => $input['content'],
            'category' => $category,
            'category_id' => $input['category_id'],
            'user_id' => $user_id
        ]);

        return redirect()->route('pages.index')->with('success', 'Navigation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PagePost $page): View
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagePost $page): View
    {
        $navigations = NavPost::orderBy('id', 'asc')->get();
        return view('pages.edit', compact('page', 'navigations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagePost $page): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
        ]);

        $input = $request->all();
        $category = NavPost::latest()->where('id',  $input['category_id'])->value('name');
        
        $page->update($input);

        if(empty($category))
        $category = "Home";
    
        DB::table('page_posts')->where('id', $page->id)->update(['category' => $category]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagePost $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }
}
