<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>
<?php require_once TRATAMENTOREGISAPI?>
<?php
$conn = open_database();
$error_message="";

		if($senhaUser != $senhaUser2)
		{
		    //Password Matching Validation 
		    $error_message = "As senhas não correspondem"; 
		}
		else
		{
		    $sqlLogin = "SELECT * FROM tb_user WHERE login_user= '$loginUser'";

		    $result = $conn->query($sqlLogin);

		    if($result->num_rows > 0)
		    {
		        $error_message = "Esse usuário já está em uso";
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
			     //header("location: index.php");
		         }
		         else
		         {
		              $error_message="Data Filed invalid";
		         }
		   }
}
if($error_message !="")
{
    echo $error_message;
}
?>