bouton_ajout=document.getElementById("AjoutTable");
bouton_ajout.addEventListener("click",ajoutTable);
bouton_supp=document.getElementById("SuppTable");
bouton_supp.addEventListener("click",suppTable);

let i=0;
function ajoutTable()
{  
    div=document.getElementById("Table");
    selectPrecedent=document.getElementById("IdTable"+i);
    select=selectPrecedent.cloneNode(true);
    var x = selectPrecedent.value;
    bouton_supp.disabled=false;
    for(let n=0;n<select.options.length;n++)
    {
        if (select.options[n].value == x){
            select.remove(n);
        }
    }

    if(select.options.length == 0)
    {
        bouton_ajout.disabled=true;
        console.log(select.options.length);
        alert('Plus de table disponible !');

    }
    else
    {
        selectPrecedent.disabled=true;
        i++;
        select.id="IdTable"+i;
        select.name="IdTable"+i;
        div.append(select);
        selectInitial=document.getElementById("IdTable");
       
    }
    

    

}

function suppTable()
{
    bouton_ajout.disabled=false;
    div=document.getElementById("Table");
    console.log()
    if(div.childElementCount == 2)
    {
        console.log("hello");
        bouton_supp.disabled=true;
    }
    if(i>0)
    {
        select=document.getElementById("IdTable"+i);
        div.removeChild(select);
        i--;
        selectPrecedent=document.getElementById("IdTable"+i).disabled=false;
    }
}

let back_office = document.getElementById("back_office");
let back_office_ul = document.getElementById("back_office_ul");
back_office.addEventListener("click", () => {
    if(getComputedStyle(back_office_ul).display != "none"){
      back_office_ul.style.display = "none";
    } else {
      back_office_ul.style.display = "block";
    }
  })