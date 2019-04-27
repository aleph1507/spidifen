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
                            <form action="#">
                                {{csrf_field()}}
                                <input type="hidden" id="rating" name="rating">
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
                                <input type="submit" class="btn btn-outline-dark btn-block" value="Done">
                            </form>
                        </div>
                    @else
                        <p>No {{ucfirst(session('language'))}} video at this time.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
