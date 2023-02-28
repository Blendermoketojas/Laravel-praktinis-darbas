@extends('Layout')
@section('confirmation')
 @php
        $selectedId = request('selectedId');
    @endphp
    <div class="anketa">
        <form class="anketaForm" method="POST" action="{{ route('klpA1.store') }}" >
            @csrf
            <div class="innerAnketa">
                <h1 class="confirmText">Sėdynės {{ $selectedId }} rezervavimas</h1>
                <h1 class="confirmText"> Kaina: 12$</h1>

                <h3 class="formText">Vardas</h3>
                <input class="formText" type="text" name="name">
                <h3 class="formText">Pavarde</h3>
                <input class="formText" type="text"name="lName"><br><br>
                <input type="hidden" name="selectedId" value="{{ $selectedId }}">
                <button class="formButt" type="submit">Rezervuoti</button>
            </div>
            
        </form>
    </div>
@endsection
