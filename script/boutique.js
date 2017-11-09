/**
 * Created by mahatehotia on 09/11/17.
 */
function addArticle() {
        maDiv = document.createElement("div");
        maDiv.id = 'test';
        maDiv.className = 'divName';
        maDiv.innerHTML = document.getElementById('zonetxt').value;
        document.getElementById("cadre").appendChild(maDiv);
}