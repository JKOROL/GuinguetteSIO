bouton_ajout=document.getElementById("AjoutIngredient");
bouton_ajout.addEventListener("click",ajoutIngredient);
bouton_supp=document.getElementById("SuppIngredient");
bouton_supp.addEventListener("click", suppIngredient);

let i=0;
function ajoutIngredient()
{
    i++;
    div=document.getElementById("Ingredients");
    select=document.getElementById("ingredient0").cloneNode(true);
    select.id="ingredient"+i;
    select.name="ingredient"+i;
    div.append(select);
}

function suppIngredient()
{
    div=document.getElementById("Ingredients");
    select=document.getElementById("ingredient"+i);
    div.removeChild(select);
    i--;
}