@extends('layouts.app')
@section('content')


        



<div class="container">
    <h1 class="mt-5 pt-5 p" style="padding-left: 10px;">  {{$task->title}}</h1>

<div class="row  mt-10 pt-5 col col-sm-15">
    

    <div class="product-carousel col-md-6 ">
                        
        <img style="width: 500px;height: 500px" src="{{asset($task->img)}} "  class="rounded float-left img-thumbnail page-content">          
        
    </div>

    <div class=" product-carousel col-md-6 p ">

    <h3> {{$task->title}}<br></h3>
    <p>
       
        <strong>Description : </strong>{{$task->description}} <br>
        <strong>Price : </strong>{{$task->price}} บาท <br>
        <strong>Amount : </strong>{{$task->amount}} ชุด

    
        
       
    </p>
</div>
</div>
</div>
</div>
@endsection