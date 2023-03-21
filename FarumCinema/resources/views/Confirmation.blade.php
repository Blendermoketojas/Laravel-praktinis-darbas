@extends('Layout')
@section('confirmation')
 @php
        $selectedId = request('selectedId');
        $cinemaId = request('cinemaId');
    @endphp
    <div class="anketa">
        <form class="anketaForm" method="POST" action="{{ route('vietos.reserveSeat') }}" >
            @csrf
            <div class="innerAnketa">
                <h1 class="confirmText">Sėdynės {{ $selectedId }} rezervavimas</h1>
                <h1 class="confirmText"> Kaina: 12$</h1>

                <h3 class="formText">Vardas</h3>
                <input class="formText" type="text" name="name" required minlength="4">
                <h3 class="formText">Pavarde</h3>
                <input class="formText" type="text"name="lName" required minlength="4"><br><br>
                <input type="hidden" name="selectedId" value="{{ $selectedId }}">
                <input type="hidden" name="cinemaId" value="{{ $cinemaId }}">
                <button name="reserveButton" class="formButt" type="submit">Rezervuoti</button>
            </div>
            
        </form>
    </div>
@endsection
