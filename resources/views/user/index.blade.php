@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="container mb-3 mt-3">
<div class="card">
<div class="card-header"><h3>Your Favourites</h3></div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped" style="width: 100%">
<thead>
<tr>
<th>IMDB ID</th>
<th>Title</th>
<th>Plot</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody>

@foreach($movies as $movie)
<tr>
<td>{{data_get($movie, 'imdbID')}}</td>
<td>{{data_get($movie, 'Title')}}</td>
<td>{{data_get($movie, 'Plot')}}</td>
<td><a href="/favourites/{{data_get($movie, 'imdbID')}}">see more</a></td>
@endforeach

</tr>
</tbody>
</div>
</div>
</div>
</div>
</div>
</div>





@endsection
