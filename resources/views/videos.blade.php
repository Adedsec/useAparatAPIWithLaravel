@extends('layouts.app')
@section('content')

    <div class="text-center col-md-12  ">
        <h3 class="text-center">
            Aparat Videos
        </h3>
        <div class="row pb-row">
            @foreach($videos as $video)
                <div class="col-md-3">
                    <iframe src="{{ $video["frame"] }}" class="pb-video-frame" width="100%" height="230"
                            frameborder="0">

                    </iframe>
                    <label for="" class="form-control text-warning text-center">{{$video["title"]}}</label>
                </div>
            @endforeach
        </div>
    </div>

@endsection
