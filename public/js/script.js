const showContentBtn = document.getElementById('showContentBtn');
const ebookSection =document.getElementById('ebookSection');
const mainCOntent = document.getElementById('mainContent');
const showRulesBtn = document.getElementById('showRulesBtn');

// tambahkan event listner ke tombol
showContentBtn.addEventListener('click', function(){
    // tampilkan e-book
    ebookSection.style.display = 'block';

    // ubah ukuran main menjadi 1500px
    mainCOntent.classList.add('expanded');

    // sembunyikan tombol setelah di tekan
    showContentBtn.style.display = 'none';
});

showRulesBtn.addEventListener('click', function(){
    // tampilkan Rules
    rulesSection.style.display = 'block';

    // ubah ukuran main menjadi 1500px
    mainCOntent.classList.add('expanded');

    // sembunyikan tombol setelah di tekan
    showRulesBtn.style.display = 'none';
})


// function
function openPopup(title, description, image, price) {
    document.getElementById('popupTitle').innerText = title;
    document.getElementById('popupDescription').innerText = description;
    document.getElementById('popupImage').src = image;
    document.getElementById('popupPrice').innerText = price;
    document.getElementById('purchasePopup').style.display = 'block';
}

function closePopup() {
    document.getElementById('purchasePopup').style.display = 'none';
}

function showThankYou() {
    closePopup(); // Menutup pop-up pembelian
    document.getElementById('thankYouPopup').style.display = 'block'; // Menampilkan pop-up terima kasih
}

function closeThankYou() {
    document.getElementById('thankYouPopup').style.display = 'none'; // Menutup pop-up terima kasih
}
