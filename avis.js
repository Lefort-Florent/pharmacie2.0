var btnPopup = document.getElementById('btnPopup');
var overlay = document.getElementById('overlay');
btnPopup.addEventListener('click',openMoadl);
function openMoadl() {
overlay.style.display='block';
}



var btnClose = document.getElementById('btnClose');
var overlay = document.getElementById('overlay');
btnClose.addEventListener('click',closeModal);

function closeModal() {
    overlay.style.display='none';
    }