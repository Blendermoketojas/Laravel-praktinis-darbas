@extends('layout')
@section('login')
<div class="anketa">
    <form class="anketaForm" method="POST" action="{{ route('visosfilmosales') }}" >
        <div class="innerAnketa">
            <h1 class="confirmText">Login</h1>
            <h3 class="formText">Slapyvardis</h3>
            <input class="formText" type="text">
            <h3 class="formText">Slaptazodis</h3>
            <input class="formText" type="text"><br><br>
            <button class="formButt">Prisijungti</button>
        </div>
    </form>
</div>





@endsection