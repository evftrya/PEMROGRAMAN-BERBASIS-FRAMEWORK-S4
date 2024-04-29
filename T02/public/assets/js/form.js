document.addEventListener('DOMContentLoaded', function() {

})
var TujuanInput = document.getElementById("inpImage");
var TujuanInput2 = document.getElementById("inpImages");
var UbahBut = document.getElementById("UpBut");
var sett = document.getElementById("cG");
if (UbahBut.checked) {
    TujuanInput.style.display = "none";
    TujuanInput2.style.display = "";
    sett.value = "file";
}

function UbahType() {
   

    if (UbahBut.checked) {
        TujuanInput.style.display = "none";
        TujuanInput2.style.display = "";
        sett.value = "file";
    } else {
        TujuanInput2.style.display = "none";
        TujuanInput.style.display = "";
        sett.value = "text";
    }
}

function Ubahfoto() {
    
    var Tujuan = document.getElementById("imga");
    var UbahBut = document.getElementById("ubahbut");
    // var sett = document.getElementById("cG");
    if (UbahBut.checked) {
        Tujuan.style.display="";
        // sett.value = "file";
    } else {
        Tujuan.style.display="none";
        // sett.value = "text";
    }
}
