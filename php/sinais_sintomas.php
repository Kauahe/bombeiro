<?php
include("conecta.php");
session_start();
    $_SESSION["v"]= "v";
   $num_ocorrencia=  $_SESSION["nrOcorrencia"];
    $opcao1 = isset($_POST["opcao1"]) ? "Abdomen Sensível/Rígido" : "-";
    $opcao2 = isset($_POST["opcao2"]) ? "Afundamendo de crânio" : "-";
    $opcao3 = isset($_POST["opcao3"]) ? "Agitação" : "-";
    $opcao4 = isset($_POST["opcao4"]) ? "Amnésia" : "-";
    $opcao5 = isset($_POST["opcao5"]) ? "Angina de peito " : "-";
    $opcao6 = isset($_POST["opcao6"]) ? "Apnéia" : "-";
    $opcao7 = isset($_POST["opcao7"]) ? "Bradicardia  " : "-";
    $opcao8 = isset($_POST["opcao8"]) ? "Bradpnéia" : "-";
    $opcao9 = isset($_POST["opcao9"]) ?  "Bronco Aspirando" : "-";
    $opcao10 = isset($_POST["opcao10"]) ? "Cefaléia  " : "-";
    $opcao11 = isset($_POST["opcao11"]) ? "Cianose " : "-";
    $opcao12 = isset($_POST["opcao12"]) ? "Lábios" : "-";
    $opcao13 = isset($_POST["opcao13"]) ? "Extremidades" : "-";
    $opcao14 = isset($_POST["opcao14"]) ? "Convulsão" : "-";
    $opcao15 = isset($_POST["opcao15"]) ? "Decorticação " : "-";
    $opcao16 = isset($_POST["opcao16"]) ? "Deformidade " : "-";
    $opcao17 = isset($_POST["opcao17"]) ? "Descerebração" : "-";
    $opcao18 = isset($_POST["opcao18"]) ? "Desmaio" : ""; 
    $opcao19 = isset($_POST["opcao19"]) ? "Desvio de traquéia" : "-";
    $opcao20 = isset($_POST["opcao20"]) ? "Dispnéia " : "-";
    $opcao21 = isset($_POST["opcao21"]) ? "Dor local " : "-";
    $opcao22 = isset($_POST["opcao22"]) ? "Edema" : "-";
    $opcao23 = isset($_POST["opcao23"]) ? "Generalizado" : "-";
    $opcao24 = isset($_POST["opcao24"]) ? "Localizado " : "-";
    $opcao25 = isset($_POST["opcao25"]) ? "Enfisema Subcutâneo" : "-";
    $opcao26 = isset($_POST["opcao26"]) ? "Êstase de jugular" : "-";
    $opcao27 = isset($_POST["opcao27"]) ? "Face Pálida " : "-";
    $opcao28 = isset($_POST["opcao28"]) ? "Hemorragia " : "-";
    $opcao29 = isset($_POST["opcao29"]) ?  "Interna" : "-";
    $opcao30 = isset($_POST["opcao30"]) ? "Externa" : "-";
    $opcao31 = isset($_POST["opcao31"]) ? "Hipertensão" : "-";
    $opcao32 = isset($_POST["opcao32"]) ? "Hipotensão" : "-";
    $opcao33 = isset($_POST["opcao33"]) ? "Náuseas e Vômitos" : "-";
    $opcao34 = isset($_POST["opcao34"]) ? "Nasoragia" : "-";
    $opcao35 = isset($_POST["opcao35"]) ? "Óbito" : "-";
    $opcao36 = isset($_POST["opcao36"]) ? "Otorréia" : "-";
    $opcao37 = isset($_POST["opcao37"]) ? "Otorragia " : "-";
    $opcao38 = isset($_POST["opcao38"]) ? "O V A C E" : "-"; 
    $opcao39 = isset($_POST["opcao39"]) ? "Parada" : "-";
    $opcao40 = isset($_POST["opcao40"]) ? "Cardíaca" : "-";
    $opcao41 = isset($_POST["opcao41"]) ? "Respiratória" : "-";
    $opcao42 = isset($_POST["opcao42"]) ? "Priapismo" : "-";
    $opcao43 = isset($_POST["opcao43"]) ? "Prurido na pele" : "-";
    $opcao44 = isset($_POST["opcao44"]) ? "Pupílas" : "-";
    $opcao45 = isset($_POST["opcao45"]) ? "Ansiocoria" : "-";
    $opcao46 = isset($_POST["opcao46"]) ? "Isocoria" : "-";
    $opcao47 = isset($_POST["opcao47"]) ? "Midriase" : "-";
    $opcao48 = isset($_POST["opcao48"]) ? "Miose" : "-"; 
    $opcao49 = isset($_POST["opcao49"]) ? "Reagente" : "-";
    $opcao50 = isset($_POST["opcao50"]) ? "Ñ Reagente " : "-";
    $opcao51 = isset($_POST["opcao51"]) ? "Sede  " : "-";
    $opcao52 = isset($_POST["opcao52"]) ? "Sinal de Batile " : "-";
    $opcao53 = isset($_POST["opcao53"]) ? "Sinal de Guaxinim " : "-";
    $opcao54 = isset($_POST["opcao54"]) ? " Sudorese " : "-";
    $opcao55 = isset($_POST["opcao55"]) ? " Taquipnéia" : "-";
    $opcao56 = isset($_POST["opcao56"]) ? " Taquicardia " : "-";
    $opcao57 = isset($_POST["opcao57"]) ? "Tontura  " : "-";
    $opcao58 = $_POST["Outros"]; // Opção 58(campo de texto)

   // SQL para inserir os dados na tabela do banco de dados
   $sql = "INSERT INTO sinais_sintomas VALUES (:id, :num_ocorrencia, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21, :op22, :op23, :op24, :op25, :op26, :op27, :op28, :op29, :op30, :op31, :op32, :op33, :op34, :op35, :op36, :op37, :op38, :op39, :op40, :op41, :op42, :op43, :op44, :op45, :op46, :op47, :op48, :op49, :op50, :op51, :op52, :op53, :op54, :op55, :op56, :op57, :Outros)";
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
    $stmt->bindParam(':op9', $opcao9);
    $stmt->bindParam(':op10', $opcao10);
    $stmt->bindParam(':op11', $opcao11);
    $stmt->bindParam(':op12', $opcao12);
    $stmt->bindParam(':op13', $opcao13);
    $stmt->bindParam(':op14', $opcao14);
    $stmt->bindParam(':op15', $opcao15);
    $stmt->bindParam(':op16', $opcao16);
    $stmt->bindParam(':op17', $opcao17);
    $stmt->bindParam(':op18', $opcao18);
    $stmt->bindParam(':op19', $opcao19);
    $stmt->bindParam(':op20', $opcao20);
    $stmt->bindParam(':op21', $opcao21);
    $stmt->bindParam(':op21', $opcao21);
    $stmt->bindParam(':op22', $opcao22);
    $stmt->bindParam(':op23', $opcao23);
    $stmt->bindParam(':op24', $opcao24);
    $stmt->bindParam(':op25', $opcao25);
    $stmt->bindParam(':op26', $opcao26);
    $stmt->bindParam(':op27', $opcao27);
    $stmt->bindParam(':op28', $opcao28);
    $stmt->bindParam(':op29', $opcao29);
    $stmt->bindParam(':op30', $opcao30);
    $stmt->bindParam(':op31', $opcao31);
    $stmt->bindParam(':op32', $opcao32);
    $stmt->bindParam(':op33', $opcao33);
    $stmt->bindParam(':op34', $opcao34);
    $stmt->bindParam(':op35', $opcao35);
    $stmt->bindParam(':op36', $opcao36);
    $stmt->bindParam(':op37', $opcao37);
    $stmt->bindParam(':op38', $opcao38);
    $stmt->bindParam(':op39', $opcao39);
    $stmt->bindParam(':op40', $opcao40);
    $stmt->bindParam(':op41', $opcao41);
    $stmt->bindParam(':op42', $opcao42);
    $stmt->bindParam(':op43', $opcao43);
    $stmt->bindParam(':op44', $opcao44);
    $stmt->bindParam(':op45', $opcao45);
    $stmt->bindParam(':op46', $opcao46);
    $stmt->bindParam(':op47', $opcao47);
    $stmt->bindParam(':op48', $opcao48);
    $stmt->bindParam(':op49', $opcao49);
    $stmt->bindParam(':op50', $opcao50);
    $stmt->bindParam(':op51', $opcao51);
    $stmt->bindParam(':op52', $opcao52);
    $stmt->bindParam(':op53', $opcao53);
    $stmt->bindParam(':op54', $opcao54);
    $stmt->bindParam(':op55', $opcao55);
    $stmt->bindParam(':op56', $opcao56);
    $stmt->bindParam(':op57', $opcao57);
    $stmt->bindParam(':Outros', $Outros);
    
    
    $stmt->execute();
    
    header("Location:../pag_inicial.php");
    ?>