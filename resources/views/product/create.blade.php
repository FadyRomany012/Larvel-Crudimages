@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Add new product</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('product.index')}}" class=" btn btn-success">Back</a>
        </div>
    </div>
</div>
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product name :</strong>
            <input type="text" name="product_name" class="form-control" placeholder="product name">
        </div>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Product code :</strong>
            <input type="text" name="product_code" class="form-control" placeholder="product code">
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product details :</strong>
            <textarea type="text" name="details" class="form-control" placeholder="details"></textarea>
        </div>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>logo :</strong>
            <input type="file" name="logo" >
        </div>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-6">
            <button type="submit" class="btn-primary btn">Submit</button>
    </div>
</div>


</form>
@endsection