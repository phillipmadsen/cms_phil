@if($errors->any())
@include('common.errors')
@endif
<style>

.tab-pane {


     min-height:800px;

     height:100%;
}
</style>
<div id="panel_tab_content" class="tab-pane active">

        <!-- Title Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

<!-- Slug Field -->
<div class="form-group col-sm-4">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

        <!-- Subtitle Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('subtitle', 'Subtitle:') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Excerpt Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('excerpt', 'Excerpt:') !!}
            {!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '5']) !!}
        </div>

        <!-- Content Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('content', 'Content:') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '40',]) !!}
        </div>

</div>
<div id="panel_tab_seo" class="tab-pane">
    <!-- Meta Title Field -->
    <div class="form-group col-sm-10">
        {!! Form::label('meta_title', 'Meta Title:') !!}
        {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
         <small id="count_title"></small>
    </div>


    <!-- Meta Keywords Field -->
    <div class="form-group col-sm-10">
        {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
        {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
        <small>Use up to 5 keywords max</small>
    </div>

    <!-- Meta Description Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('meta_description', 'Meta Description:') !!}
        {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'row' => '5']) !!}
        <small id="count_message"></small>

    </div>

<script>

var text_max = 160;
var title_max = 65;

$('#count_message').html(text_max + ' characters remaining');


$('#meta_description').keyup(function() {
  var text_length = $('#meta_description').val().length;
  var text_remaining = text_max - text_length;

  $('#count_message').html(text_remaining + ' characters remaining');
});


$('#count_title').html(title_max + ' characters remaining');

$('#meta_title').keyup(function() {
  var text_length = $('#meta_title').val().length;
  var text_remaining = title_max - text_length;

  $('#count_title').html(text_remaining + ' characters remaining');
});

</script>


</div>
<div id="panel_tab_social" class="tab-pane">

    <!-- Fb Title Field -->
    <div class="form-group col-sm-10">
        {!! Form::label('fb_title', 'FaceBook Title:') !!}
        {!! Form::text('fb_title', null, ['class' => 'form-control titleclass']) !!}
        <small id="fb_title_message"></small>
    </div>

    <!-- Gp Title Field -->
    <div class="form-group col-sm-10">
        {!! Form::label('gp_title', 'Google Plus Title:') !!}
        {!! Form::text('gp_title', null, ['class' => 'form-control titleclass']) !!}
        <small id="gp_title_message"></small>
    </div>



<script>


var title_max = 65;

$('#gp_title_message').html(title_max + ' characters remaining');


$('#gp_title').keyup(function() {
  var text_length = $('#gp_title').val().length;
  var text_remaining =title_max - text_length;

  $('#gp_title_message').html(text_remaining + ' characters remaining');
});


$('#fb_title_message').html(title_max + ' characters remaining');

$('#fb_title').keyup(function() {
  var text_length = $('#fb_title').val().length;
  var text_remaining = title_max - text_length;

  $('#fb_title_message').html(text_remaining + ' characters remaining');
});

</script>
</div>
