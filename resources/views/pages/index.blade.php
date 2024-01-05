@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Manage pages') }}
    </h2>
</x-slot>

@guest
<div class="py-12">
    <div class="max-w-7xl mx-auto px-6 ">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg border-page">
            <div class="p-6 text-gray-900">
                {{ __("You're not logged in! Please Log in to explore this page!.") }}
                <br /><br />
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif

            <div class="card bg-white">
                <div class="card-header">
                    <h3>{{ __("Pages") }}</h3>
                </div>
                <div class="card-body">
                    <p>Pages editing and management.</p>
                    <a href="{{ route('pages.create') }}" class="btn btn-success btn-sm my-2 float-end"><i class="bi bi-plus-circle"></i> Add New Page</a>
                    <div class="clearfloat"></div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="width: 5%">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pages as $page)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->category }}</td>
                                    <td>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this Page?');"><i class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>No pages found!</strong>
                                    </span>
                                </td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endguest
@endsection