@inject('product_images', 'Fully\Models\ProductImage')

<div class="col-md-12">
    <table id="product-review" class="table">
        <thead>
            <tr>
                <th style="min-width:100px"><strong>Preview</strong>
                </th>
                <th style="min-width:150px"><strong>Label</strong>
                </th>
                <th><strong>Main image</strong>
                </th>
                <th><strong>Thumbnail</strong>
                </th>
                <th><strong>Gallery</strong>
                </th>
                <th class="text-center"><strong>Actions</strong>
                </th>
            </tr>
        </thead>
        <tbody>







        <tr>
	        <td style="width:20%">
		        <div class="fileupload fileupload-new" data-provides="fileupload">
			        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
				        <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
			        </div>
			        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
			        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
	                            {!! Form::file('images', null, array('class'=>'form-control', 'id' => 'images', 'value'=>Input::old('images'))) !!}
                            </span>
				        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
					        <i class="fa fa-times"></i> Remove
				        </a>
			        </div>
		        </div>
	        </td>
	        <td>

	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
	        </td>
	        <td class="text-center">
		        <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
	        </td>
        </tr>



        <tr>
	        <td style="width:20%">
		        <div class="fileupload fileupload-new" data-provides="fileupload">
			        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
				        <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
			        </div>
			        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
			        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
	                            {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'value'=>Input::old('image'))) !!}
                            </span>
				        <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
					        <i class="fa fa-times"></i> Remove
				        </a>
			        </div>
		        </div>
	        </td>
	        <td>

	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
	        </td>
	        <td>
		        <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
	        </td>
	        <td class="text-center">
		        <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
	        </td>
        </tr>








            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('primarty_image', null, array('class'=>'form-control', 'id' => 'primarty_image', 'value'=>Input::old('primarty_image'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    {!! Form::text('primary_image_label', null, ['class' => 'form-control']) !!}
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
            </tr>
            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('second_image', null, array('class'=>'form-control', 'id' => 'second_image', 'value'=>Input::old('second_image'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    {!! Form::text('second_image_label', null, ['class' => 'form-control']) !!}
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
            </tr>
            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('third_image', null, array('class'=>'form-control', 'id' => 'third_image', 'value'=>Input::old('third_image'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    {!! Form::text('third_image_label', null, ['class' => 'form-control']) !!}
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10" checked=""></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-main" value="1" class="m-t-10"></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
            </tr>
            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('fourth_image', null, array('class'=>'form-control', 'id' => 'fourth_image', 'value'=>Input::old('fourth_image'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    {!! Form::text('fourth_image_label', null, ['class' => 'form-control']) !!}
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-thumbnail" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-thumbnail" value="1" class="m-t-10" checked=""></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-thumbnail" value="1" class="m-t-10"></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
            </tr>
            <tr>
                <td style="width:20%">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA?text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                            {!! Form::file('fifth_image', null, array('class'=>'form-control', 'id' => 'fifth_image', 'value'=>Input::old('fifth_image'))) !!}
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remove
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    {!! Form::text('fifth_image_label', null, ['class' => 'form-control']) !!}
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-gallery" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-gallery" value="1" class="m-t-10"></div>
                </td>
                <td>
                    <div class=" ui-checkbox"><input type="checkbox" name="product1-gallery" value="1" class="m-t-10" checked=""></div>
                </td>
                <td class="text-center">
                    <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                </td>
            </tr>



        </tbody>
    </table>
</div>
