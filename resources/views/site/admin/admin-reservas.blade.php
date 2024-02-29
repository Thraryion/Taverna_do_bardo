@extends('layouts/mainAdmin')

@section('title', 'Taverna do Bardo')

@section('content')

<div class="container">
        <h2>Lista de Reservas</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>cliente</th>
                    <th>data</th>
                    <th>hora</th>
                    <th>numero de pessoas</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->cliente }}</td>
                        <td>{{ $reserva->data }}</td>
                        <td>{{ $reserva->hora }}</td>
                        <td>{{ $reserva->numero_pessoas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection