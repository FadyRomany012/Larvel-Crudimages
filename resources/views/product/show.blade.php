@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Edit product</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('product.index')}}" class=" btn btn-success">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product name :</strong>
<h2>{{$product->product_name}}</h2>
        </div>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product code :</strong>
            <h2>{{$product->product_code}}</h2>

        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product details :</strong>
            <p>{{$product->details}}</p>
        </div>
    </div>
    
   
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>image :</strong>
            <img src="{{URL::to($product->logo)}}" style="    width: 70px;
                height: 44px;" alt="">
        </div>
    </div>
    
   
</div>


@endsection