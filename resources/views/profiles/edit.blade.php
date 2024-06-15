@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
        <div class="row">
            <h2>Edit Profile</h2>
        </div>
        
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label">Profile title</label>
                            
                            <input id="title" name="title" type="text" class="form-control mx-2 @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>
            
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label">Profile description</label>
                            
                            <input id="description" name="description" type="text" class="form-control mx-2 @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>
            
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="url" class="col-md-4 col-form-label">Profile url</label>
                            
                            <input id="url" name="url" type="text" class="form-control mx-2 @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>
            
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
              
        
               <div class="row">
            
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <div class="d-block">
                        <input type="file" id="image" class="form-control-file" name="image">
                        @error('image')
                                        <strong>{{ $message }}</strong>
                                @enderror
                    </div>
              
               </div>
               <div class="d-flex mt-4">
                  <button type="submit" class="btn btn-primary d-inline-block">Save Profile</button>
               </div>
               </div>
               </div>
           </form>
</div>
@endsection
