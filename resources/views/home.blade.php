@extends('layouts.app')


@section('content')
<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<div class="container">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		
		@guest
                            <section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-200 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"></h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3"></h1>
		  <br>
          <h2 class="leading-relaxed mb-3"><b>Please Login First...</b></h2>
		  <br>
          <a href="{{ route('login') }}"><button class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Login</button></a><hr><br>
		  
		  <h4 style="float:center;">OR</h4><br>
		  <a href="{{ route('register') }}"><button class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Register</button></a><hr>
		  
          
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        
      </div>
    </div>
  </div>
</section>
							
                        @else
                            
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
							
                        </div>
                    @endif

                    You are logged in!
				<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <h2 class="sm:text-3xl text-2xl text-gray-900 font-medium title-font mb-2 md:w-2/5">Welcome to Dashboard..
	</h2>
    <div class="md:w-3/5 md:pl-6">
      <p class="leading-relaxed text-base">Click below button to see the topic list..</p>
      <div class="flex md:mt-4 mt-6">
	  <a href="http://localhost:8000/tasks">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Topics</button></a>
      </div>
    </div>
  </div>
</section>
            </div>
        </div>
		@endguest
		
    </div>
</div>
</div>
@endsection
