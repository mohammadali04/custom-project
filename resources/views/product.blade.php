@extends('auth.index');
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">ثبت محصول</div>
            <div class="card-body">
                <form action="{{  url('tenants/'.app('currentTenant')->name.'/update'.'/'.$product->id)  }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">نام</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="name" name="name" value="{{$product->name }}">
                           
                        </div>
                    </div>
                   
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="ویرایش محصول">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection