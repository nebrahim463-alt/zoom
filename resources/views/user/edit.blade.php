@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form method="POST" action={{ route('user.update') }} enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_id" value="{{ $result->id }}">
                    <label>{{ __('language.ID') }}
                    </label>
                    <input type="text" class="form-control mb-4" name="id" value="{{ $result->id }}">
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.Name') }}
                    </label>
                    <input type="text" name="name" class="form-control mb-4" value="{{ $result->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="old_email" value="{{ $result->email }}">
                    <label>{{ __('language.Email') }}
                    </label>
                    <input type="text" name="email" class="form-control mb-4" value="{{ $result->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label>{{ __('language.Password') }}
                    </label>
                    <input type="password" name="password" class="form-control mb-4">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="submit" value="{{ __('language.Update') }}" class="btn btn-success d-flex w-100">

                </form>
            </div>
        </div>
    </div>
@endsection
