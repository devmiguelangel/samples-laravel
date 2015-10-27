@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Title</td>
                    <td>Slug</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>
                            <a href="{{ route('post', ['slug' => $post->slug]) }}">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td>{{ $post->slug }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection