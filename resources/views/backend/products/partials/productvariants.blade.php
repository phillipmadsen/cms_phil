 
<div class="form-group">
    {!! Form::label('variants', trans('product.variants'), array('class' => 'control-label')) !!}
    <div class="panel-content">

        <table class="table">
            <thead>
            <tr>
                <th>{{trans('product.attribute_name')}}</th>
                <th>{{trans('product.product_attribute_value')}}</th>
                <th>{{trans('product.options')}}</th>
            </tr>
            </thead>
            <tbody id="InputsWrapper">
            @if(isset($product) && $product->variants->count()>0)
                @foreach($product->variants as $variants)
                    <tr>
                        <td><input type="text" class="form-control" value="{{$variants->attribute_name}}"
                                   name="attribute_name[]"></td>
                        <td><input type="text" class="form-control"
                                   value="{{$variants->product_attribute_value}}"
                                   name="product_attribute_value[]">
                        </td>
                        <td><a data-target="#modal-basic" data-toggle="modal"
                               class="delete removeclass" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td><input type="text" class="form-control" value="" name="attribute_name[]"></td>
                    <td><input type="text" class="form-control" value="" name="product_attribute_value[]"></td>
                    <td><a data-target="#modal-basic" data-toggle="modal"
                           class="delete removeclass" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        <a id="AddMoreFileBox" href="#">
            <button class="btn btn-sm btn-primary" type="button"><i
                        class="fa fa-plus"></i> {{trans('product.add_item')}}
            </button>
        </a>
    </div>
</div>
 
    <script>
        $(document).ready(function () {

            var MaxInputs = 50; //maximum input boxes allowed
            var InputsWrapper = $("#InputsWrapper"); //Input boxes wrapper ID
            var AddButton = $("#AddMoreFileBox"); //Add button ID

            var x = InputsWrapper.length; //initlal text box count
            var FieldCount = 1; //to keep track of text box added

            $(AddButton).click(function (e)  //on add input button click
            {
                if (x <= MaxInputs) //max input box allowed
                {
                    FieldCount++; //text box added increment
                    //add input box
                    $(InputsWrapper).append('<tr><td><input type="text" name="attribute_name[]" value="" class="form-control"></td><td><input type="text" name="product_attribute_value[]" value="" class="form-control"></td><td><a href="javascript:void(0)" class="delete removeclass" data-toggle="modal" data-target="#modal-basic"><i class="fa fa-fw fa-times text-danger"></i></a></td></tr>');
                    x++; //text box increment
                }
                return false;
            });

            $("#InputsWrapper").on("click", ".removeclass", function (e) { //user click on remove text
                @if(!isset($product))
                if (x > 1) {
                    $(this).parent().parent().remove(); //remove text box
                    x--; //decrement textbox
                }
                @else
                    $(this).parent().parent().remove(); //remove text box
                x--; //decrement textbox
                @endif
                        return false;
            })

        });
    </script>
