<?php
    require '../../../config/conexao.php';
    require '../../../config/header.php';
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){
    // 	PACCPF	PACTEL	PACTPS	CODUSU
    // cpf, telefone, planosaude, usuario
    $cpf = strtoupper(filter_input(INPUT_POST, 'edtcpf'));
    $telefone = strtoupper(filter_input(INPUT_POST, 'edttelefone'));
    $planosaude = strtoupper(filter_input(INPUT_POST, 'edtplanosaude'));
    $usuario = strtoupper(filter_input(INPUT_POST, 'edtusuario'));
    $sql = "insert into pacientes (PACCPF,PACTEL,PACTPS,CODUSU) values (?,?,?,?);";
    $prp = $pdo->prepare($sql);
    if($prp->execute([$cpf,$telefone,$planosaude,$usuario])){
        $msg = '<span class="alert alert-danger text-center">ERRO AO GRAVAR OS DADOS!</span>';

    }else{
        $msg = '<span class="alert alert-danger text-center">ERRO AO GRAVAR OS DADOS!</span>';
    }
    

    }
?>





<?php
    require '../../../config/footer.php';
 ?>   