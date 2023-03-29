@extends('Layout')
@section('citiesDelConf')
@php

$cinemaId = request('filmosale');
@endphp
<div class="anketa1">
    <form class="anketaForm" method="POST" action="{{ route('CityDelConf') }}" >
        @csrf
        <div class="innerAnketa">
            <h1 class="confirmText">Miesto {{ $cinemaId }} ištrinimas</h1>
            <h1 class="confirmText">Ištrinti?</h1>
            <input type="hidden" name="cinemaId" value="{{ $cinemaId }}">
            <button name="confirm" class="formButt1" type="submit">Taip</button>
            <button name="notConfirm" class="formButt2" type="submit">Ne</button>
        </div>
    </form>
</div>
@endsection