@extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h3>Product categories</h3>
            <ul class="list-group">
                @foreach ($sidebar as $sb)
                <li class="list-group-item">{{$sb -> name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class=" d-flex gap-4">
                    @foreach ($products as $pd)
                    <div class="card">
                        <img src="{{https://down-vn.img.susercontent.com/file/sg-11134201-7rdxk-lxieto5ezgkff8@resize_w900_nl.webp"}} 
                        class="card-img-top" alt="Product">
                        <div class="card-body">
                            <p class="card-title">Adult Quantity Tee</p>
                            <p class="card-text">$26.00 - $29.00</p>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
                <!-- Lặp lại thêm sản phẩm ở đây -->
            </div>
        </div>
    </div>
</div>
@endsection
