<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PIRKAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row lead">
            <div class="col-12 col-md-12 p-3 p-md-5"></div>
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 p-3 p-md-4 login-box">
            <div class="col-12 col-md-12 p-3 p-md-3 text-center"> <img class="img-fluid" src="img/logo6.png" width="200" /><div>
                
                 @if($errors->any())<div class="alert-danger">
                    @foreach($errors->all() as $error) - {{ $error }} @endforeach</div> @endif<form
                    action="{{ route('login') }}" method="POST">
                    <div class="input-group mb-1">
                        <div class="input-text bg-info rounded-lg "> 
                            
                        </div> 
                        <div class="input-group mb-2"> <input type="email"
                            class="form-control" value="{{ old('email') }}" placeholder="Email" name="email"
                            required> 
                        </div>
                        
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-text bg-info rounded-lg "> </div> 
                            <div class="input-group mb-2"> <input
                            type="password" value="{{ old('password') }}" required class="form-control"
                            placeholder="Password" name="password">
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col"> @csrf <input type="submit" class="btn btn-lg btn-info btn-block"
                                value="Login"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>