@extends('layouts.master')
@section('title', 'Főoldal')
@section('content')
@include('menu')

<h1>Autók listája</h1>
<div class="container text-white rounded-2">
    <div class="row">
        <div class="col">
            <table class="table-striped table table-dark text-white m-2 text-center">
                <thead class="table-light">
                    <td>Rendszám</td>
                    <td>Típus</td>
                    <td>Szín</td>
                    <td>Részletek</td>
                </thead>
                @foreach ($autok as $item)
                <tr>
                    <td>{{$item->rendszam}}</td>
                    <td>{{$item->tipus}}</td>
                    <td>{{$item->szin}}</td>
                    <td>
                        <form method="POST">
                            <button type="button" class="btn btn-primary" onclick="">Részletek</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection