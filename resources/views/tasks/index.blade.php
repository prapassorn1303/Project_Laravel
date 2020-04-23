@extends('layouts.app')
@section('content')


<div class="container mt-4 pt-5 ">
    <h1 class="section-title fonth3"> Clothing </h1>
                    <h4 class="text-indent pt-3 p" >
                        Beer Wedding ขาย - เช่าชุดเสื้อผ้าออนไลน์ ไม่ว่าจะเป็นชุดแต่งงาน ชุดงานแฟนซีต่างๆ เราก็มีให้เลือกหลากหลาย ราคาไม่แพง รวมทั้งมีเครื่องประดับมากมายให้เช่าฟรี
                    </h4>
</div>
<div class="container mt-4 pt-5 ">
    @if (Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif
        
    
    <table class="table p  table-striped "  >
        <thead class="text-light" style="background-color: #4E342E; ">
            <tr>
                <th scope="col"> </th>
                <th scope="col" style="width:12%;">Prpduct Name </th>
                <th scope="col">Prpduct Description</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Product Picture </th>
                <th scope="col" style="width:9%;">Created At </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody >

            
            @foreach ($tasks as $task)
                
                <tr>
                <th scope="row">{{$task->id}}</th>
                <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
                <td>{{$task->description}}</td>
                <td>{{$task->price}}</td>
                <td>{{$task->amount}}</td>
                <td><img style="width: 150px;height: 150px" src="{{asset($task->img)}}"></td>
                <td>{{$task->created_at->toFormattedDateString()}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ URL::to('tasks/'. $task->id .'/edit')}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{url('tasks',[$task->id])}}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="btn btn-danger" value="Delete">

                        </form>
                    </div>    
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   

</div>
@endsection