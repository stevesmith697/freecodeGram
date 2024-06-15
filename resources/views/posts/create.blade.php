@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
@csrf

    <div class="row">
        <div class="col-8 offset-2">
<div class="row">
    <h2>Add New Post</h2>
</div>

            <div class="row mb-3">
                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    
                    <input id="caption" name="caption" type="text" class="form-control mx-2 @error('caption') is-invalid @enderror" value="{{ old('caption') }}" autocomplete="caption" autofocus>
    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
      

       <div class="row">
    
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <div class="d-block">
                <input type="file" id="image" class="form-control-file" name="image">
                @error('image')
                                <strong>{{ $message }}</strong>
                        @enderror
            </div>
      
       </div>
       <div class="d-flex mt-4">
          <button type="submit" class="btn btn-primary d-inline-block">Add New Post</button>
       </div>
       </div>
       </div>
   </form>
</div>
@endsection
