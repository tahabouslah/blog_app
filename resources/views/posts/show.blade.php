<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
        @include('layouts.navigation')
       <div class="container">

        <h1>Post Details :  </h1>
        <div class="card mb-3">
            <img src="{{$posts->image}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$posts->title}}</h5>
              <h5 class="card-title">Author : {{$posts->user->name}}</h5>
              <p class="card-text">{{$posts->body}}</p>
              <p class="card-text"><small class="text-body-secondary">Last updated {{$posts->updated_at}}</small></p>
              <p class="card-text"><small class="text-body-secondary">Created at : {{$posts->created_at}}</small></p>

            </div>
          </div>
       </div>
    </body>
    </html>