@extend('frontend/layout/layout')

@section('content')

<h1>{!! $author->name !!</h1>

<p>{!! $author->about !!</p>
<p><small>{!! $author->updated_at !!</small></p>

@endsection