@extends('layouts.app')

@section('title', 'ゼミ生のプロフィール')

@section('content')
    <h1 class="text-center">ゼミ生のプロフィール一覧</h1>
    <br>
    <div class="row">
        @foreach($students as $student)
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->name }}</h5>
                        <p class="card-text">
                            興味のある分野: {{ $student->major }}<br>
                            好きなもの: {{ $student->interests }}<br>
                            趣味: {{ $student->hobby }}<br>
                            出身: {{ $student->zipcode }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
