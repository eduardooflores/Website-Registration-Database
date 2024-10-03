<?php
 
      if(isset($_POST['submit']))
      {
           // print_r('Nome: ' . $_POST['nome']);
           // print_r('<br>');
           // print_r('Email: ' . $_POST['email']);
           // print_r('<br>');
           // print_r('Telefone: ' . $_POST['telefone']);
           // print_r('<br>');
           // print_r('Gênero: ' . $_POST['genero']);
           // print_r('<br>');
           // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
           // print_r('<br>');      
           // print_r('Texto: ' . $_POST['areadetexto']);

           include_once('config.php');

           $nome = $_POST['nome'];
           $email = $_POST['email'];
           $telefone = $_POST['telefone'];
           $genero = $_POST['genero'];
           $data_nascimento = $_POST['data_nascimento'];
           $text_area = $_POST['areadetexto'];

           $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, telefone, genero, data_nascimento, text_area) 
           VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$text_area')");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro para voluntários</title>
      <style>
            body{
                  font-family: Arial, Helvetica, sans-serif;
                  background-image: linear-gradient(to right, rgb(141, 112, 112), grey);
            }
            .box{
                  color: white;
                  position: absolute; /* Faz com que o elemento ocupe apenas o espaço dele mesmo */
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  background-color: rgba(0, 0, 0, 0.7);
                  padding: 15px;
                  border-radius: 15px;
                  width: 20%;
            }

            fieldset{border: 3px, solid white}

            legend{
                  color: black;
                  font-weight: bold;
                  border: 1px solid white;
                  padding: 10px;
                  text-align: center;
                  background-color: white;
                  border-radius: 8px;
            }

            .inputBox{
                  position: relative;
            }

            .inputUser{
                  background: none;
                  border: none;
                  border-bottom: 1px solid white;
                  outline: none; /* Tira a borda do input que vem por padrão*/
                  color: white;
                  font-size: 15px;
                  width: 100%;
                  letter-spacing: 2px; /* Adiciona um espaçamento aos caracteres do input*/
            }

            .labelInput{
                  position: absolute;
                  top: 0px;
                  left: 0px;
                  pointer-events: none; /* Qualquer lugar clicado no input executara a ação*/
                  transition: .5s;
            }

            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{
                  top: -20px;
                  font-size: 12px;
                  color: rgb(141, 112, 112);
            }

            textarea{
                  resize: none; /* Faz com que a área de texto do textarea não possa ser redimensionada */
                  font-size: 15px;
            }

            #dataNascimento{
                  border: none;
                  padding: 8px;
                  border-radius: 10px;
                  font-size: 15px;
            }

            #submit{
                  background-image: linear-gradient(to right, rgb(141, 112, 112), grey); 
                  width: 100%;
                  border: none; 
                  padding: 15px;
                  color: white;
                  font-size: 15px;
                  font-weight: bold;
                  cursor: pointer; /* Muda o cursos para clicar quando mouse estiver em cima*/
                  border-radius: 10px;
            }

            #submit:hover{
                  background-image: linear-gradient(to right, rgb(141, 112, 112), rgb(78, 78, 78));
            }
      </style>
</head>
<body>
      <div class="box"> 
            <form action="cadastro.php" method="POST">
                  <fieldset>
                        <legend>Formulário de voluntários</legend>
                        <br>
                        <div class="inputBox">
                              <input type="text" name="nome" id="nome" class="inputUser" required>
                              <label for="nome" class="labelInput">Nome completo</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                              <input type="text" name="email" id="email" class="inputUser" required>
                              <label for="nome" class="labelInput">Email</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                              <input type="text" name="telefone" id="telefone" class="inputUser" required>
                              <label for="telefone" class="labelInput">Telefone</label>
                        </div>
                        <br>
                        <p>Gênero:</p>
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label><br>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label><br>
                        <input type="radio" id="outro" name="genero" value="outro" required>
                        <label for="outro">Outro</label>
                        <br><br>
                              <label for="data_nascimento">Data de Nascimento:</label>
                              <input type="date" name="data_nascimento" id="dataNascimento" required>
                        <br><br>
                        <div class="inputBox">
                              <label for="areadetexto">Por que deseja se voluntáriar?</label>
                              <textarea name="areadetexto" id="areadetexto" rows="4" cols="40" required></textarea>     
                        </div>
                        <br><br>
                        <input type="submit" name="submit" id="submit">
                  </fieldset>
            </form>
      </div>
</body>
</html>