<?php
include("./db/conexao.php");
session_start();
if (isset($_SESSION["loginUser"]) and isset($_SESSION["senhaUser"])) {
    $loginUser = $_SESSION["loginUser"];
    $senhaUser = $_SESSION["senhaUser"];
    $nomeUser = $_SESSION["nomeUser"];
    $sql = "SELECT * FROM tbusuarios WHERE loginUser = '{$loginUser}' and senhaUser = '{$senhaUser}'";
    $rs = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);
    if ($linha == 0) {
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = "";
}
?>
<?php
include_once("./db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>LOCADORA DEV</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body class="bg-secondary">
    <header class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">>
            <div class="container">
                <a class="navbar-brand" href="#">LOCADORA DEV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">___</span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="index.php?menu=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=videos">Videos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=categorias">Categoria</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=clientes">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menu=locacao">Locacao</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <!-- conteúdo principal do sistema -->


        <!-- MENU DE INCLUSÃO DE CONTEÚDO -->
        <?php
        if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
        } else {
            $menu = "";
        }
        switch ($menu) {
            case 'home':
                include("home.php");
                break;
            case 'videos':
                include("lista-videos.php");
                break;
            case 'cad-videos':
                include("cad-videos.php");
                break;
            case 'inserir-videos':
                include("inserir-videos.php");
                break;
            case 'editar-videos':
                include("editar-videos.php");
                break;
            case 'excluir-videos':
                include("excluir-videos.php");
                break;
            case 'atualizar-videos':
                include("atualizar-videos.php");
                break;
            case 'categorias':
                include("lista-categorias.php");
                break;
            case 'cad-categorias':
                include("cad-categorias.php");
                break;
            case 'inserir-categorias':
                include("inserir-categorias.php");
                break;
            case 'editar-categorias':
                include("editar-categorias.php");
                break;
            case 'atualizar-categorias':
                include("atualizar-categorias.php");
                break;
            case 'excluir-categorias':
                include("excluir-categorias.php");
                break;
            case 'clientes':
                include("lista-clientes.php");
                break;
            case 'cad-clientes':
                include("cad-clientes.php");
                break;
            case 'inserir-clientes':
                include("inserir-clientes.php");
                break;
            case 'editar-clientes':
                include("editar-clientes.php");
                break;
            case 'atualizar-clientes':
                include("atualizar-clientes.php");
                break;
            case 'atualizar-clientes':
                include("atualizar-clientes.php");
                break;
            case 'excluir-clientes':
                include("excluir-clientes.php");
                break;
            case 'locacao':
                include("locacao.php");
                break;
            default:
                include("home.php");
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>