
@extends('backend/layout/clip')

@section('topscripts')

<link rel="stylesheet" href="{!! asset('assets/css/menu-managment.css') !!}">

<script type="text/javascript">
        $(document).ready(function () {

            $('#notification').show().delay(4000).fadeOut(700);

            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{!! url(getLang() . '/admin/menu/" + id + "/toggle-publish/') !!}",
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "{!! url('/') !!}/assets/images/publish_16x16.png" : "{!!url('/')!!}/assets/images/not_publish_16x16.png";
                            $("#publish-image-" + id).attr('src', imagePath);
                        }
                    },
                    error: function () {
                        alert("error");
                    }
                });
            });
        });
    </script>
@endsection

@section('pagetitle')
<div class="row">



    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="active"><a href="{!! url(getLang() . '/admin/menus') !!}"><i class="fa fa-cog"></i> Menus</a></li>
            <li class="active">Menu</li>
        </ol>
        <div class="page-header">
            <h1> Menu <small> | interactive hierarchical menus</small> </h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
@endsection



@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">


        @include('flash::message')
        <div class="pull-right">
            <div id="msg"></div>
        </div>

            <div class="col-md-8">

                <div class="space12">
                    <div class="btn-group btn-group-lg">
                        <a class="btn btn-default active" href="javascript:;"> Menus </a>
                        <a class="btn btn-default hidden-xs" href="{!! langRoute('admin.menu.create') !!}">
                         <i class="fa fa-plus"></i> Add Link To Menu</a>
                    </div>
                </div>
                <br style="clear:both" />
                <div class="dd" id="nestable">
                    {!! $menus !!}
                </div>
                <br style="clear:both" />

                <textarea id="nestable-output"></textarea>
                <div id="nestable-menu">
                    <button type="button" data-action="expand-all" class="btn btn-blue">Expand All</button>
                    <button type="button" data-action="collapse-all" class="btn btn-bricky">Collapse All</button>
                </div>
                <!-- end: DRAGGABLE HANDLES 3 PANEL -->
            </div>
        </div>



        </div>
    </div>
</div>
@endsection


@section('bottomscripts')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


<script type="text/javascript">
        $(document).ready(function () {

            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                        output = list.data('output');
                if (window.JSON) {

                    var jsonData = window.JSON.stringify(list.nestable('serialize'));

                    console.log(window.JSON.stringify(list.nestable('serialize')));

                    $.ajax({
                        type: "POST",
                        url: "{!! URL::route('admin.menu.save') !!}",
                        data: {'json': jsonData},
                        headers: {
                            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                        },
                        success: function (response) {

                            //$("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');
                            $("#msg").append('<div class="alert alert-success"><div class="msg-save" style="float:right; color:red;">Saving!</div></div>');
                            $('.msg-save').delay(1000).fadeOut(500);
                        },
                        error: function () {
                            alert("error");
                        }
                    });

                } else {
                    alert('error');
                }
            };

            $('#nestable').nestable({
                group: 1
            }).on('change', updateOutput);
        });
    </script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

@endsection


@section('clipinline')
UINestable.init();
@endsection