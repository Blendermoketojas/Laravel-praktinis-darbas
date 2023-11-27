@extends('layout')
@section('login')
<div class="anketa">
    <form class="anketaForm" method="POST" action='{{ route('login') }}' >
      @csrf
        <div class="innerAnketa">
            <h1 class="confirmText">Login</h1>
            <h3 class="formText">Slapyvardis</h3>
            <input name="username" class="formText" type="text" autocomplete="off">
            <h3 class="formText">Slaptazodis</h3>
            <input name='userpassword' class="formText" type="password" autocomplete="off" ><br><br>
            <button type='submit' class="formButt">Prisijungti</button>
        </div>
    </form>
</div>





@endsection