
window.addEventListener('DOMContentLoaded', function() {
    console.log( "ready!" );{

function afficher_cacher(id)
{
    if(document.getElementById('hidden').style.visibility=="hidden")
    {
        document.getElementById('hidden').style.visibility="visible";
        document.getElementById('bouton_'+'bouton_texte').innerHTML='Cacher le texte';
    }
    else
    {
        document.getElementById('hidden').style.visibility="hidden";
        document.getElementById('bouton_'+'bouton_texte').innerHTML='Afficher le texte';
    }
    return true;
}
};

})
