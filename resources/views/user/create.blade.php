<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')
<div class="container">
 <div class="row justify-content-center">
<div class="col-md-10 ">
 <div class="card">
 <div class="card-header">Add movie to favourites</div>
 <!-- define the form -->

<div class="card-body">
<form class="form-horizontal" method="POST"
action="/favourites/" enctype="multipart/form-data">
@csrf
<div class="col-md-8">
<label >movie Imdb ID</label>
<input type="text" name="imdbID"
placeholder="Imdb ID" />
</div>

<div class="col-md-6 col-md-offset-4">
<input type="submit" class="btn btn-primary" />
<input type="reset" class="btn btn-primary" />

</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
