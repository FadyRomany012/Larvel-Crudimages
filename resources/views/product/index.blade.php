@extends('product.layout')

@section('content')
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                <h2>laravel product</h2>
                </div>
                <div class="pull-right">
                    <a href="{{route('create.product')}}" class=" btn btn-success">Create new product</a>
                </div>
            </div>
    @if ($message = Session::get('success'))
<div class="alert-sucess alert">
    <p>{{$message}}</p>
</div>
</div>

    @endif

    <table class="table-bordered table">
        <tr>

            <th>product name</th>
            <th>product code</th>
            <th>details</th>
            <th>product logo</th>
            <th>product action</th>


        </tr>
        @foreach ($product as $pro)

        <tr>
{{-- 
@read product  from modal
             --}}
                
            
            <td>{{$pro->product_name}}</td>
            <td>{{$pro->product_code}}</td>
            <td>{{$pro->details}}</td>
            <td> <img src=" {{URL::to($pro->logo)}}" style="    width: 70px;
                height: 44px;" alt=""></td>
            <td>
                <a href="{{URL::to('show/product/'.$pro->id)}}" class="btn-info btn  ">show</a>
                <a href="{{URL::to('edit/product/'.$pro->id)}}" class="btn-primary btn">edit</a>
                <a href="{{URL::to('delete/product/'.$pro->id)}}" class="btn-danger btn">delete</a>

            </td>
<br>
            @endforeach

        </tr>
    </table>
{!! $product->links() !!}

@endsection