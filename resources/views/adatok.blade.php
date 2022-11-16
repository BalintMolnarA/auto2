<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
@include('menu')

<div class="container bg-dark text-white rounded p-3 mx-auto">
    <div class="row">
        <div class="col-6">
            <form method="POST">
                @if(session()->get('kesz'))
                    <div class="alert alert-success">
                        {{session()->get('kesz')}}
                    </div>
                @endif
                @csrf
                <h1 >Adatok:</h1>
                <div class="my-3">
                <label for="text">Rendszám:</label><input type="text" name="rendsz" id="rendsz" class="form-control text-center " value="{{old('rendsz')}}" >
                @error('rendsz')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="my-3">
                <label for="tip">Típus:</label> <input type="text" name="tip" id="tip" class="form-control text-center"value="{{old('tip')}}">
                @error('tip')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                 @enderror
                </div>
                <div class="my-3">
                <label for="szin">Szín:</label><input type="text" name="szin" id="szin" class="form-control text-center"value="{{old('szin')}}">
                    
                @error('szin')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                 @enderror
                
                </div>
                <div><button type="submit" class="btn btn-primary ">Bekuldes</button></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>