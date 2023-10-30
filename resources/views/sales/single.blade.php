@extends('layouts.app')@include('auth.pos')@section('content')@include('auth.passwords.admin') <script>
function printPage(id) {
    var html = "<html>";
    html += document.getElementById(id).innerHTML;
    html += "</html>";
    var printWin = window.open('', '', 'left=0,top=0,width=600,height=600,toolbar=0,scrollbars=0,status =0');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>
<div id="print">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Invoice No: {{ $sale->sale_id }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="invoice p-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4> Pirkal <small class="float-right">Tanggal:
                                {{ date_format($sale->created_at, 'd-M-Y') }}</small> <br />
                            <small>Alamat : Jl. H.A.Malawi No.1 Cibangkang Ragatunjung </small></h4>
                        <hr>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">Customer: <address> <strong>{{ $sale->client->name }}</strong><br>
                            {{ $sale->client->rfc }}<br> </address>
                    </div>
                    <div class="col-sm-4 invoice-col"> <b>Invoice :{{$sale->sale_id}}</b> <br> <br></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Menu</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>@include('auth.passwords.pos')@foreach($carts as
                                $cart)@include('auth.passwords.transaction')<tr>
                                    <td>{{ $cart->product_id }}</td>
                                    <td>{{ $cart->products[0]->name}}</td>
                                    <td>{{ $cart->amount }}</td>
                                    <td>{{ $cart->products[0]->price }}</td>
                                </tr>@endforeach</tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Total:</th>
                                        <td><strong>Rp.{{ $sale->total }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p class="text-center">Terimakasih</p>
    <p class="text-center"> <input type="button" class="btn text-center rounded-pill btn-success" value="Receipt Print"
            onclick="printPage('print');"></input> / ctrl + p </p>
</div> @endsection