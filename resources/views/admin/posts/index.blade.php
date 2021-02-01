@extends('layouts.app')

@section('content')
<div class="container">
    <h1>pagepost</h1>

    @if ($posts->isEmpty())
        <p>no post has been created yet.</p>
    @else
        <p>There are post</p>
    @endif

</div>
@endsection
