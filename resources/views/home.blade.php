@extends('layouts.view')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Documentation') }}
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
<div class="idocs-navigation bg-light">
    <ul class="nav flex-column">
        @forelse ($categories as $category)

        @if(in_array($category->id, $category_home) && !in_array($category->id, $category_parent))
        <li class="nav-item nav-a"><a class="nav-link @if ($loop->first) active @endif" href="#docs_{{ $category->id }}">{{ $category->name }}</a></li>
        @elseif(in_array($category->id, $category_home) && in_array($category->id, $category_parent))
        <li class="nav-item nav-a"><a class="nav-link @if ($loop->first) active @endif" href="#docs_{{ $category->id }}">{{ $category->name }}</a>
            @if(in_array($category->id, $category_parent))
            <ul class="nav flex-column">
                @foreach($categories_parent as $parent)
                @if($parent->parent_id == $category->id)
                <li class="nav-item"><a class="nav-link" href="#docs_{{ $parent->id }}">{{ $parent->name }}</a></li>
                @endif
                @endforeach
            </ul>
            @endif
        </li>
        @endif
        @empty
        <li class="nav-item"><strong>No categories found!</strong></li>
        @endforelse
    </ul>
</div>

<div class="idocs-content-dash">
    <div class="container">


        @forelse ($pages as $page)
        <section id="docs_{{ $page->category_id }}">
            <h1>{{ $page->title }}</h1>
            {!! $page->content !!}
        </section>
        <hr class="divider">
        @empty
        <section id="docs_1">
            <h1>Getting Started</h1>
            <p>No pages found.</p>
        </section>
        <hr class="divider">
        @endforelse


    </div>
</div>
@endguest
@endsection