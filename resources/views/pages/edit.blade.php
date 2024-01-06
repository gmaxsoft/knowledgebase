@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page edit') }}
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
                    <h3>{{ __("Edit pages") }}</h3>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('pages.update',$page->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Page Title" value="{{ $page->title }}">
                            </div>
                            <div class="form-group mt-3">
                                <strong>Content:</strong>
                                <textarea class="form-control editor" style="height:150px" name="content" id="content" placeholder="Page content">{{ $page->content }}</textarea>
                            </div>
                            <div class="form-group mt-3">
                                <strong>Category:</strong>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="0" {{ $page->category_id == '0' ? 'selected' : '' }}>Home</option>
                                    @foreach ($navigations as $navigation)
                                    <option value="{{ $navigation->id }}" {{ $navigation->id == $page->category_id ? 'selected' : '' }}>{{ $navigation->name }}</option>
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
<script>
    ClassicEditor.create(document.querySelector('.editor'));
</script>
@endguest
@endsection