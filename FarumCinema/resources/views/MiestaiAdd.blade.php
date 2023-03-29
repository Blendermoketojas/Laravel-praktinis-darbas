@extends('Layout')
@section('MiestaiAdd')
 @php
        $selectedId = request('selectedId');
        $cinemaId = request('cinemaId');
    @endphp
    <div class="anketa">
        <form class="anketaForm" method="POST" action="{{ route('ConfAdd') }}" >
            @csrf
            <div class="innerAnketa">
                <br>
                <h1 class="confirmText">Miestų pridėjimas</h1>
               <br>

                <h3 class="formText">Miestas</h3>
                <input class="formText" type="text" name="pav">
                <h3 class="formText">Nuotrauka  </h3>
                <input class="formText" type="text"name="fotoLink"><br><br>

                <button name="addCity" class="formButt1" type="submit">Pridėti</button>
                <button name="cancel" class="formButt2" type="submit">Atšaukti</button>
            </div>
            
        </form>
    </div>
@endsection