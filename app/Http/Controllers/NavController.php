<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
    public function index(): View
    {
        $user_id = Auth::id();
        $navigations = NavPost::orderBy('position', 'asc')->where('user_id', '=', $user_id)->paginate(20);

        $nav_name = [];
        $nav_name = ['0' => 'Home'];

        foreach ($navigations as $navigation) {
            $nav_name[$navigation->id] = NavPost::latest()->where('id',  $navigation->id)->value('name');
        }

        return view('navs.index', compact('navigations', 'nav_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $navigations = NavPost::orderBy('id', 'asc')->get();
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
        $max_position = NavPost::orderBy('position', 'desc')->value('position');
        $position = $max_position + 1;
        $input = $request->all();

        NavPost::create([
            'name' => $input['name'],
            'user_id' => $user_id,
            'parent_id' => $input['parent_id'],
            'position' => $position
        ]);

        return redirect()->route('navs.index')->with('success', 'Category created successfully.');
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
        $navigations = NavPost::orderBy('id', 'asc')->where('parent_id', '=', 0)->get();
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

        return redirect()->route('navs.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NavPost $nav)
    {
        $nav->delete();
        DB::table('nav_posts')->where('parent_id', $nav->id)->delete();

        return redirect()->route('navs.index')->with('success', 'Category deleted successfully');
    }

    public function order_change(Request $request)
    {
        $data = $request->input('order');
        foreach ($data as $index => $id) {
            NavPost::where('id', $id)->update(['position' => $index]);
        }

        return redirect()->route('navs.index')->with('success', 'Post Order changed successfully');
    }
}
