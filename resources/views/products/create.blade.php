@extends('layouts.app') @section('content')<div class="content-header">
    <div class="container lead text-center"><br>
    <svg class="bi bi-bag" width="3em"
                            height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                        </svg>
        <h1 class="m-0 text-dark"> Buat Menu</h1> @if(session('created'))<div class="row">
            <div class="col-12">
                <div class="alert alert-success"> Success Update</div>
            </div>
        </div> @endif
    </div>
</div>
<div class="content">
    <div class="container-fluid lead">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
                <form method="post" action="{{ route('products.store') }}">
                    <div class="card-body"> @if($errors->any())<div class="alert alert-danger"> @foreach($errors->all()
                            as $error) - {{ $error }} <br> @endforeach</div> @endif<div class="form-group"> <label
                                for="name">Menu</label> <input type="text" class="form-control"
                                value="{{ old('name') }}" name="name" placeholder="Nama Menu" required></div>
                        <div class="form-group"> <label for="category_id">Kategori</label> <select required
                                name="category_id" class="form-control">
                                <option value="">Pilih Kategori</option> @foreach($categories as $category)<option
                                    value="{{ $category->category_id }}"> {{ $category->name }}</option> @endforeach
                            </select></div>
                        <div class="form-group"> <label for="price">Harga Jual</label> <input type="number" min="1"
                                name="price" class="form-control" required></div>
                        <div class="form-group"> <label for="description">Deskripsi </label><textarea
                                class="form-control" name="description">{{ old('description') }}</textarea></div>
                        <div>@csrf <button onclick="return confirm('Simpan Menu ?');"
                            type="submit" class="btn btn-dark btn-block btn-lg">Simpan </button></div>
                            
                </form>
            </div>
        </div>
    </div>
</div>
</div> @endsection