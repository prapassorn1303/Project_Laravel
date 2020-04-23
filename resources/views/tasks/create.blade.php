@extends('layouts.app')
@section('content')

    <div class="container fonth4">
        <h1 class="mt-5 pt-5 fonth3">Add New Product</h1>
    <hr>
        <form action="/tasks" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Product Name </label>
                <input type="text" class="form-control" id="taskTitle" name="title">
            </div>

            <div class="form-group">
                <label for="description">Prpduct Description </label>
                <input type="text" class="form-control" id="taskDescription" name="description">
            </div>

            <div class="form-group">
                <label for="price">Price </label>
                <input type="text" class="form-control" id="taskPrice" name="price">
            </div>

            <div class="form-group">
                <label for="amount">Amount </label>
                <input type="text" class="form-control" id="taskAmount" name="amount">
            </div>

            
           <div class="form-group">
                <label for="img">Product Picture  </label>
                
                <input type="file" id="taskImg" name="img">
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