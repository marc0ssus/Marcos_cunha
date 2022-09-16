<?php
   define("salariominimo",1212);
   define("btnvoltar","<br><input type='button' onclick='history.go(-1)' value='Voltar'>");
   $erro = false;

   function naoPreenchido($valor) {
    if ($valor == "") {
        return true;
      } else {
        return false;
      }
   }
   
   if (naoPreenchido($_POST["nome"])) {
      echo "<p>Erro: Nome não informado</p>";
      $erro = true;
   }
   
   if (naoPreenchido($_POST["endereco"])) {
      echo "<p>Erro: Endereço não informado</p>";
      $erro = true;
   }

   if (!$erro) {
      printf("<strong>%s</strong> Recebe o equivalente a <strong>%1.2f salários mínimos</strong>. <br>Mora no endereço <strong>%s</strong><br>",$_POST["nome"],($_POST["salario"] / salariominimo),$_POST["endereco"]);
   }
   echo btnvoltar;
?>