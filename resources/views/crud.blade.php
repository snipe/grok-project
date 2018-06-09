@extends('layouts.app')

@section('content')

    <style>
        html, body {
            margin: 0;
            padding: 0;,
        height: 100%;
            width: 100%;
            background-color: #d1d1d1
        }
        #mute {
            position: absolute;
        }
        #mute.on {
            opacity: 0.7;
            z-index: 1000;
            background: white;
            height: 100%;
            width: 100%;
        }
    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="mute"></div>
                <div id="app">
                    <company-app></company-app>
                </div>
            </div>
        </div>
    </div>
@endsection

