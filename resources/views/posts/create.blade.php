@extends('layouts.app')

@section('content')


        <h1>Create Post</h1>
        
           
    <div class="card m-3" >
        <div class="card-header">
           <form action="{{url('admin')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                {{-- Post title input --}}
                <div class="input-group input-group-lg my-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Post Title</span>
                    </div>
                    <input type="text" name="title" class="form-control" aria-label="Post Title"aria-describedby="inputGroup-sizing-sm">
                </div>

                {{-- Post Image input --}}
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="cover_img" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                 </div>

                {{-- Post body input --}}
                <div class="input-group input-group-lg my-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Post Body</span>
                        </div>
                        <textarea class="form-control" id="article-ckeditor" name="body" aria-label="With textarea"></textarea>
                </div>

              

                 {{-- Post Submit Button --}}
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

            </form>
        </div>
        
    </div>
       
  
 @endsection
