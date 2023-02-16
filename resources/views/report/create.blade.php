@extends('layouts.template')
@section('subtitle','ver')

@section('content')
<form action="{{url('/report')}}" method="post" enctype="multipart/form-data" class="container mx-auto bordered-solid rounded-lg  w-96 my-5" >
    @csrf  
    @include('report.form')
</form>
@endsection