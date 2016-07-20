@extend('frontend/layout/layout')

@section('content')
<ul>
@foreach($authors as $author)
<li>{!! $author->name !!}</li>
@endforeach
    </ul>

@endsection