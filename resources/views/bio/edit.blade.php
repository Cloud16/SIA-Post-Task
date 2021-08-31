@extends('bio.layout')


@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        <h2>Edit</h2>
        </div>

        <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('bio.index')}}">Back</a>

</div>
</div>
</div>

@if ($errors->any())


<div class=" alert alert-danger">
<strong>Error! </strong> There were Problems with your input<br><br>
<ul>
    @foreach ($errors->all() as $error)

    <li>{{ $errors}}</li>

    @endif

    <form action="{{route('bio.update',$bios->id}}" method ="POST">

    @csrf

    @method('PUT')

    <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class=" form-group">
        <strong>Full Name</strong>
        <input type="text" name="fullname" value="{{ $bios->fullname}}" class="form-control" placeholder="Fullname">
</div>
</div>


    <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class=" form-group">
        <strong>Address</strong>
        <input type="text" name="address" value="{{ $bios->address}}" class="form-control" placeholder="Adddress">
</div>
</div>

<div class=" col-xs-12 col-sm-12 col-md-12">
        <div class=" form-group">
        <strong>Course</strong>
        <input type="text" name="course" value="{{ $bios->course}}" class="form-control" placeholder="Course">
</div>
</div>

<div class=" col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
</div>
</div>
</form>

@endsection