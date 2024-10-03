<?php

      $dbHost = 'localhost';
      $dbUsername = 'root';
      $dbPassword = '';
      $dbName = 'formulario_voluntario';

      $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

      // if($conexcao->connect_errno)
      // {
      //       echo "Erro";
      // }
      // else
      // {
      //       echo "Conexão efetuada com sucesso";
      // }