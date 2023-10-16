<?php
 include("../php/conecta.php");
// ID do usuário recebido na URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Consulta para obter informações do usuário com base no ID
    $sql = "SELECT nome, email, cpf, imagem_blob FROM cadastro WHERE id = $userId";
    $result = $pdo->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nome = $row['nome'];
            $email = $row['email'];
            $cpf = $row['cpf'];
            $imagem_blob = $row['imagem_blob'];
        }
    }
}

$pdo->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body>
    <header>
    <div class="espaco">
            <div class="imagem">
                <img src="../img/logosembrilho.png" width="60px" height="60px">
            </div>
            <div class="row">
                <h1>SOS BOMBEIROS</h1>
                <h2>NÚCLEO DE OPERAÇÕES AÉREAS E RESGATE</h2>
            </div>
        </div>
    </header>

    <div class="titulo"><b> PERFIL</b> </div>
    <div class="caixa">
        <div class="foto">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($imagem_blob); ?>" width="200px" height="200px" alt="Foto do usuário">
        </div>
        <div class="alterar">
            <div class="alt"><b>ALTERAR</b></div>
        </div>
    </div>

    <div class="info">
        <div class="nome">
            <div class="tx1"><b>NOME:</b></div>
            <div class="linha1"></div>
            <div class="valor"><?php echo $nome; ?></div>
        </div>

        <div class="email">
            <div class="tx1"><b>EMAIL:</b></div>
            <div class="linha2"></div>
            <div class="valor"><?php echo $email; ?></div>
        </div>

        <div class="telefone">
            <div class="tx1"><b>CPF:</b></div>
            <div class="linha1"></div>
            <div class="valor"><?php echo $cpf; ?></div>
        </div>
    </div>
</body>

</html>
