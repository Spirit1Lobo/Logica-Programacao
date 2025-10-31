<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Usuário</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../cadastro.php">Cadastrar Usuário</a></li>
            <li><a href="#">Procurar Usuário</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="containerSection">
        <form method="post">
            <input type="email" name="email" id="email" placeholder="Informe seu e-mail" required>
            <input type="submit" value="Buscar">
        </form>
    </section>

    <section>
        <?php
        if (isset($_POST["email"])) {
            include("../conexao/conexao.php");
            $email = $_POST["email"];

            $sql = "SELECT * FROM usuarios WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                echo "<p>Usuário encontrado!</p>";
            } else {
                echo "<p>Nenhum usuário encontrado com esse e-mail.</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </section>
</main>

</body>
</html>
