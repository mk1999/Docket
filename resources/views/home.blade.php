
@extends('layouts.app')

@section('content')
<div class="container">
    <form class="row" action="{{url("/")}}/home/add" method="POST">
        {{ csrf_field() }}
        <div class="col-md-8">
            <div class="form-group">
                <input type="text" name="task" class="form-control" id="task" placeholder="Add Task">
            </div>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary btn-block">Add Task</button>
        </div>
    </form>
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center">Upcoming Tasks</h1>
                <ul class="list-group">
                    @foreach($tasks as $task)
                        <li class="list-group-item">
                            @if($task->status == 1)
                                <s>{{$task->task}}</s>
                                
                            @else
                                {{$task->task}}  
                                <div class="float-right"><a href="complete/{{$task->id}}" class="btn btn-primary">Completed</a></div>
                                  
                            @endif    
                        </li>    
                    @endforeach
                </ul>    
        </div>
        <div class="col-md-6">
            <h1 class="text-center">Completed Tasks</h1>
                <ul class="list-group">
                    @foreach($tasks as $task)
                        
                            @if($task->status == 1)
                                <li class="list-group-item">
                                    {{$task->task}}    
                                </li>  
                            @endif 
                             
                    @endforeach
                </ul> 
        </div>
    </div>
</div>
@endsection


