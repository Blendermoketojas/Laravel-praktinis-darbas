@extends('Layout')
@section('AdminRemoval')
 @php
        $selectedId = request('selectedId');
    @endphp
    <div class="anketa1">
        <form class="anketaForm" method="POST" action="{{ route('vietos.reserveSeat') }}" >
            @csrf
            <div class="innerAnketa">
                <h1 class="confirmText">Sėdynės {{ $selectedId }} rezervacijos atšaukimas</h1>
                <h1 class="confirmText">Atšaukti?</h1>
                <button name="Taip" class="formButt1" type="submit">Taip</button>
                <button name="Ne" class="formButt2" type="submit">Ne</button>
            </div>
        </form>
    </div>
@endsection
