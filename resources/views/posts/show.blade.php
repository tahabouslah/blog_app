<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
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
    </x-app-layout>
