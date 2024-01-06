@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Category edit') }}
    </h2>
</x-slot>
@guest
<div class="py-12">
    <div class="max-w-7xl mx-auto px-6">
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
<div class="row justify-content-center mt-3">
    <div class="col-sm-12 col-md-12 col-lg-12">

        <div class="card bg-white">
            <div class="card-header">
                <div class="float-start">
                    <h3>{{ __("Edit categories") }}</h3>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('navs.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('navs.update',$nav->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $nav->name }}" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group mt-3">

                                <strong>Parent category:</strong>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0" {{ $nav->parent_id == '0' ? 'selected' : '' }}>Home</option>
                                    @foreach($navigations as $navigation)
                                    <option value="{{ $navigation->id }}" {{ $navigation->id == $nav->parent_id ? 'selected' : '' }}>{{ $navigation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <div class="float-end mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endguest
@endsection