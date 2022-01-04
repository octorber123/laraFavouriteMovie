
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 ">
<div class="card">
<div class="card-header"> <h3>Movie Details</h3></div>
<div class="card-body">

<table class="table table-striped" border="1" >

<tr> <th>IMDB ID </th> <td>{{data_get($movie, 'imdbID')}}</td></tr>
<tr> <th>Title </th> <td>{{data_get($movie, 'Title')}}</td></tr>
<tr> <th>Plot</th> <td>{{data_get($movie, 'Plot')}}</td></tr>
<tr> <th>Actors</th> <td>{{data_get($movie, 'Actors')}}</td></tr>
<tr> <th>Director(s)</th> <td>{{data_get($movie, 'Director')}}</td></tr>

<tr> <td colspan='2' ><img style="width:100%;height:100%"
src="{{data_get($movie, 'Poster')}}"></td></tr>
</table>

<table><tr>
<td>
    <form action="/favourites/{{$user->id}}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="imdbID" value="{{data_get($movie, 'imdbID')}}"> 
    <button class="btn btn-primary">unfavourite</button>
    </form>
</td>
<td><a href="/favourites" class="btn btn-primary" role="button">Back to favorites</a></td>
</tr></table>

</div>
</div>
</div>
</div>
</div>

@endsection



