@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $post['title'] }}</p>
        </div>
    </div>
    <p>{{ $post['content'] }}</p>
@endsection
