var id=1;
var actu1=document.getElementById("Actu1");
var actu2=document.getElementById("Actu2");
var actu3=document.getElementById("Actu3");

function gauche()
{
    switch(id)
    {
        case 1:
            actu1.style.display="none";
            actu3.style.display="block";
            id=3;
            break;
        case 2:
            actu2.style.display="none";
            actu1.style.display="block";
            id=1;
            break;
        case 3:
            actu3.style.display="none";
            actu2.style.display="block";
            id=2;
            break;
        default:
            console.log("Error");
    }
}

function droite()
{
    switch(id)
    {
        case 1:
            actu1.style.display="none";
            actu2.style.display="block";
            id=2;
            break;
        case 2:
            actu2.style.display="none";
            actu3.style.display="block";
            id=3;
            break;
        case 3:
            actu3.style.display="none";
            actu1.style.display="block";
            id=1;
            break;
        default:
            console.log("Error");
    }
}

var map = L.map('mapid').setView([47.9021001,1.9026924], 20);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([47.9021001,1.9026924]).addTo(map)
    .bindPopup('Guingette')
    .openPopup();