@extends('layoutsShop.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">

        @foreach ($products as $product)
            <div class="col-xs-6">
                <div class="ibox">
                    <div class="ibox-content product-box" >
                        <div class="product-imitation">
                            <img src="/img/product/{{ $product->image }}" style="width: 70%; height: 10%;">
                        </div>
                        <div class="product-desc">
                            <span class="product-price">
                                {{ $product->price }}
                            </span>
                            <a href="#" class="product-name"> {{ $product->name }}</a>
                            <small class="text-muted">{{ $product->type }}</small>

                            <div class="small m-t-xs" style="text-align: center;">
                                <img src="/img/menu/addbasket.png" style="width: 150px; height: 60px;">
                            </div>
                            <div class="m-t text-righ">
                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-xs deleteProduct" data-id="{{ $product->id }}">Delete {{ $product->id }}</button>
                </div>
            </div>
        @endforeach

    </div>

</div>
@endsection
@section('script')
<script type="text/javascript">

        $(document).on('click','.deleteProduct',function(){
        console.log('ssss');
        var id = $(this).attr('data-id');
        var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
        type: 'POST',
        url: "/shop/product/delete/"+id,

        data: {
            _token: token,
            _method: 'POST',
            id: id,
        },
            success: function (response) {
                console.log("ASD");

            }
        });
        window.location.reload();
    });

</script>
@endsection

