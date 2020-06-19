<?php require_once('top.php'); ?>

<?php
    // Menus do dashboard acionando biblioteca "libphp" a partir da pasta "dashboard"
    if(isset($_POST['escolher'])){
        include_once('../libphp/escolher.php');
    }
    if(isset($_POST['materiais'])){
    include_once('../libphp/materiais.php');
    }
    elseif(isset($_POST['transmissao'])){
        include_once('../libphp/transmissao.php');
    }
    elseif(isset($_POST['avaliacoes'])){
        include_once('../libphp/avaliacoes.php');
    }
    elseif(isset($_POST['complementos'])){
        include_once('../libphp/complementos.php');
    }
    elseif(isset($_POST['desempenho'])){
        include_once('../libphp/desempenho.php');
    }
    elseif(isset($_POST['sobre'])){
        include_once('../libphp/sobre.php');
    }
    else
    {
    include_once('../libphp/dadosdaturma.php');
    }

?>
      
<?php require_once('footer.php'); ?>
