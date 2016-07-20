@foreach($items as $item)
    <li @if($item->hasChildren()) @endif class="{{ Request::url() == $item->url() ? 'active' : '' }}" >
        @if($item->link) <a @if($item->hasChildren()) class="sub-menu"  href="javascript:void(0)" @else href="{{ $item->url() }}" @endif>
       <span class="title">     {!! $item->prependIcon()->title !!}</span>
            @if($item->hasChildren()) <b class="caret"></b> @endif
        </a>
        @else
            {{$item->title}}
        @endif
        @if($item->hasChildren())
        <span class="selected"></span>
            <ul class="sub-menu">
                @foreach($item->children() as $child)
                    <li><a href="{{ $child->url() }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif

    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach


