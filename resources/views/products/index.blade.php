@extends('layouts.app') @section('content') <div class="content-header mt-5">
  <div class="container lead text-center">
    <h1 x-text="pd" class="m-0 text-dark text-center">Produck</h1>
    <p x-text="dbps">Data Produk</p>
    <a class="btn btn-dark btn-lg" x-text="cnpdt" href="{{ route('products.create') }}"> Buat Menu Baru </a>
  </div>
</div>
<div class="content">
  <div class="container-fluid lead text-center"> {{ $products->links() }}
    <div class="row"> @foreach($products as $product) <div class="col-sm-12 col-md-3 lead text-center text-white p-3 p-md-5">
        <div class="card">
          <div class="card-body rounded-lg bg-dark">
          <svg class="bi bi-bag" width="3em"
                            height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                        </svg>
            <br></br>
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"> {{ $product->get_extract }}</p>
            <br>
            <a class="btn btn-warning btn-block" href="{{ route('products.edit', $product) }}"> Edit </a>
            <br>
            <form action="{{ route('products.destroy', $product) }}" method="POST"> @csrf @method('DELETE') <input onclick="return confirm('Delete Product ?? ' + '');" type="submit" value="Delete" class="btn btn-danger btn-block">
            </form>
          </div>
        </div>
      </div> @endforeach </div> {{ $products->links() }}
  </div> @endsection