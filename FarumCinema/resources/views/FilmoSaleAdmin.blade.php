@extends('filmosale')
@section('admin')

<div class="cinemaBorder">
    <?php
     foreach ($vietos as $vieta) {
                $arrayId[] = $vieta->id;
                $salesId[]=$vieta->sales_id;
                $booked[]=$vieta->uzimta;
               
        }
        $cinemaId=request()->route('filmosale');
$firstForNumber=($cinemaId*40)-sizeOf($arrayId);

    for ($i = 0 ;$i < 40; $i++) {

        if($salesId[$i]==$cinemaId){
        if($booked[$i]==1){
            echo "<div class='seattaken'><a type='submit' name='seat' class='taken' id='".$i+$firstForNumber."' ><p class='seatText'>ORDER</p></a></div>";
        }else{
                echo "<div class='seat'><a type='submit' name='seat' id='".$i+$firstForNumber."' ><p class='seatText'>ORDER</p></a></div>";
 
            }
        }else{
            continue;
        }
    }
?>

</div>


@endsection