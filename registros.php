<?php 

      include_once('config.php');

      $sql = "SELECT * FROM cadastro ORDER BY id ASC";

      $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Voluntáriados</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>

      body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(141, 112, 112), grey);
            text-align: center; 
      }

      h1 {
            color: white;
            background-color: rbga(0,0,0,0.6);
      }
</style>
</head>
<body>

      <h1>Voluntários</h1>
      
</body>
</html>

<div class="m-5">
      <table class="table text-white table-bg">
            <thead>
            <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Gênero</th>
                  <th scope="col">Nascimento</th>
            </tr>
            </thead>
            <tbody>
                  <?php
                        while($user_data = mysqli_fetch_assoc($result)) {
                              echo "<tr>";
                              echo "<td>".$user_data['id']."</td>";
                              echo "<td>".$user_data['nome']."<//td>";
                              echo "<td>".$user_data['email']."</td>";
                              echo "<td>".$user_data['telefone']."</td>";
                              echo "<td>".$user_data['genero']."</td>";
                              echo "<td>".$user_data['data_nascimento']."</td>";
                              echo "</tr>";
                        }
                  ?>
            </tbody>
      </table>
</div>