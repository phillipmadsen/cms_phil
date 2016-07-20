@extends('layouts.app')

@section('content')
    @include('admin.pages.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.pages.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
