<table class="table table-responsive" id="products-table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Office Status</th>
        <th>Price</th>

        <th>SKU</th>
        <th>MPN</th>
        <th colspan="3">Action</th>
        <th>Is Published</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->id !!}</td>
            <td><a href="{!! route(getLang().'.admin.products.edit', [$product->id]) !!}" class=''>{!! $product->name !!}</a></td>
            <td>{!! $product->category !!}</td>
            <td>{!! $product->office_status !!}</td>
            <td>{!! $product->price !!}</td>

            <td>{!! $product->sku !!}</td>
            <td>{!! $product->mpn !!}</td>

            <td class="center">
                <div class="visible-md visible-lg hidden-sm hidden-xs">
                    {!! Form::open(['route' => [getLang().'.admin.products.destroy', $product->id], 'method' => 'delete']) !!}

                    <a href="{!! langRoute('admin.products.edit', [$product->id]) !!}" class='btn btn-xs btn-teal tooltips'  data-placement="top" data-original-title="Edit">
                    <i class="fa fa-edit"></i></a>

                        {!! Form::button('<i class="fa fa-times fa fa-white"></i> ', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs tooltips', 'data-placement' => 'top' , 'data-original-title' => 'Remove' , 'onclick' => "return confirm('Are you sure?')"]) !!}

                    {!! Form::close() !!}
                </div>
            </td>
            <td colspan="3">
                <a href="#" id="{!! $product->id !!}" class="publish">
                 &nbsp;   <img id="publish-image-{!! $product->id !!}" src="{!! url('/assets/images') !!}/{!! ($product->is_published) ? 'publish.png' : 'not_publish.png'  !!}"/>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
