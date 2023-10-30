@extends('layouts.app') @section('content')<div class="content-header">
    <div class="container lead">
        <h1 class="text-center m-3 text-dark"> Edit Customer</h1>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
                <form method="post" action="{{ route('clients.update', $client) }}"> @method('PUT')<div
                        class="card-body"> @if($errors->any())<div class="alert alert-danger"> @foreach($errors->all()
                            as $error) - {{ $error }} <br> @endforeach</div> @endif<div class="form-group text-center">
                            
                        <div class="form-group text-center"> <label for="name"> <svg class="bi bi-people-fill"
                                    width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg> </label> <input type="text" value="{{ old('name', $client->name) }}"
                                placeholder="Customer name" name="name" required class="form-control"></div>
                        
                    </div> @csrf <button onclick="return confirm('yakin untuk update customer ?');"
                        type="submit" class="btn btn-dark btn-block btn-lg">Update </button></form>
            </div>
        </div>
    </div>
</div> @endsection