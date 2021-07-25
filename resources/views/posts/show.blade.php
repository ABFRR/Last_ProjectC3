@extends('backend\layout.template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2 class="col-lg-12 margin-tb"> {{ $post->title }}</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-lg-12 margin-tb">
                                {{ $post->content }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
@endsection