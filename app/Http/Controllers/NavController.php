<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\NavPost;
use Auth;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        $navigations = NavPost::latest()->paginate(20);

        $nav_name = [];
        $nav_name = ['0' => 'Home'];

        foreach ($navigations as $navigation) {
            $nav_name[$navigation->id] = NavPost::latest()->where('id',  $navigation->id)->value('name');
        }

        return view('navs.index', compact('navigations','nav_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $navigations = NavPost::latest()->get();
        return view('navs.create', compact('navigations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user_id = Auth::id();
        $position = 0;
        $input = $request->all();

        NavPost::create([
            'name' => $input['name'],
            'user_id' => $user_id,
            'parent_id' => $input['parent_id'],
            'position' => $position
        ]);

        return redirect()->route('navs.index')->with('success', 'Navigation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NavPost $nav): View
    {
        return view('navs.edit', compact('nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NavPost $nav): View
    {
        $navigations = NavPost::latest()->where('parent_id', '=', 0)->get();
        return view('navs.edit', compact('nav', 'navigations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NavPost $nav): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $nav->update($request->all());

        return redirect()->route('navs.index')
            ->with('success', 'Navigation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NavPost $nav)
    {
        $nav->delete();

        return redirect()->route('navs.index')->with('success', 'Product deleted successfully');
    }
}
