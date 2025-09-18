//window.document.body.style.backgroundColor = "pink" 
//document.body.style.color = "white"

//window.alert("SEJA BEM VINDO")

//window.prompt("Login")
//window.prompt("Senha")

//window.confirm("Site com Virus, deseja continuar? ")

let paragrafo1 = document.getElementsByTagName("p")[0]
paragrafo1.innerHTML = "USANDO O TAG NAME"
paragrafo1.style.backgroundColor = "pink"

let paragrafo2 = document.getElementById("paragrafo2")
paragrafo2.style.backgroundColor = "pink"

let paragrafo3 = document.getElementsByTagName("p")[2]
paragrafo3.innerHTML = "USANDO O TAG NAME"
paragrafo3.style.backgroundColor = "pink"

let paragrafo4 = document.querySelector("#paragrafo4")
paragrafo4.innerHTML = "USANDO O QUERY SELECTOR"
paragrafo4.style.backgroundColor = "pink"

let paragrafo5 = document.querySelectorAll("p")[4]
paragrafo5.innerHTML = "USANDO O QUERY SELECTOR ALL"
paragrafo5.style.backgroundColor = "pink"
