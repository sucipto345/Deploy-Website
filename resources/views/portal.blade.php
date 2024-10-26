@extends('layout')

@section('title', 'portal')


@section('content')
    
<main>
    <img src="{{asset ('images/ISC.jpg')}}" alt="InStayCreative" width="230px" class="logo">
    <p>InStayCreative</p>
    <section class="social-media">
        <p>Join Us</p>
        <div class="link">
            <a href="https://whatsapp.com/channel/0029VarAXPl7tkjEIzBbXq3r"><img src="{{asset('images/whatsapp.png')}}" alt="saluran whatsapp" width="30px"></a>
            <a href="https://t.me/InStayCreative"><img src="{{asset('images/telegram.png')}}" alt="saluran telegram" width="30px"></a>
        </div> <!-- Tutup div.link di sini -->
        <a href=""></a>
    </section>
    
    <main id="mainContent">
        {{-- rules --}}
        <a id="showRulesBtn" class="showRulesBtn">RULES</a>
        <div id="rulesSection" class="hidden-content">
            <div class="list-rules">
                <h2>Rules</h2>
                <ol>
                    <li>1.Demi Kelancaran Proses akan di kerjakan setelah adanya pembayaran  <br>lunas / DP Minimal dari 50% total harga</li>
                    <li>2.Revisi Max 3x, lebih dari itu akan di kenakan biaya tambahan</li>
                    <li>3.Pembatalan sepihak DP akan di anggap hangus</li>
                    <li>4.Semua hasil akan di tampilkan di channel  InStayCreative</li>
                    <li>5.Pembelian Desain di atas 250.000, berhak mendapatkan bonus desain  <br>yang sudah kami siapkan</li>
                </ol>
            </div>
        {{-- end rules --}}
        {{-- ebook --}}
        <a id="showContentBtn" class="showContentBtn">Folder E-Book</a>
        
        <div id="ebookSection" class="hidden-content">
            <div class="ebook-container">
                <div class="ebook-item">
                    <a href="#">
                    <h2>COMMING SOON</h2>     
                    <!-- <img src="asset/1.png" alt="E-book 1" width="50px"> -->
                    </a>
                </div>
                <div class="ebook-item">
                    <a href="#">
                    <h2>COMMING SOON</h2>
                    <!--<img src="asset/2.png" alt="E-book 2" width="50px"> -->
                </div>
                <div class="ebook-item">
                    <a href="#">
                    <h2>COMMING SOON</h2>
                    <!--<img src="asset/2.png" alt="E-book 2" width="50px"> -->
                    </div>
        </div>
    </main>

    <!-- Pop-up untuk Pembelian -->
    <div id="purchasePopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <div class="popup-left">
                <img id="popupImage" src="asset/1.png" alt="E-book" width="100%">
            </div>
            <div class="popup-right">
                <h2 id="popupTitle"></h2>
                <p id="popupDescription"></p>
                <p><strong>Harga: $<span id="popupPrice"></span></strong></p>
                <button onclick="showThankYou()">Beli</button>
            </div>
        </div>
    </div>

    <!-- Pop-up Terima Kasih -->
    <div id="thankYouPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeThankYou()">&times;</span>
            <h2>Terima Kasih!</h2>
            <p>Terima kasih telah melakukan pembelian.</p>
            <button onclick="closeThankYou()">OK</button>
        </div>
    </div>
</main>

@endsection