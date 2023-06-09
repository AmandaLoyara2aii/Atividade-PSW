<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <style>
      #title {
        font-size: 20px;
        font-weight: bolder;
        color: white;
        font-family: Arial;
        text-align: center;
        padding-top: 30px;
      }

      table {
        text-align: left;
        width: 500px;
        height: 300px;
        margin-left: 400px;
        background-color: white;
      }

      table, th, td {
        border: 1px solid black;
      }

      .conteudo {
        background-color: lavender;
        height: 415px;
        padding-top: 50px;
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0;">
    <?php include_once('header.html') ?>
    <div class="conteudo">
      <table>
        <tr>
          <th>Nome</th>
          <td>
            <?php echo $_POST['Nome']; ?>  
            <input type="hidden" name="Nome" value="<?php echo $_POST['Nome']; ?>">
          </td>
        </tr>
        <tr>
          <th>Email</th>
          <td>
            <?php echo $_POST['email']; ?>  
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          </td>
        </tr>
        <tr>
          <th>Matrícula</th>
          <td>
            <?php echo $_POST['matricula']; ?>  
            <input type="hidden" name="matricula" value="<?php echo $_POST['matricula']; ?>">
          </td>
        </tr>
        <tr>
          <th>Turma</th>
          <td>
            <?php echo $_POST['turma']; ?>  
            <input type="hidden" name="turma" value="<?php echo $_POST['turma']; ?>">
          </td>
        </tr>
        <tr>
          <th>Curso</th>
          <td>
            <?php echo $_POST['curso']; ?>  
            <input type="hidden" name="curso" value="<?php echo $_POST['curso']; ?>">
          </td>
        </tr>
        <tr>
          <th>Identidade</th>
          <td>
            <?php echo $_POST['identidade']; ?>  
            <input type="hidden" name="identidade" value="<?php echo $_POST['identidade']; ?>">
          </td>
        </tr>
      </table>
      <div class="button" style="margin-left: 625px; margin-top:25px;">
        <form action="editaraluno.php" method="post">
          <input type="hidden" name="Nome" value="<?php echo $_POST['Nome']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="matricula" value="<?php echo $_POST['matricula']; ?>">
          <input type="hidden" name="turma" value="<?php echo $_POST['turma']; ?>">
          <input type="hidden" name="curso" value="<?php echo $_POST['curso']; ?>">
<input type="hidden" name="identidade" value="<?php echo $_POST['identidade']; ?>">
<div class="botao">
  <button type="submit" class="btn"><b>Salvar Alterações</b></button>
</div>
</form>
</div>
<?php
  include_once('footer.html');
?>
</body>
</html>