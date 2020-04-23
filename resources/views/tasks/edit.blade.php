@extends('layouts.app')
@section('content')

<div class="container fonth4">
<h1 class="mt-5 pt-5">Edit Product</h1>
<hr>
<form action="{{ url('tasks' , [$task->id])}}" method="post" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Prpduct Name</label>
        <input type="text" value="{{$task->title}}" class="form-control" id="taskTitle" name="title">
    </div>
    <div class="form-group">
        <label for="description"> Prpduct Description</label>
        <input type="text" value="{{$task->description}}" class="form-control" id="taskDescription" name="description">
    </div>

    <div class="form-group">
        <label for="price"> Price</label>
        <input type="text" value="{{$task->price}}" class="form-control" id="taskPrice" name="price">
    </div>

    <div class="form-group">
        <label for="amount"> Amount</label>
        <input type="text" value="{{$task->amount}}" class="form-control" id="taskAmount" name="amount">
    </div>

    <div class="form-group">
        <label for="img">Product Picture  </label>
        <input type="file" value="{{$task->img}}" id="taskImg" name="img">
    </div>

    


    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
                
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection