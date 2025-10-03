//https://viacep.com.br/ws/colocar CEP/json

const cep = document.getElementById("cep")

cep.addEventListener("change" , (evento) => {
    let cepUsuario = evento.target
    buscaCEP(cepUsuario.valeu)
})

async function buscarCEP(cepUsuario){

    try {
        let consultaCEP = await fetch('https://viacep.com.br/ws/${cepUsuario}CEP/json')
        let consultaCEPJson = await consultaCEP.json()
    }
    catch {

    }


}