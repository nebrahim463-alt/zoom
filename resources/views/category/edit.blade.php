@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                     <form method="POST" action="{{ route('categories.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_id" value="{{$result->id}}">

                    <label>{{ __('language.Image') }}</label>
                    <input type="file" name="cat_image" class="form-control mb-4">
                    @error('cat_image')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror

                    <label>{{ __('language.ID') }}</label>
                    <input type="text" class="form-control mb-4" name="id" value="{{$result->id}}">
                     @error('id')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror

                    <label>{{ __('language.title_en') }}</label>
                    <input type="text" name="title_en" class="form-control mb-4" value="{{$result->title_en}}">
                     @error('title_en')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror

                    
                    <label>{{ __('language.title_ar') }}</label>
                    <input type="text" name="title_ar" class="form-control mb-4" value="{{$result->title_ar}}">
                     @error('title_ar')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror


                    <label>{{ __('language.description_en') }}</label>
                    <input type="text" name="description_en" class="form-control mb-4" value="{{$result->description_en}}">
                     @error('description_en')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror

                    <label>{{ __('language.description_ar') }}</label>
                    <input type="text" name="description_ar" class="form-control mb-4" value="{{$result->description_ar}}">
                     @error('description_ar')
                        <h5 class="alert alert-danger">{{$message}}</h5>
                    @enderror

                    <input type="submit" value="{{ __('language.Update') }}" class="btn btn-success d-block w-100">


                </form>

            </div>
        </div>
    </div>


@endsection