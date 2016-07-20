<div id="item-container">
     <ul>
     @foreach ($items as $item)
        <li>{{ $item->name }}</li>
     @endforeach
     </ul>
</div>

<script>
$('#filterselectbox').change(function() {
    var id = $('#filterselectbox').val();
    var ajaxurl = '{{route('myitems', ':id')}}';
    ajaxurl = ajaxurl.replace(':id', id);
    $.ajax({
        url: ajaxurl,
        type: "GET",
        success: function(data){
            $data = $(data); // the HTML content that controller has produced
            $('#item-container').hide().html($data).fadeIn();
        }
    });
});
</script>