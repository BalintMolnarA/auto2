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
                <label for="idop">Baleset időpontja:</label><input type="date" name="idop" id="idop" class="form-control text-center " value="{{old('idop')}}" >
                @error('idop')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="my-3">
                <label for="leir">Sérülés leírása:</label> <input type="text" name="leir" id="leir" class="form-control text-center"value="{{old('leir')}}">
                @error('leir')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                 @enderror
                <div><button type="submit" class="btn btn-primary ">Bekuldes</button></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>