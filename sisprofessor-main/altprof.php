<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="altprof.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once('../conexao.php');


   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $endereco = $array_retorno['endereco'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];
   $cpf = $array_retorno['cpf'];
   $siape = $array_retorno['siape'];

?>

  <form method="POST" action="crudprof.php">
        <label for="">nome</label>
        <input type="text" name="nome" id=""  required  value="<?php echo $nome?>" required>
        <label for="">endereco</label>                                        
        <input type="text" name="endereco" id="" required  value="<?php echo $endereco ?> " required >
        <label for="">idade</label>
        <input type="text" name="idade" id="" value="<?php echo $idade ?>" required >
        
        <label for="">siape</label>
        <input type="text" name="siape" id="" value="<?php echo $siape ?>" required >
        
        
        <label for="">data</label>

        <input type="text" name="datanascimento" id="" value="<?php echo $datanascimento ?>" required >
        <label for="">status</label>
        
        <label for="">cpf</label>
        <input type="text" name="cpf" id="" value="<?php echo $cpf ?>" >
      
        <input type="hidden" name="id" id="" value="<?php echo $id ?>" >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>