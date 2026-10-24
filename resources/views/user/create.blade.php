@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">

                <form method="post" action={{ route('user.store') }} enctype="multipart/form-data">
                    @csrf
                    <label>{{ __('language.ID') }}
</label>
                    <input type="text" name="id" class="form-control mb-4" value="{{old('id')}}">
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.Name') }}
</label>
                    <input type="text" name="name" class="form-control mb-4" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.Email') }}
</label>
                    <input type="text" name="email" class="form-control mb-4" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.Password') }}
</label>
                    <input type="password" name="password" class="form-control mb-4">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="submit" value="Create New Account" class="btn btn-success d-block w-100">
                </form>

            </div>
        </div>
    </div>
@endsection
