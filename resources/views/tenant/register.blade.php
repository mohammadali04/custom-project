@extends('auth.index')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">ثبت نام</div>
            <div class="card-body">
                <form action="{{ Route('store.tenant') }}" method="post">
                @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">نام</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">دامنه</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('domain') is-invalid @enderror" id="domain"
                                name="domain" value="{{ old('domain') }}">
                            @if ($errors->has('domain'))
                            <span class="text-danger">{{ $errors->first('domain') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">پایگاه داده</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('database') is-invalid @enderror"
                                id="database" name="database" value="{{ old('database') }}">
                            @if ($errors->has('database'))
                            <span class="text-danger">{{ $errors->first('database') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="ثبت نام">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection