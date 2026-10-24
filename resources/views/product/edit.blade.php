@extends('layouts.app')

@section('content')

   <div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('product.update')}} method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_id" value="{{$result->id}}">
                <label>{{ __('language.Image') }}</label>
                <input type="file" name="cate_image" class="form-control mb-4">

                @error('cate_image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.ID') }}</label>
                <input type="text" name="id" class="form-control mb-4" value="{{$result->id}}">

                 @error('id')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.title_en') }}</label>
                <input type="text" name="title_en" class="form-control mb-4" value="{{$result->title_en}}">

                 @error('title_en')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.title_ar') }}</label>
                <input type="text" name="title_ar" class="form-control mb-4" value="{{$result->title_ar}}">

                 @error('title_ar')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.description_en') }}</label>
                <input type="text" name="description_en" class="form-control mb-4" value="{{$result->description_en}}">

                 @error('description_en')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.description_ar') }}</label>
                <input type="text" name="description_ar" class="form-control mb-4" value="{{$result->description_ar}}">

                 @error('description_ar')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.price') }}</label>
                <input type="text" name="price" class="form-control mb-4" value="{{$result->price}}">

                 @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <label>{{ __('language.quantity') }}</label>
                <input type="text" name="quantity" class="form-control mb-4" value="{{$result->quantity}}">

                 @error('quantity')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <input type="submit" value="{{ __('language.Update') }}" class="btn btn-success d-block w-100">



            </form>

        </div>
    </div>
   </div>
    
@endsection