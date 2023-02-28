@extends('Layout')

@section('klpA1')
<div class="cinemaBorder">

    <form method="POST" action="{{ route('confirm',['id' => $selectedId]) }}">
        @csrf
        <input type="hidden" name="selectedId" value="">
        <?php
            $taken = "class=taken";
            $notTaken = "class=nottaken";
            $arrayid = [];
            $arraytaken = [];
            foreach ($kedes as $kede) {
                $arrayid[] = $kede->id;
                $arraytaken[] = $kede->uzimta;
            }
            for ($i = 0; $i < 40; $i++) {
                if (isset($arrayid[$i]) && isset($arraytaken[$i]) && $arrayid[$i] == $i+1 && $arraytaken[$i] == 1) {
                    if ($i == 0 || $i < 8) {
                        echo "<div class='seat'><button type='submit'".$taken." name='seat' id='".$i."' disabled>ORDER</button></div>";
                    } else {
                        echo "<div class='seat'><button type='submit' ".$taken." name='seat' id='".$i."' disabled>ORDER</button></div>";
                    }
                } else {
                    if ($i == 0 || $i < 8) {
                        echo "<div class='seat'><button type='submit'".$notTaken." name='seat' id='".$i."'>ORDER</button></div>";
                    } else {
                        echo "<div class='seat'><button type='submit' ".$notTaken." name='seat' id='".$i."'>ORDER</button></div>";
                    }
                }
            }
        ?>
    </form>
    <script>
        document.querySelectorAll(".seat button").forEach(button => {
            button.addEventListener("click", function() {
                document.querySelector("input[name='selectedId']").value = this.id;
                document.querySelector(".seat button.selected").classList.remove("selected");
                this.classList.add("selected");
            });
        });
    </script>

</div>
@endsection
