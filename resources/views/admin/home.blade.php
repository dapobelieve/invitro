@extends('admin.layout.template')
@section('admin-title', 'IVF Dashboard')

@section('admin-content')

<div id="content">
    <div id="content-header" class="mini">
        <h1>Dashboard</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>
    <div class="container-fluid">
        @include('admin.layout.stats')
        <br />

        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-info">
                    Welcome in the <strong>Unicorn Admin Theme</strong>. Don't forget to check all the pages!
                    <a href="#" data-dismiss="alert" class="close">×</a>
                </div>
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fa fa-signal"></i></span>
                        <h5>Site Statistics</h5>
                        <div class="buttons">
                            <a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="row">
                            {{--Charts Should be here --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop