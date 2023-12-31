@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Manage pages') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-6 ">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg border-page">
            <div class="p-6 text-gray-900">
                {{ __("This is the page!") }}
            </div>
        </div>
    </div>
</div>
@endsection