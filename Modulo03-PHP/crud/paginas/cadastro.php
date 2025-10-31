<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadstro</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
    
<header>
    <nav>

        <ul>
            
            <li><a href="../index.html">Home</a></li>
            <li><a href="#">Cadastrar Usuário</a></li>
            <li><a href="VerificarUsuario.php">Procurar Usuário</a></li>

        </ul>


    </nav>
</header>

        <main>
            <form action="cadastro.php" method="POST">
                <h2>Cadastro de Aluno</h2>

                <label for="nome"> Nome:</label>
                <input type="text" name="nome" id="nome>

                <label for="sobrenome > Sobrenome:</label>
                 <input type="text" name="sobrenome" id="sobrenome> 
                 
                 <label for="email > E-mail:</label>
                 <input type="email" name="email" id="email">

                
                 <label for="curso">Selecione o Curso:</label>
             <select name="curso" id="curso">
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="es">Engenharia de Software</option>
                    <option value="si">Sistemas de Informação</option>
                    <option value="cc">Ciência da Computação</option>
            </select>

                    <input type="submit" value="Cadastrar">     
                           
            </form>
        </main>

        <?php

        try {
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                include("../conexao/conexao.php");
    
                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $email = $_POST["email"];
                $curso = $_POST["curso"];
    
                //criar
                $hoje = new DateTime();
                $id = $hoje->format("Ym") . rand(100,999); 
    
                echo $id;
    
                $sql = "INSERT INTO usuarios (id, nome, sobrenome, email, curso) values (?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("issss", $id, $nome, $sobrenome, $email, $curso);
                $stmt->execute();

                echo "<div class='mensagem sucesso'>Usuário cadastrado com sucesso</div>";
    
                $stmt->close();
                $conn->close();
            
            }
        }
        catch (mysqli_sql_exception $e) {
            // Duplicate entry
            if(str_contains($e->getMessage(),"Duplicate entry")) {
                echo "<div class='mensagem erro'>Erro ao cadastrar, tente novamente mais tarde</div>";
            }
            echo $e->getMessage();

        }
    
            ?>   

        

        


</body>
</html>