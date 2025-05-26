@extends('auth.index')
@section('content')
<form action="{{ Route('tenant.product.destroy',app('currentTenant')->name) }}">
<div class="d-flex justify-content-around">
    <table class="table">
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">تایخ ثبت</th>
                <th scope="col">تاریخ بروز رسانی</th>
                <th scope="col">انتخاب</th>

                @foreach ($products as $product)
            </tr>
     
                <th scope="row">{{$product->id}}</th>
                <td><a
                        href="{{ url('tenants/'.app('currentTenant')->name.'/'.'edit'.'/'.$product->id) }}">{{$product->name}}</a>
                </td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td><input type="checkbox" name="ids[]" value="{{$product->id}}"></td>
                <br>
            </tr>
            <hr>
            @endforeach
    </table>
  
</div>
<div class="col-12 d-flex justify-content-center">
<a href="{{ Route('tenant.product.create',app('currentTenant')->name) }}" class="btn btn-primary">ثبت محصول</a>
    <button type="submit" class="btn btn-danger">حذف محصول</button>
</div>
</form>
@endsection