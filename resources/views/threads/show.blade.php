@extends('layouts.app')

@section('content')


    <div class="card">
        <div class="card-body">

            <article>
                <h4>{{  $thread->title }}</h4>
                <div class="body">{{$thread->body}}</div>
            </article>
        </div>
    </div>


    @if ( auth()->check() )

        <h3>Add a reply</h3>

        <form method="POST" action="{{ route('add_reply', $thread->id) }}">
            {{ csrf_field() }}
            <textarea name="body" id="body" class="form-control" placeholder="Wat heb jij te zetten?">
            </textarea>
            <button type="submit" class="btn btn-default">Plaatsen</button>
        </form>


    @endif


    @foreach($thread->replies as $reply)

        <br>
        @include ('threads.reply')


    @endforeach





@endsection
