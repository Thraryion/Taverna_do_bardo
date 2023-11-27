@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')


<div method="POST" class="text-center border border-light p-5" >
        <h2>Fazer Reserva</h2>

        @if(session('msg'))
            <div class="alert alert-success">{{ session('msg') }}</div>
        @endif

        <form method="POST" class="text-center border border-light p-5" action="{{ route('fazerReserva') }}">
            @csrf
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora</label>
                <select name="hora" id="hora" class="form-control" required>
                    @for ($i = 12; $i <= 23; $i++)
                        <option value="{{ $i }}:00">{{ $i }}:00</option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
                <label for="numero_pessoas">Número de Pessoas</label>
                <input type="number" name="numero_pessoas" id="numero_pessoas" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Fazer Reserva</button>
        </form>
    </div>

@endsection