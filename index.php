<?php
    session_start();
    include_once("conexao.php");

    include_once('topo.php');
?>
    <h1>Lista de usuários</h1>
    <nav id="mainNav">
        <ul>
            <li><a href="cad_usuario.php">Cadastrar Novo</a></li>
        </ul>
    </nav>
    <hr>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        //recebe o número da página informado na URL pelo úsuário
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        
        /*if(se $pagina_atual for diferente(!) de vazio(empty)) a variável $pagina recebe o valor de $pagina_atual. 
        else(:) recebe 1 e deireciona para a primeira página*/
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //seta quantidade de itens por página
        $qtd_result_pg = 3;

        //calcula início da visualização
        $inicio = ($qtd_result_pg * $pagina) - $qtd_result_pg;

        /*$result_usuario recebe a consulta sql que busca todos os usuários ordenados por nome
        e limita a consulta com a variável $qtd_result_pg*/
        $result_usuario = "SELECT * FROM usuarios ORDER BY nome LIMIT $inicio, $qtd_result_pg";
        
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
            //echo "<p>ID: " . $row_usuario['id'] . "</p><br>";
            echo "<p>Nome: " . $row_usuario['nome'] . "</p><br>";
            echo "<p>Email: " . $row_usuario['email'] . "</p><br>";
            echo "<a id='btnList' href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a>";
            echo "<a id='btnList' href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
        }

        //somar a quantidade de usuários
        $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];

        //quantidade de páginas
        $quantidade_pg = ceil($row_pg['num_result'] / $qtd_result_pg);

        //definir quantidade de links Previous e Next
        $max_links = 2;
        echo "<div id='paginacao'><a href='index.php?pagina=1'>Primeira </a>";
        
        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
            echo "<a href='index.php?pagina=$pag_ant'>$pag_ant </a>";
            }
        }
        
        echo $pagina;

        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a href='index.php?pagina=$pag_dep'> $pag_dep</a>";
            }
        }
        echo "<a href='index.php?pagina=$quantidade_pg'> Última</a></div>";
    ?>

<?php include_once('rodape.php'); ?>