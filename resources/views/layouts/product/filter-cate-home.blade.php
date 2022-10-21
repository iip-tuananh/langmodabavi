@foreach ($products as $product)
<div class="col-md-4 col-sm-6 col-xs-12">
    @include('layouts.product.item', ['product'=>$product])
</div>
@endforeach