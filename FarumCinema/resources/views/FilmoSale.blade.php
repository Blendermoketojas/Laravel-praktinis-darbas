@extends('Layout')

@section('filmosale')
    <div class="cinemaBorder">
        <?php
        
        foreach ($vietos as $vieta) {
            $arrayId[] = $vieta->id;
            $salesId[] = $vieta->sales_id;
            $booked[] = $vieta->uzimta;
        }
        $cinemaId = request()->route('filmosale');
        $firstForNumber = $cinemaId * 40 - sizeOf($arrayId);
        
        for ($i = 0; $i < 40; $i++) {
            if ($salesId[$i] == $cinemaId) {
                if ($booked[$i] == 1) {
                    if(session()->has('user')==true && session('user')['is_admin']){
                        echo "<div class='seattaken'><a class ='AdminAnchorOrderTag'  href='". route('AdminRemoval', ['selectedId'=>$i+$firstForNumber+1,'cinemaId'=>$cinemaId]). "'name='seat' id='" . $i+$firstForNumber. "' name='seat' class='taken' id='" . $i+$firstForNumber. "' >ORDER</a></div>";
                    }else{
                        echo "<div class='seattaken'><a class ='tAnchorOrderTag'  href='' name='seat' class='taken' id='" . $i+$firstForNumber. "' >ORDER</a></div>";
                    }
                } else {
                    echo "<div class='seat'><a class ='AnchorOrderTag'  href='". route('Confirmation', ['selectedId'=>$i+$firstForNumber+1,'cinemaId'=>$cinemaId]). "'name='seat' id='" . $i+$firstForNumber. "' >ORDER</a></div>";
                }
            } else {
                continue;
            }
        }
        
        ?>

    </div>
@endsection
