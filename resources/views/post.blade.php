@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>
@endsection