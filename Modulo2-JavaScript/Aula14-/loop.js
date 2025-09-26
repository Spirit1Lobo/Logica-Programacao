//for i in range (1, 10 , 1)
 //   print(i)

for (let i = 0; i <=10; i++){

}   

let listaProdutos = ["computador" , "notebook" , "teclado" , "mouse" , "fone"]

//percorrer array - for
for (let i = 0; i < listaProdutos.length; i++) {
    console.log(listaProdutos[i]);
}

//Percorrer array - forEach
listaProdutos.forEach((produto) => {
    console.log(produto);
})