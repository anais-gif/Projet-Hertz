var btnPopup = document.getElementById('btnPopup');
var overlay = document.getElementById('overlay');
var btnclose = document.getElementById('btnclose');

btnPopup.addEventListener("click", function(){
    overlay.style.display = 'block';
    });
    
    btnclose.addEventListener("click", function(){
    overlay.style.display = 'none';
    });