@extends('bio.layout')


@section('content')

<div class="pull-left">

<h2>List</h2>

</div>

<div class="row">
    <div class="col-lg-12 margin-tb">

    <div class="class pull-right">
        <a class="btn btn-success" href="{{ route('bio.create')}}">Create New  List
</a>
    </div>
</div>
</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

<p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>

    <th>No</th>
    <th>Fullname</th>
    <th>Address</th>
    <th>Course</th>
    <th width="280px">Action</th>
</tr>

@foreach ($bio as $bios)

<tr>
    <td>{{ ++$i}}</td>
    <td>{{ $bios->fullname}}</td>
    <td>{{ $bios->address}}</td>
    <td> {{$bios->course}}</td>

    <td>
        <form action="{{ route('bio.destroy',$bios->id) }} " method="POST">

        
        <a class="btn btn-primary" href="{{ route('bio.edit',$bios->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-danger">Enter</button>

</form>
</td>
</tr>

@endforeach

</table>