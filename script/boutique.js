/**
 * Created by mahatehotia on 09/11/17.
 */
function addArticle() {
        maDiv = document.createElement("div");
        maDiv.id = 'id_de_la_div';
        maDiv.className = 'col-4 col-md-2'
        maDiv.style.border = '1px solid black'; //Pour mettre un border à ta div, par exemple
        maDiv.innerHTML = 'Ceci est le contenu de la div'; //Peut contenir de l'html
        document.getElementById('container2').appendChild(maDiv);

}