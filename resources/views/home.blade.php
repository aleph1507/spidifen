@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{explode('@', auth()->user()->email)[0]}}</div>

                <div class="card-body vhome">

                    <div class="user-info">
                        <p>You have selected the {{ucfirst(session('language'))}} language</p>
                    </div>

                    @if($filename)
                        {{$filename}}
                        <video class="hvid" id="hvid" preload="auto" controls>
                            <source src="{{$filename}}">
                            <p>Your browser does not support the video element</p>
                        </video>
                        <div class="collapse" id="ratingsDiv">
                            <form action="{{route('ratings.store')}}" method="POST" id="ratingsForm">
                                {{csrf_field()}}
                                <input type="hidden" id="rating" name="rating">
                                <input type="hidden" id="lang" name="lang" value="{{session('language')}}">
                                <div class="mb-0 ml-4">
                                    <p class="">Rate this video:</p>
                                </div>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" class="starRating" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" class="starRating" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" class="starRating" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" class="starRating" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" class="starRating" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                {{--</div>--}}
                                <div class="comment">
                                    <textarea name="comment" class="form-control" placeholder="Comment"></textarea>
                                </div>
                                <ul id="rating-validation-errors"></ul>
                                <input type="submit" class="btn btn-outline-dark btn-block" id="rating_done" value="Done">
                            </form>
                        </div>
                    @else
                        <p>No {{ucfirst(session('language'))}} video at this time.</p>
                    @endif
                    <button class="btn btn-primary btn-lg mx-auto"
                        data-toggle="modal" data-target="#spidifen-modal">
                        I want to receive a SPIDIFEN SAMPLE
                    </button>
                    @include('partials._spidifen_sample_modal')
                    @include('partials._thank_you_modal')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
