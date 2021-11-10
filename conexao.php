<?php
  try {
      $con = new PDO("mysql:dbname=livraria_cultural;host=localhost", "root", "minas");
  } catch (Exception $e){
      echo "<p>Desculpe-nos, mas Houve um Problema ao Realizar a Conexão,<br>
            Quem Sabe você poderia tentar mais tarde?</p><p>Erro:</p><code>" . $e ->getMessage() . "</code>";
  }
?>