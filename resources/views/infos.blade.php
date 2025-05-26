@extends('auth.index');
@section('content')
<div class="align-center d-flex justify-content-center col-md-8">
<div class="col-12">
    <h1>my infos</h1>
</div>

<div class="col-12">
    <h3>{{ 'hello'.'  '.$tenant->name }}</h3>
</div>
</div>

@endsection