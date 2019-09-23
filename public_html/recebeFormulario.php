
<?php
session_start();
$_SESSION["enviado"] = "ok";



$nome = $_POST['nome'];


$telefone = $_POST['telefone'];



$comoConheceu = $_POST['comoConheceu'];


$radioRedeSocial = $_POST['radioRedeSocial'];

if($radioRedeSocial=='sim'){
    //$rede1 = $_POST['x[0]'];
    //$$rede2 = $_POST['x[1]'];
    //$rede3 = $_POST['x[3]'];

}


if (empty($nome) || empty($telefone)) {
    echo "<center><div class='alert bg-danger text-danger'>Erro: campo obrigatório não preenchido</div></center>";
} else {
    echo "<center><div class='alert bg-success text-success'>Os dados foram enviados com sucesso</div></center>";
    include 'index2.php';
}




?>

