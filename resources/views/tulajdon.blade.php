@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
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
                <label for="nev">Tulajdonos neve:</label><input type="text" name="nev" id="nev" class="form-control text-center " value="{{old('nev')}}" >
                @error('nev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="my-3">
                <label for="tuljkezd">Tulajdonjog kezdete:</label> <input type="date" name="tuljkezd" id="tip" class="form-control text-center"value="{{old('tuljkezd')}}">
                @error('tuljkezd')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                 @enderror
                </div>
                <div class="my-3">
                <label for="tuljv">Tulajdonjog vége:</label><input type="date" name="tuljv" id="tuljv" class="form-control text-center"value="{{old('tuljv')}}">
                    
                @error('tuljv')
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