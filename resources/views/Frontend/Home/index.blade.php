@extends('Frontend.Layout.app')

@section('css')

@endsection

@section('content')
    <div class="container pt-6">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <center>
                    <img src="{{asset('assets/img/head-img.png')}}" class="img-fluid" alt="Head Image">
                    <br>
                    <br>
                    <div class="d-grid gap-2">
                        <a class="btn" style="background-color: #546de5; color: #fff" href="/dapur" role="button">Login</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
