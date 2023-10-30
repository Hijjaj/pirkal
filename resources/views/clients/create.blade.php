@extends('layouts.app') @section('content')<div class="content-header mt-5">
    <div class="container-fluid text-center lead"><svg class="bi bi-people-fill" width="3em"
                height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>
        <h1 class="m-0 text-dark" x-text="popo"></h1>@if(session('created'))<div class="row">
            <div class="col-12">
                <div class="alert alert-success">Berhasil membuat customer baru</div>
            </div>
        </div>@endif
    </div>
</div>



<div class="content">
    <div class="container lead">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
            <form method="post" action="{{ route('clients.store') }}">
                    <div class="card-body">@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as
                            $error) - {{ $error }}<br>@endforeach</div>@endif
                            
                            

                            <div class="form-group"><label for="name"
                            x-text="namacustomer"></label>
                            <input type="text" class="form-control" value="{{ old('name') }}" 
                            placeholder="Masukkan nama customer" name="name" required >

                            </div>
                            
                            

                                <button onclick="return confirm('Yakin untuk menyimpan ?');" type="submit"
                        class="btn btn-dark btn-block btn-lg">Simpan </button>
                                </button>@csrf
</div>
                        
                </form>
            </div>
        </div>
    </div>
</div>@endsection

