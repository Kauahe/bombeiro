<?php
include("conecta.php");
session_start();

   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
   $opcao1=$_POST["opcao1"];
   $opcao2=$_POST["opcao2"];
   $opcao3=$_POST["opcao3"];
   $opcao4=$_POST["opcao4"];
   $opcao5=$_POST["opcao5"];
   $opcao6=$_POST["opcao6"];
   $opcao7=isset($_POST["opcao7"]) ? "> 2 seg" : "";
   $opcao8=isset($_POST["opcao8"]) ? "< 2 seg" : "";
  
   
   $sql = "INSERT INTO sinaisvitais VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8 )";
    $stmt = $pdo->prepare($sql);
   $n=null;
    $stmt->bindParam(':id', $n);
    $stmt->bindParam(':num_ocorrencia', $num_ocorrencia);
    $stmt->bindParam(':op1', $opcao1);
    $stmt->bindParam(':op2', $opcao2);
    $stmt->bindParam(':op3', $opcao3);
    $stmt->bindParam(':op4', $opcao4);
    $stmt->bindParam(':op5', $opcao5);
    $stmt->bindParam(':op6', $opcao6);
    $stmt->bindParam(':op7', $opcao7);
    $stmt->bindParam(':op8', $opcao8);
    
  
    if ($stmt->execute()) {
        $_SESSION["ocorrencia_cadastrada_vitais"] = true;
        echo '<script>alert("Cadastro realizado com sucesso!"); window.location.href="../pag_inicial.php";</script>';
      
    } else {
        // Defina a resposta como erro e exiba informações de erro
        echo '<script>alert("Erro ao cadastrar: ' . $stmt->errorInfo()[2] . '");</script>';
    }
    
?>