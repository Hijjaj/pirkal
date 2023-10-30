<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>PIRKAL</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/lara.js')}}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

    html,
    body {
        font-family: 'Montserrat', sans-serif;
    }

    .navbar,
    .title {
        font-family: 'Anton', sans-seri font-size: 30px;
    }
    </style>
</head>

<body class="bg-light"
    x-data='{ssc: "Larablog", ct: "Kategori", nomorhp: "Nomor HP" ,sales:"Daftar print nota",namacustomer: "Nama Customer",ssc2: "Lavablog", pd: "Menu", ssc3: "Lablog Sqlite", lp: "Laravel POS",okee: "Daftar user", ssc4: "Larapos Simple", emailuser: "Email ", ssc5: "Laravel POS", hcs: "h", ssc6: "Laravel Angular",passuser:"Password",repassuser:"Konfirmasi Password", namauser:"User",ffos: "Free open source code point of sale app present by", ads: "Tambah", ssc6u: "", acs: "Tambah", lcsps: "List our source code laravel project", dbps: "Data kelola menu", ssc4u: "https://www.hockeycomputindo.com/2020/07/free-point-of-sale-laravel-pos-source.html", acg: "Tambah", ssc3u: "https://www.hockeycomputindo.com/2021/12/laravel-website-cms-source-code-full.html", cnpdt: " Buat menu baru", ssc5u: "https://www.hockeycomputindo.com/2020/09/aplikasi-toko-gratis-download.html", apd: "Tambah", soc: "Source Code Gallery →", resto: "https://www.hockeycomputindo.com/p/resto.html", popo : "Daftar Customer",shp : "Retail Shop App", shop: "https://www.hockeycomputindo.com/p/toko.html", ssc2u: "https://www.hockeycomputindo.com/2021/02/new-laravel-blog-cms-free-download.html", title: "Pirkal", rst: "Restaurant App", and: "Android Dev", opo: "Our Product", ssc1u: "https://www.hockeycomputindo.com/2020/09/larablog-laravel-cms-blog-with-seo.html", kasir: "POS Hardware", andro: "", nav1: "Home", kasirs: "https://www.hockeycomputindo.com/p/daftar-mesin-kasir-terbaru.html", sslugu1: "", sslug1: "Lavapos", oss: "Our Services", socs: "", sslugu2: "", wbd: "Website Dev", sslug2: "Dexopos Resto", wbde: "", sslugu3: "", lpor: "Laravel Pro", sslug3: "Dexopos Shop", sslugu4: "", sslug4: "", cc: "Buat Kategori", nav2: "Doc", ddps: "Pilih untuk menambahkan", cn: "Nama Kategori", nav3: "Home", cnct: "Buat kategori baru", sv: "Simpan", ctndb: "Kelola data kategori ", ofc: "Laporan", nav4: "Kasir", ncsa: "Buat customer baru", inc: "Profit", nav5: "Laporan", pro: "Laporan", rpt: "Laporan", rptdm: "Laporan detail Penjualan", nav6: "WebApp", xpr: "Export laporan",apa: "Daftar Menu", papa: "Laporan", db: "Laporan", papa: "Laproran", dbs: "Pilih untuk melihat laporan", pfc: "Laporan", us: "User", gpr: "Laporan", pdpr: "Laporan", cs: "Customer", nus: "Buat user baru", usdb: "Kelola data user", usb: "Laporan", cdmb: "Kelola data customer", csr: "Laporan", wba: "",}'>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info text-dark"> <a class="navbar-brand" href="/home"
                x-text='title'></a> <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                    <path
                        d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                </svg> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-3">


                    <li class="nav-item active"> <a href="{{route('home')}}" class="nav-link" x-text="nav3"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-folder2-open" viewBox="0 0 16 16">

                            </svg> </a> </li>
                    <li class="nav-item active"> <a href="{{route('sales.create')}}" class="nav-link" x-text="nav4">
                            <svg class="bi bi-cart3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">

                        </a> </li>
                        <li class="nav-item active"> <a href="{{route('office')}}" class="nav-link" x-text="ofc">
                            <svg class="bi bi-cart3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">

                        </a> </li>       
            </div>
            <span class="nav-item active">
                        <form action="{{route('logout')}}" method="POST">@csrf <button
                                onclick="return confirm('Yakin Logout ?')" type="submit" class="btn btn-danger">
                                </svg> <strong>logout</strong> </button> </form>
</span>
        </nav>
        <div class="content-wrapper">@include('auth.pos')@yield('content')@include('auth.passwords.admin')</div>
    </div>
    <script src="{{asset('js/bos.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>. <?php print "<div id='app'></div>"; ?> <script
        src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>

