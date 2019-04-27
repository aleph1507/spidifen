@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Video Upload</div>

                    <div class="card-body vhome">
                        <form action="{{route('videos.store')}}" enctype="multipart/form-data" method="POST">
                            {{csrf_field()}}
                            <div class="hmenu">
                                <label class="vupload">
                                    <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name="dutch_video" id="dutch_video">
                                    <span>Upload a video in Dutch</span>
                                </label>

                                <label class="vupload">
                                    <input type="file" accept="video/mp4,video/x-m4v,video/*" class="form-control" name="french_video" id="french_video">
                                    <span>Upload a video in French</span>
                                </label>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="submit" class="form-control btn btn-outline-dark">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
