@extends('Layout')
@section('cities')
    <div class="mainas">
        <p class="moviePlaces"> Miestai:</p>
        <?php
        foreach ($pastatai as $pastatas) {
            $arrayid[] = $pastatas->id;
            $arrayCity[] = $pastatas->miestas;
            $arrayLink[] = $pastatas->foto_link;
        }
        for ($i=0; $i < sizeOf($arrayCity); $i++) { 
            
           echo '<a href="'.route('filmosales.show', ['filmosale'=>$arrayid[$i]]).'" class="selectionName">'.$arrayCity[$i].'<br>';
           echo '<img class="buttonPic" src="'.$arrayLink[$i].'"></a>';
           
        }
        if(session()->has('user')==true && session('user')['is_admin']){
  echo  "<a class ='cityAdd'  name='seat' href='". route('MiestaiAdd')."'  >Pridėkite miestą</a>";


}

   
                ?>
         
    @endsection
