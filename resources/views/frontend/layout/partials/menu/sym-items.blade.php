@foreach($items as $item)
    @if(!$item->hasChildren())
        @if($item->link)
            <a class="item" href="{!! $item->url() !!}">
                {!! $item->title !!}
            </a>
        @else
            {!!$item->title!!}
        @endif
    @else
        <div class="ui dropdown item">
            {!!$item->title!!} <i class="dropdown icon"></i>

            <div class="menu">
                @foreach($item->children() as $child)
                    <a href="{!! $child->url() !!}" class="item">{!! $child->title !!}</a>
                    @if($child->divider)
                        <div{!!\HTML::attributes($child->divider)!!}></div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
@endforeach