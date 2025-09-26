let produto ={
    nome: "Computador",
    Fabricante: "Positivo",
    Preço: 2000,
    Processador: "I3-2100",
}

// Ambos serve para a mesma finalidade 
console.log(produto.nome);
console.log(produto["nome"]);

//Adicionar um item no objeto, adicionando um item a lista
produto.armazanamento = "256 gb"
produto["Memoria RAM"] = "8 gb"

//remover um elemento
delete produto.armazanamento
delete produto["Memoria RAM"]
console.log(produto);