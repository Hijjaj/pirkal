@extends('layouts.app') @section('content')<div class="content-header mt-5">
    <div class="container-fluid text-center lead"><svg class="bi bi-box" width="3em"
                            height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg>
        <h1 class="m-0 text-dark" x-text="cc"></h1>@if(session('created'))<div class="row">
            <div class="col-12">
                <div class="alert alert-success">Berhasil membuat kategori baru</div>
            </div>
        </div>@endif
    </div>
</div>
<div class="content">
    <div class="container lead">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
                <form method="post" action="{{ route('categories.store') }}">
                    <div class="card-body">@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as
                            $error) - {{ $error }}<br>@endforeach</div>@endif<div class="form-group"><label for="name"
                                x-text="cn"></label><input type="text" class="form-control" value="{{ old('name') }}"
                                name="name" placeholder="Masukkan Nama Kategori" required></div>@csrf<button
                            onclick='return confirm("Simpan kategori ini ??")' type="submit" x-text="sv"
                            class="btn btn-dark btn-block btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>@endsection