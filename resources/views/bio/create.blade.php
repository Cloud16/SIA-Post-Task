@extends('bio.layout')


@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">
    <div class="pull-left">

  <h2>Add Information</h2>
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

    <li>{{ $error}}</li>

    @endforeach
</ul>
</div>

@endif
<form action="{{ route('bio.store')}}" method="POST">

@csrf

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong> Name</strong>
	<input type="text" name="fullname" class="form-control" placeholder="fullname">
	
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Address</strong>

	<input type="text" name="address" class="form-control" placeholder="Type here">

</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Course</strong>
	<input type="text" name="course" class="form-control" placeholder="Price">

</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection