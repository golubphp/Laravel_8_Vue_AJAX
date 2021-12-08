<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    
</head>
    <body>
	
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Carousel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
<br />
<br />
<br />
<br />	
<div id="app">
   <example-component></example-component>
</div>
<br />
<br />

<div id="app2">

  
  <div class="container-fluid">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
  <img
	v-bind:src="picture"
	:alt="`${firstName} ${lastName}`"
	:class="gender"
  />
  <h1>@{{firstName}} @{{lastName}}</h1>
  <h4>@{{email}}</h4>
  <h4>Gender: @{{gender}}</h4>
  <button class="btn btn-primary" @click="getUser()">Get Random User</button>
      </div><!-- /.col-lg-4 -->



  </div>
    </div>

</div>


	
<script src="https://unpkg.com/vue@3.0.5"></script>	
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
