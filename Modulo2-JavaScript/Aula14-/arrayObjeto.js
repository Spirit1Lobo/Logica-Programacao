 let listaProdutos = [
    {nome: "Computador", fabricante: "Dell" , valor: 5000},
    {nome: "Notebook", fabricante: "Acer" , valor: 3000},
    {nome: "Monitor", fabricante: "LG" , valor: 900},
    {nome: "Teclado", fabricante: "Redragon" , valor: 200},
    {nome: "Mouse", fabricante: "Logitech" , valor: 200}
]


listaProduto.forEach((produto) => {
    console.log('o ${produto.nome} da ${produto.fabricante} é R$ ${produto.valor}');

})
let listaProdutoCaros = listaProdutos.filter(produto => produto.valor > 1000)
console.log(listaProdutoCaros);
