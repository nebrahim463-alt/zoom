@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            {{ __('language.Users') }}
                            <span class="badge text-bg-primary">{{ $user->count() }}</span>
                        </div>
                        <a href={{ route('user.create') }} class="btn btn-success">{{ __('language.Create New Account') }}
                        </a>
                    </div>
                    <div class="card-body">

                        @if (session('message2'))
                            <h5 class="alert alert-success text-center">{{ session('message2') }}</h5>
                        @endif

                        <table class="table table-dark text-center">
                            <thead>
                                <tr>
                                    <th>{{ __('language.ID') }}
                                    </th>
                                    <th>{{ __('language.Name') }}
                                    </th>
                                    <th>{{ __('language.Email') }}
                                    </th>
                                    <th>{{ __('language.Operations') }}

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <th>{{ $item->name }}</th>
                                        <th>{{ $item->email }}</th>
                                        <th>
                                            <a href={{ route('user.show', $item->id) }} class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a href={{ route('user.edit', $item->id) }} class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a href={{ route('user.delete', $item->id) }} class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





            <div class="col-md-6">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">

                        <div>
                            {{ __('language.Category') }}
                            <span class="badge text-bg-primary">{{ $category->count() }}</span>
                        </div>

                        <a href={{ route('categories.create') }}
                            class="btn btn-success">{{ __('language.Create New Category') }}
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <h5 class="alert alert-success text-center">{{ session('message') }}</h5>
                        @endif
                        <table class="table table-dark text-center">
                            <thead>
                                <tr>
                                    <th>{{ __('language.Image') }}
                                    </th>
                                    <th>{{ __('language.ID') }}
                                    </th>
                                    <th>{{ __('language.Title') }}
                                    </th>
                                    <th>{{ __('language.Description') }}
                                    </th>
                                    <th>{{ __('language.Operations') }}

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>
                                            <img src={{ asset('/img/category/' . $item->cat_image) }} style="width:60px">
                                        </td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title}}</td>
                                        <td>{{ $item->description}}</td>
                                        <td>
                                            <a href={{ route('categories.show', $item->id) }} class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a href={{ route('categories.edit', $item->id) }} class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a href={{ route('categories.delete', $item->id) }} class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






            <div class="col-md-6">
                <div class="card">

                    <div class="card-header  d-flex align-items-center justify-content-between">
                        <div>
                            {{ __('language.Products') }}
                            <span class="badge text-bg-primary">{{ $product->count() }}</span>
                        </div>
                        <a href={{ route('product.create') }}
                            class="btn btn-success">{{ __('language.Create New Product') }}
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('message3'))
                            <h5 class="alert alert-success text-center">{{ session('message3') }}</h5>
                        @endif
                        <table class="table table-dark text-center">
                            <thead>
                                <tr>
                                    <th>{{ __('language.Image') }}
                                    </th>
                                    <th>{{ __('language.ID') }}
                                    </th>
                                    <th>{{ __('language.Title') }}
                                    </th>
                                    <th>{{ __('language.Description') }}
                                    </th>
                                    <th>{{ __('language.Operations') }}

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>
                                            <img style="width: 60px" src={{ asset('/img/product/' . $item->cate_image) }}>
                                        </td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description}}</td>
                                        <td>
                                            <a href={{ route('product.show', $item->id) }} class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a href={{ route('product.edit', $item->id) }} class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <a href={{ route('product.delete', $item->id) }} class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
