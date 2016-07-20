<div class="row">
    <div class="col-sm-12">
        <!-- Meta Title Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('meta_title', 'Meta Title:') !!}
            {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Meta Keywords Field -->
        <div class="form-group col-sm-12 ">
            {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
            {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Meta Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('meta_description', 'Meta Description:') !!}
            {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Facebook Title Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('facebook_title', 'Facebook Title:') !!}
            {!! Form::text('facebook_title', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Google Plus Title Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('google_plus_title', 'Google Plus Title:') !!}
            {!! Form::text('google_plus_title', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Twitter Title Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('twitter_title', 'Twitter Title:') !!}
            {!! Form::text('twitter_title', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
