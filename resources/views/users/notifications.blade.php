@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Notifications</div>

        <div class="card-body">
            <ul class="list-group">
                @foreach ($notifications as $notification)
                    <li class="list-group-item">
                        @if ($notification->type === 'App\Notifications\NewReplyAdded')
                            A new reply was added to your discussion

                            <a href="" class="btn float-right btn-sm btn-info">View discussion</a>
                        @endif
                        {{-- {{ $notification->type }} --}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection