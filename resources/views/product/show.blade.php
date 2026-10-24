@extends('layouts.app')

@section('content')

   <div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h5 class="text-center mt-5 pt-5">{{ __('language.Details Of One Record') }} <span class="badge text-bg-primary">1</span></h5>
            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>description</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->title}}</td>
                        <td>{{$result->description}}</td>

                        <td>
                            <a class="btn btn-success" href={{route('home')}}>
                                <i class="fa-solid fa-house-chimney"></i>
                            </a>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
   </div>
    
@endsection