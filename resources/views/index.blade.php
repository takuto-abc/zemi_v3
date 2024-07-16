@extends('layouts.app')

@section('title', 'ゼミ紹介ページ')

@section('content')
    <div class="text-center">
        <h1>田口ゼミ紹介ページです！</h1>
        <br>
        <p>ゼミに関する情報や活動内容を紹介します。</p>
    </div>
    <div id="zemiCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#zemiCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#zemiCarousel" data-slide-to="1"></li>
            <li data-target="#zemiCarousel" data-slide-to="2"></li>
            <li data-target="#zemiCarousel" data-slide-to="3"></li>
            <li data-target="#zemiCarousel" data-slide-to="4"></li>
            <li data-target="#zemiCarousel" data-slide-to="5"></li>
            <li data-target="#zemiCarousel" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/IMG_7419.JPG') }}" class="d-block w-100" alt="ゼミ写真1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7415.JPG') }}" class="d-block w-100" alt="ゼミ写真2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7416.JPG') }}" class="d-block w-100" alt="ゼミ写真3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7417.JPG') }}" class="d-block w-100" alt="ゼミ写真4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7421.jpg') }}" class="d-block w-100" alt="ゼミ写真5">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7420.jpg') }}" class="d-block w-100" alt="ゼミ写真6">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/IMG_7414.jpg') }}" class="d-block w-100" alt="ゼミ写真7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#zemiCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#zemiCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
@endsection