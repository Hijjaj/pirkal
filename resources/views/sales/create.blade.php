@extends('layouts.app') @section('content')<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12"><br>
                <h1 class="title text-dark"><center><b>KASIR</b></center></h1>
            </div>
            <div class="col-12 text-left">
                <h5>Pendapatan: <strong>Rp.{{ $totalSalesPerDay }}</strong></h5>
            </div>
        </div> @if(session('created'))<div class="row">
            <div class="col-12">
                <div class="alert alert-success"> Transaksi Berhasil</div>
            </div>
        </div> @endif
    </div>
</div>
<div class="content">
    <div class="container-fluid lead">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-dark">
                    <div class="card-body">
                        <div id="js-requests-messages"></div> @if($errors->any())<div class="alert alert-danger">
                            @foreach($errors->all() as $error) - {{ $error }} <br> @endforeach</div> @endif<form
                            method="post" action="#" id="createSaleForm">
                            <div class="form-group"> <label for="rfc"><b>Customer</b></label> <select id="rfc" name="rfc"
                                    class="form-control">
                                    <option value="">Pilih Customer</option> @foreach($clients as $client)<option
                                        value="{{ $client->rfc }}"> {{ $client->name }}</option> @endforeach
                                </select></div>
                            <div class="form-group">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Menu</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartTable"></tbody>
                                </table>
                            </div>
                            <div class="form-group text-right">
                                <h5>TOTAL : <b>Rp.<span id="cartTotal" class="text-bold">0</span></b></h5>
                            </div> @csrf <button type="submit" class="btn btn-dark btn-block btn-lg">Transaksi
                            </button> <input type="hidden" id="user-id" value="{{ Auth::user()->id }}"><br>
                            <a href="{{ route('sales.index') }}"
                            class="btn btn-success btn-block btn-lg" x-text="sales"></a>
                            
                        </form>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-light">
                    <div class="card-header text-light">
                        <h3 class="card-title"><b>List Menu</b></h3>
                    </div>
                    <div class="card-body table-responsive p-0 text-light" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap text-light">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Menu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="products-table"> @foreach($products as $product)<tr>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td> <button class="btn btn-success btn-sm" data-name="{{ $product->name }}"
                                            data-price="{{ $product->price }}" data-id="{{ $product->product_id }}"
                                            data-left="{{ $product->product_left }}"> <i class="fas fa-plus"></i> Add
                                        </button></td>
                                </tr> @endforeach</tbody>
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection