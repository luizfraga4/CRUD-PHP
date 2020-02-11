<?php
    session_start();

    include_once('topo.php');
?>
    <h1>Cadastrar usuário</h1>
    <nav id="mainNav">
        <ul>
            <li><a href="index.php">Listar</a></li>
        </ul>
    </nav>
    <hr>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="proc_cad_usuario.php" id="crud">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite o nome completo" required><br><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Digite o seu melhor email" required><br><br>
        <div id="btnForm"><input type="submit" value="Cadastrar"></div>
    </form>

<?php include_once('rodape.php'); ?>