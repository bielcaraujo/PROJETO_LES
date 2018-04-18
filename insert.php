<?php
include('DBconnec.php');
$error_message="";
$endereco = "";

$_POST['enderecotxt'] . ', ' . $_POST['endereconum'] = $endereco;


		if($_POST['password'] != $_POST['password_repeat'])
		{
		    //Password Matching Validation 
		    $error_message = "Senha não está certa"; 
		}
		else
		{
		    $result = $conn->prepare("SELECT * FROM tb_user where login_user=?");

		    // Bind the variables to the parameter as strings.
		    $result->bind_param('s', $_POST['username']);

		    // Execute the prepared statement.
		    $result->execute();

		    // Gets a result set from a prepared statement.
		    $result = $result->get_result();

		    if($result->num_rows > 0)
		    {
		        $error_message = "Esse usuário já está em uso";
		    }
		    else
		    {
			 if ($data=$conn->prepare("INSERT INTO tb_user (nome_user,login_user,senha_user,endereco_user,email_user,posicao_user,cep_user,user_gender,user_telefone) VALUES(?,?,?,?,?,?,?,?,?)"))
			 {
			     // Bind the variables to the parameter as strings. 
		    	     $data->bind_param("sssssssss", $_POST['nome'], $_POST['username'], $_POST['password'], $endereco, $_POST['email'], '1', $_POST['cep'], $_POST['gender'], $_POST['tel']);
		 
		    	     // Execute the prepared statement.
		    	     $data->execute();
		 
		    	     // Close the prepared statement.
		    	     $data->close();
			     header("location: index.php");
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