@extends('admin.layout.template')
@section('admin-title', config('site.site.admin.name').' | Store')

@section('admin-content')


    <div id="content">
        <div id="content-header" class="mini">
            <h1>Store Management</h1>
        </div>
        <adminer></adminer>
    </div>
@stop