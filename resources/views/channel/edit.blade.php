@extends('home')

@section('content')
    <div class="container">
        <h1>Edit channel</h1>
        <form method="POST" action="{{ route('channel.update', $channel[0]->id )}}" >
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Channel</label>
                <input name="name" class="form-control"  value="{{$channel[0]->name}}"/>
            </div>
            <button type="submit" class="btn btn-primary my-1">Save</button>
        </form>
        <div>
@endsection
