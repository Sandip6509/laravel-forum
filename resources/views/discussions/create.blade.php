@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Add Discussion') }}</div>

    <div class="card-body">
        <form action="{{ route('discussions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" placeholder="Title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="hidden" name="content" id="content">
                <trix-editor input="content" class="@error('content') is-invalid @enderror"></trix-editor>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="channel">Channel</label>
                <select name="channel" id="channel" class="form-control @error('channel') is-invalid @enderror">
                    @foreach ($channels as $channel)
                        <option value="{{ $channel->id }}">{{ $channel->title }}</option>
                    @endforeach
                </select>
                @error('channel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Add Discussion</button>
        </form>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
@endsection
