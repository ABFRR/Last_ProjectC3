@extends('backend\layout.template')
@include('backend\layout.navbar')
 
@section('content')
 
<div class="container-fluid">
    <div class="row mt-5 mb-10"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="float-left"> 
                <h2 class="col-lg-12 margin-tb">HTML</h2> 
            </div> 
            <div class="float-right ">
            @if(auth()->user()->role == 'admin') 
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
            @endif 
            </div> 
            <table class="table table-bordered"> 
                <tr> 
                    <th width="20px" class="text-center ">No</th> 
                    <th>Title</th> 
                    <th width="280px"class="text-center">Action</th> 
                </tr> 
                @foreach ($posts as $post) 
                <tr> 
                    <td class="text-center">{{ ++$i }}</td> 
                    <td>{{ $post->title }}</td> 
                    <td class="text-center"> 
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST"> 
                        <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
                        @if(auth()->user()->role == 'admin') 
                        <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                        @endif

                        @if(auth()->user()->role == 'admin') 
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> 
                        </form> 
                        @endif
                    </td> 
                </tr> 
                @endforeach 
            </table>
            @if ($message = Session::get('success')) 
                <div class="alert alert-success"> 
                    <p>{{ $message }}</p> 
                </div> 
            @endif 
        </div> 
    </div>
</div> 


{!! $posts->links() !!} 
@endsection 