<?php session_start();?>
<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once TRATAMENTOREGISAPI?>
<?php $_SESSION["error_message"] = ""; $_SESSION["error_color"] = ""; ?>
<?php
$conn = open_database();
$error_id=0;

		if($senhaUser != $senhaUser2)
		{
		    //Password Matching Validation 
		    $error_id = 1; 
		}
		else
		{
		    $sqlLogin = "SELECT * FROM tb_user WHERE login_user= '$loginUser'";

		    $result = $conn->query($sqlLogin);

		    if($result->num_rows > 0)
		    {
		        $error_id = 2;
                        header("location: index.php");
		    }
		    else
		    {   
			 if ($sqlInsert = "INSERT INTO tb_user (nome_user,login_user,senha_user,endereco_user,email_user,cep_user,user_gender,user_telefone) VALUES('$name','$loginUser','$senhaUser','$endereco','$email','$cep','$gender','$tel')")
			 {
			     if ($conn->query($sqlInsert) === TRUE) {
                            echo "New record created successfully";
                                } else {
                                    echo "Error: " . $sqlInsert . "<br>" . $conn->error;
                                        }
			     header("location: index.php");
		         }
		         else
		         {
		              $error_message=3;
		         }
		   }
}
if ($error_id == 0) {
    $_SESSION["error_message"] = "Cadastro feito com sucesso!!";
    $_SESSION["error_color"] = "green";
} elseif ($error_id == 1) {
    $_SESSION["error_message"] = "As senhas não combinam.";
    $_SESSION["error_color"] = "";
} elseif ($error_id == 2) {
    $_SESSION["error_message"] = "Login já está em uso!";
    $_SESSION["error_color"] = "";
} else {
    $_SESSION["error_message"] = "Dado inserido inválido";
    $_SESSION["error_color"] = "";
}
?>