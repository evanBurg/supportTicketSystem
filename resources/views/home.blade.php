@extends('partials.default.layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center container">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Zohan</div>
                <a href="/quiz/zohan" class="card">
                    <img src="/img/zohan.jpg" id="zohan" class="quiz-image-select zohan" height="500px">
                </a>
                </div>
            </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Spanglish</div>
                <a class="card" href="/quiz/spanglish">
                <img src="/img/spanglish.jpg" class="quiz-image-select" height="500px">
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Click</div>
                <a href="/quiz/click" class="card">
                <img src="/img/click.jpg" class="quiz-image-select" height="500px">
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Blended</div>
                <a href="/quiz/blended" class="card">
                <img src="/img/blended.jpeg" class="quiz-image-select" height="500px">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
