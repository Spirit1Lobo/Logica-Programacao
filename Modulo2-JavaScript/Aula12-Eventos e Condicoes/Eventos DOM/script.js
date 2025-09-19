let caixa =  document.getElementById("mouse")


function entradaMouse() {
    caixa.style.background = "blue"

}

function saidaMouse(){
    caixa.style.backgroundcolor = "pink"
}

function mudaHtml(){
    let nome = document.querySelector("#nome").valeu
    caixa.innerHTML = nome 
}