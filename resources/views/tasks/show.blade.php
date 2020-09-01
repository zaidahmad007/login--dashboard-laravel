@extends('layout.layout')

@section('content')

<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
            <h1>Showing Task {{ $task->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Description:</strong> {{ $task->description }}
        </p>
	<br>
	  <a href="http://localhost:8000/tasks">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Button</button></a>
      	
    </div>
@endsection