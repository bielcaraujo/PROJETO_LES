<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once TRATAMENTOREGISAPI?>
<?php $_SESSION["error_message"] = ""; $_SESSION["error_color"] = ""; ?>
<?php
$conn = open_database();

if ($sqlInsert = "INSERT INTO tb_jogos (id_jogos,id_tipo_jogo,id_tipo_plataforma,nome_jogo,nvl_con) VALUES('$idjogo','$tipojogo',$plataforma','$nomejogo','$nvconhecimento')")
			 {
			     if ($conn->query($sqlInsert) === TRUE) {
                            echo "Jogo cadastrado ao seu perfil com sucesso!";
                                }else{
                                    echo"Ocorreu um erro inesperado, tente novamente.";
                                }

?>

