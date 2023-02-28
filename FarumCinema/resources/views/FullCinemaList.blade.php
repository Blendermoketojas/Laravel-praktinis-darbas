@extends('Layout')
@section('mainas')
    <div class="mainas">
        <p class="moviePlaces"> Filmų salės:</p>

        <button class="selectionName" onclick="window.location='{{ url('filmosale') }}'">Klaipėda A1<br>
            <img class="buttonPic"
                src="https://visit.kaunas.lt/assets/Products/1374/_resampled/FillWyI2NDAiLCIzMjAiXQ/cinamon.jpeg"> </button>
        <button class="selectionName">Klaipėda A2<br> <img class="buttonPic"
                src="https://mb.com.ph/wp-content/uploads/2021/11/46640.png"></button>
        <button class="selectionName">Kaunas 0 <br> <img class="buttonPic"
                src="https://cdn4.premiumread.com/?url=https://sunstar.com.ph/uploads/images/2022/01/11/332377.jpg&w=1000&q=100&f=jpg&t=2"></button>
        <button class="selectionName">Kaunas B2 <br> <img class="buttonPic"
                src="https://www.vietvisiontravel.com/wp-content/uploads/2017/09/Top-Best-Cinemas-in-Ho-Chi-Minh-City.jpg"></button>
    </div>
@endsection
