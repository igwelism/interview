@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Articles</h2>
                            </div>
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    @foreach($articles as $article)
                                        <div class="col">
                                            <div class="card-header">{{ $article->title }}</div>
                                            <div class="card">
                                                <img src="{{ $article->image }}" class="card-img-top" alt="...">
                                                <div class="card-body box-height">
                                                   {!! \Illuminate\Support\Str::limit($article->content, 100,  $end='...') !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <h2>Events</h2>
                    @foreach($events as $event)
                        <div class="card border-info mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <div class="card-text">
                                    <b>Location:</b> {{$event->location}}
                                    <br>
                                    <b>Date:</b> {{$event->date}}
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
