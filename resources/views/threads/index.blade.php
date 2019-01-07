@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">

            @foreach($threads as $thread)

                <article>


                    <a href="{{ $thread->path() }}">
                        <h4>{{  $thread->title }}</h4>
                    </a>
                    <div class="body">{{$thread->body}}</div>

                    <h6 class="text-right">
                        <a href="/profiel/{{$thread->owner->id}}">
                            {{ $thread->owner->full_name() }}
                        </a>
                        zegt {{$thread->updated_at->diffForHumans() }}
                    </h6>
                </article>

                <hr>

            @endforeach

        </div>
    </div>

@endsection
