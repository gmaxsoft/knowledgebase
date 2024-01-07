@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Navigations') }}
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
                    <h3>{{ __("Categories") }}</h3>
                </div>
                <div class="float-end"><a href="{{ route('navs.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add new</a></div>
            </div>
            <div class="card-body">
                <p>Categories editing and management.</p>
                <div class="clearfloat"></div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 5%"></th>
                                <th scope="col" style="width: 5%">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Parent category</th>
                                <th scope="col" style="width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            @forelse ($navigations as $navigation)
                            <tr data-id="{{ $navigation->id }}">
                                <td class="handle"><i class="fa fa-arrows-alt"></i></td>
                                <td scope="row" class="pos_num">{{ $loop->iteration }}</td>
                                <td>{{ $navigation->name }}</td>
                                <td>{{ $nav_name[$navigation->parent_id]}}</td>
                                <td>
                                    <form action="{{ route('navs.destroy', $navigation->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('navs.edit', $navigation->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this Category?');"><i class="bi bi-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No categories found!</strong>
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
<script>
    $(document).ready(function() {
        $("#sortable").sortable({
            placeholder: "ui-state-highlight",
            handle: '.handle',
            update: function(event, ui) {

                var post_order_ids = new Array();
                $('#sortable tr').each(function() {
                    post_order_ids.push($(this).data("id"));
                });

                console.log(post_order_ids);
                $.ajax({
                    type: "POST",
                    url: "{{ route('navs.order_change') }}",
                    dataType: "json",
                    data: {
                        order: post_order_ids,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        //toastr.success(response.message);
                        $('#sortable tr').each(function(index) {
                            $(this).find('.pos_num').text(index + 1);
                        });

                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
@endguest
@endsection