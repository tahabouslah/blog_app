@extends('layouts.app')
@section('content')
  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">Category</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $p)
          <tr>
              <th scope="row">{{$p->id}}</th>
              <td>{{$p->title}}</td>
              <td>{{substr($p->body,0, 100).'...'}}</td>
              <td>{{$p->user->name}}</td>
              <td>
                  <a href="/posts/{{$p->id}}" > <div class="btn btn-outline-info">Show</div></a>
                  <div class="btn btn-outline-warning">Edit</div>
                  <div class="btn btn-outline-danger">Delete</div>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
@endsection