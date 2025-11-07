<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Nota</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    
<header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Cadastrar Usuário</a></li>
                <li><a href="verificarUsuario.php">Procurar Usuário</a></li>
            </ul>
        </nav>
    </header>

    <main>

    <section>
        <form action="atualizarNota.php" method="post">
            <select name="curso" id="curso" class="estilo">
                <option value="ads">Análise e Desenvolvimento de Sistema</option>
                <option value="es">Engenharia de Software</option>
                <option value="si">Sistema da informação</option>
                <option value="cc">Ciencia da Computação</option>
            </select>
            <input type="submit" value="Buscar">
        </form>
    </section>

</section>

    <?php
    //verificar se o $_post["curso] está preenchido
    if(isset($_post["curso"])){

        //Conexão com o Banco de Dados
        include("../conexao/conexao.php");
        $curso = $_POST["curso"];

        //Preparando a consulta SQL
        $sql = "SELECT * FROM usuarios WHERE curso = ?";
        $stmt = $conn->prepare($ql);

        if ($stmt) {

            $stmt->bind_param("s", $curso);
            $stmt->execute();
            $resultado = $stmt->get_result();
            echo "
            <tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['sobrenome']}</td>
            <td><input type='number' name=nota_atividade'{$row['id']}'></td>
            <td></td>
            </tr>
            ";
        }
            
    }
    ?>
    </main>

</body>
</html>