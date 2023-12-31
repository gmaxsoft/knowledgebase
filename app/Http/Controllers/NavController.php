<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NavPost;
use DataTables;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        //$navigations = NavPost::orderBy('position','asc')->paginate(20);

        if($request->ajax())
        {
            $data = NavPost::orderBy('position','asc')->get();
            return DataTables::of($data)->addIndexColumn()->make(true);
        }

        return view('navs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('navs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $navdata = NavPost::find($id);
        return $navdata;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
