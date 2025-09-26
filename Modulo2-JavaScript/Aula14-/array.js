let listaNomes = ["Marcos" ,  "Diego" , "Camila" , "Matheus"]

// splice remove atraves da posição da lista  
listaNomes.splice(3,1) // matheus foi removido
console.log(listaNomes);

listaNomes.splice(1,1, "Robson" , "Edivan")
console.log(listaNomes);

//Adicionando itens
listaNomes.splice(2,0,"Gabriel" , "Diogo") 
console.log(listaNomes);