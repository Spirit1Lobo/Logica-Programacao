<?php
//valida se o $_POST["id] está vazio
if(isset($_POST["id"])){

    //conexão com o banco de dados
    include("../conexao/conexao.php");

    //criar variavel do ID
    $id = $_POST["id"];

    //prepara a consulta SQL para excluir cadastro
    $sql = "DELETE FROM usuarios WHERE ID = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i" , $id);
        //Executa a query
        $stmt->execute();
        //direciona vocepara a pagina especificada 
        header("location: verificarUsuario.php");
        //encerra a consulta
        $stmt-> close(); 
    }else {
        //mensagem de erro
    echo "<div class='mensagem erro'>Erro na consulta</div>";
    }
    //encerra a conexão com o banco de dados
     

    



}

?>