@extends('layout.app')
@section('content')
<!----- Featurd Products--------->
<div class="container">
    <div class="row">
        <div class="col-2">
            <h1>
                WELCOME TO<br />
                Sound Of Kinnaur
            </h1>
            <p>
                PRODUCE | PUBLISH AND PROMOTE YOUR SELF<br />
                Publish You Song
            </p>
            <a href="account.html" class="btn">Click Me to upload Song &#8594;</a>
        </div>
        <div class="col-2">
            <img src="{{asset('assets/images/image1.png')}}" alt="" />
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="container">
        <h2 class="title">OUR SERVICES</h2>
        <div class="row">
            <div class="col-3">
                <img src="{{asset('assets/images/1.jpg')}}" alt="" />
                <h2>Sound recording</h2>
                <p>
                    Fascinating broadcast before i forget-Using the praises
                    or alternatively the higher plugged television screenEven
                    more selection inserted location nice;Michael the camera
                    possessed glaciers k on the cost and headache.
                </p>
            </div>

            <div class="col-3">
                <img src="{{asset('assets/images/2.jpg')}}" alt="" />
                <h2>Music Production</h2>
                <p>
                    The team at KapilStudio has extensive experience creating
                    signature tunes to give brands a memorable musical identity.
                    By studying the product and factoring in your input, we compose
                    a tune tailored to the target market..
                </p>
            </div>

            <div class="col-3">
                <img src="{{asset('assets/images/3.jpg')}}" alt="" />
                <h2>Mixing and Mastering</h2>
                <p>
                    With staffs who have more than a decade of mixing and
                    mastering experience combined with world-class equipment,
                    KapilStudio has helped many artists take their production
                    to a whole new level. Our clients span musical genres and styles.
                </p>
            </div>
            <div class="col-3">
                <img src="{{asset('assets/images/4.jpg')}}" alt="" />
                <h2>Video Production</h2>
                <p>
                    Promotional Radio style Recordings that will be playback
                    4 to 5 hours continue with Advertisements for your business
                    will hold your customers' attention while they're in your
                    facility and grow your business by resonating with your client base.
                </p>
            </div>
            <div class="col-3">
                <img src="{{asset('assets/images/5.jpg')}}" alt="" />
                <h2>Video VFX</h2>
                <p>
                    Our dedicated team has extensive experience that we
                    combine to ensure you get the best service
                    possible. A young, hard-working, creative, and above all passionate team.
                    It is our pleasure to promote your work! if
                    you want to put all the chances on your side to give
                    visibility to your activity, we are here to guide you
                </p>
            </div>
            <div class="col-3">
                <img src="{{asset('assets/images/6.jpg')}}" alt="" />
                <h2>Song & Video Production Training</h2>
                <p>
                    Singles can be released online, however if you did
                    not release your material through a record company,
                    it would simply mean it's self released and you are
                    just making your music 'available' more than anything.

                </p>
            </div>
        </div>
    </div>

    <!-- Our YoutubeLink -->
    <div class="slideshow-container">



    </div>
</div>

@endsection