@extends('Layout')
@section('citiesDel')
    <div class="mainas">
        <p class="moviePlaces"> Miestai:</p>
        <?php
        foreach ($pastatai as $pastatas) {
            $arrayid[] = $pastatas->id;
            $arrayCity[] = $pastatas->miestas;
            $arrayLink[] = $pastatas->foto_link;
        }
        for ($i=0; $i < sizeOf($arrayCity); $i++) { 
            if(session()->has('user')==true && session('user')['is_admin']){
           echo '<a href="'.route('MiestaiDelConf', ['filmosale'=>$arrayid[$i]]).'" class="selectionName">'.$arrayCity[$i].'<br>';
           echo '<img class="buttonPic" src="'.$arrayLink[$i].'"></a>';
            }else{
                echo '<a href="'.route('MiestaiDelConf', ['filmosale'=>$arrayid[$i]]).'" class="selectionName">'.$arrayCity[$i].'<br>';
           echo '<img class="buttonPic" src="'.$arrayLink[$i].'"></a>';
            }
        }



   
                ?>
         
    @endsection