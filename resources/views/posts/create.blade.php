@extends('backend/layout.template')
 
@section('content')
<div class="container-fluid">
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2 class="col-lg-12 margin-tb">Create New Post</h2>
                <div class="col-lg-12 margin-tb">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Content:</strong>
                                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 margin-tb">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection