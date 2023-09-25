<?php
include_once "Veiculo.php";
include_once "Carro.php";

$car = new Carro();

$car->setId(1);

?>

<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js&quot; integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js&quot;
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css&quot; rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
    <title>Aula PHP - Orientado a Objetos</title>
    </head>
<body>
 <main>  
<div class="container-md">
<div class="row ">
<div class="col">
    <h5>Card BootStrap</h5>
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">Aula3_PHPOO</h5>
            <ol class="card-text">
                <li> Foi criada a classe Principal.php
                <li> Nesta classe instanciamos os objetos de todas as classes que criamos : <strong> Veiculo,carro,moto,onibus,caminhao</strong>
                <li> Em seguida inserimos os dados com o metodo de acesso <strong>set</strong>
                <li> Em seguida utilizamos uma tabela<strong>(BootStrap)</strong> para inserir os dados nas linhas com o metodo <strong>get</strong>
                <li> Para cada linha da tabela foi inserido os dados de um objeto diferente.
            </ol>          
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Id_Veiculo</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cor</th>
      <th scope="col">Ano</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $car->getId() ?></td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $mot->getId() ?></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><?php echo $oni->getId() ?></td>
     
    </tr>
    <tr>
      <th scope="row">4</th>
     
    </tr>
  </tbody>
</table>
</div>
<div class="card-footer"><a class="btn btn-primary" href="index.php" role="button">Voltar</a></div>
</div>
</div>
</div>
</div>
 </main>
</body>
</html>