@foreach($items as $item)
    <li @if($item->hasChildren())class =""@endif>
        @if($item->link) <a @if($item->hasChildren()) class=" " data-toggle="dropdown" @endif href="{{ $item->url() }}">
            {!! $item->prependIcon()->title !!}
            @if($item->hasChildren()) <b class="caret"></b> @endif
        </a>
        @else
            {{ $item->title }}
        @endif
        @if($item->hasChildren())
            <ul class="sf-menu">
                @foreach($item->children() as $child)
                    <li><a class=" " href="{{ $child->url() }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach

<!-- sf-js-enabled sf-arrows -->