<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

    include_once('topo.php');
?>
    <h1>Editar usuário</h1>
    <nav id="mainNav">
        <ul>
            <li><a href="cad_usuario.php">Cadastrar Novo</a><br></li>
            <li><a href="index.php">Listar</a></li>
        </ul>
    </nav>

    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="proc_edit_usuario.php" id="crud">
        <input type="hidden" name="id" value="<?php echo $row_usuario['id']?>">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $row_usuario['nome']?>"><br><br>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row_usuario['email']?>"><br><br>
        <div id="btnForm"><input type="submit" value="Editar"></div>
    </form>
    
<?php include_once('rodape.php'); ?>
