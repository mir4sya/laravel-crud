@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Tasks</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $tasks->tasks }}</h5>
        <p class="card-text">Description : {{ $tasks->description }}</p>
  </div>
      
    </hr>
  
  </div>
</div>