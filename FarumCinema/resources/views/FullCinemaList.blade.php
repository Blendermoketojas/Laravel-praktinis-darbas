@extends('Layout')
@section('mainas')
    <div class="mainas">
        <p class="moviePlaces"> Filmų salės:</p>
        
            
        @php
        
        foreach ($sales as $sale) {
                $arrayId[] = $sale->id;
                $pastatasId[]=$sale->pastatas_id;
                $cinemaName[]=$sale->Pavadinimas;
                $fotoLink[]=$sale->foto_link;
        }
            $cinemaId=request()->route('filmosale');
            for ($i=0; $i < sizeOf($arrayId) ; $i++) { 
            if($cinemaId==$pastatasId[$i]){             
      echo  '<a class="selectionName" href="'. route('filmosale.show', ['filmosale'=>$arrayId[$i]]).'" >'.$cinemaName[$i].'<br>';
        echo ' <img class="buttonPic" src="'.$fotoLink[$i].'"> </a>';
}else{
  continue;
       
}  
}
            
@endphp
        
       
    </div>
@endsection
