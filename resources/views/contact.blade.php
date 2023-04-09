@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <h1>Sound Of Kinnaur</h1>
            <h2>Contact us</h2>
            <br>
            Email :- Soundofkinnaur@gmail.com
            <br>
            Publish You Song
            </br>
            <a href="{{url('/register')}}" class="btn">Register Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="{{asset('assets/images/image1.png')}}" alt="" />
        </div>
    </div>
</div>
<div class="container">
    <h2 class="title">OUR MEDIA PARTNNER's</h2>
    <div class="row">
        <div class="col-3">
            <img src="{{asset('assets/images/logo/SM Production.png')}}" alt="SM Production" />
            <h2>SM Production</h2>
        </div>

        <div class="col-3">
            <img src="{{asset('assets/images/logo/Star.png')}}" alt="Star Production" />
            <h2>Star Production</h2>
        </div>

        <div class="col-3">
            <img src="{{asset('assets/images/logo/hangrang.png')}}" alt="Hangrang Studio" />
            <h2>Hangrang Studio</h2>
        </div>

        <div class="col-3">
            <img src="{{asset('assets/images/logo/Hightlander.png')}}" alt="Star Production" />
            <h2>Star Production</h2>
        </div>



    </div>
</div>
@endsection