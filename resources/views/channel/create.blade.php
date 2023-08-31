@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="{{route('channel.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="server">Email</label>
            <input id="server" type="text" name="email" value="{{ old('server') }}" required>
            @error('server')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="output">output</label>
            <textarea id="output" name="text" required>{{ old('output') }}</textarea>
            @error('output')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>



    <div class="container">
        <h1>Add channel</h1>
        <form method="POST" action="{{route('channel.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="channel">Channel</label>
                <input name="channel" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary my-1">Add channel</button>
        </form>
        <div>

@endsection
