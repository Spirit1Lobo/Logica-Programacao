//https://viacep.com.br/ws/colocar CEP/json

const cep = document.getElementById("cep");

cep.addEventListener("change", (evento) => {
  let cepUsuario = evento.target.value;
  buscarCEP(cepUsuario);
});

async function buscarCEP(cepUsuario) {
  let erroCep = document.getElementById("erro");
  erroCep.innerHTML = ""; // Limpa erro anterior

  try {
    let consultaCEP = await fetch(`https://viacep.com.br/ws/${cepUsuario}/json`);
    let consultaCEPJson = await consultaCEP.json();

    if (consultaCEPJson.erro) {
      throw new Error("CEP INEXISTENTE");
    }

    preencheCampos(consultaCEPJson);

  } catch (error) {
    erroCep.innerHTML = "CEP INVÁLIDO, TENTE NOVAMENTE !!";
    apagarCampos()
  }
}

function preencheCampos(cepJson) {
  let rua = document.getElementById("rua");
  let bairro = document.getElementById("bairro");
  let cidade = document.getElementById("cidade");
  let estado = document.getElementById("estado");

  rua.value = cepJson.lougradora
  bairro.value = cepJson.bairro
  cidade.value = cepJson.localidade
  estado.value = cepJson.uf
}

function apagarCampos(cepJson) {
    let rua = document.getElementById("rua");
    let bairro = document.getElementById("bairro");
    let cidade = document.getElementById("cidade");
    let estado = document.getElementById("estado");
  
    rua.value = ""
    bairro.value = ""
    cidade.value = ""
    estado.value = ""
  }
  





