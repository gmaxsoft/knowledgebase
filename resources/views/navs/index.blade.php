@extends('layouts.app')
@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Navigations') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg border-page">
            <div class="p-6 text-gray-900">
                {{ __("This is the navigation page!") }}

                <div class="card">
                    <div class="card-body">
                        <table id="navs_datatable" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id.</th>
                                    <th>Name</th>
                                    <th>Data dodania</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#navs_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('navs.index') }}",
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                }
            ]
        });
    });
</script>
@endsection