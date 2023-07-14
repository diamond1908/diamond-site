<!DOCTYPE html>
<html>
<head>
  <title>Painel do Administrador - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/122/122796.png"/>
  <style>
    body {
      width: 100%;
      height: 500px;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      background-color: #DCDCDC;
      padding: 0px;
    }
    
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #333;
      padding: 10px 20px;
      color: #fff;
    
    }

    .table {
  width: 100%;
  overflow-x: auto;
}
    
    .header .profile {
      display: flex;
      align-items: center;
    }
    
    .header .profile img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      margin-right: 10px;
    }
    
    .search {
      display: flex;
      align-items: center;
    }
    
    .search input[type="text"] {
      padding: 5px;
      border-radius: 3px;
      border: none;
      margin-right: 10px;
    }

    .logo2{
      margin-top: 2%;
    }
    
    .email-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
    }
    
    .email-item {
      width: 300px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
    }
    
    .email-item h3 {
      margin: 0;
      font-size: 18px;
    }
    
    .email-item p {
      margin-top: 10px;
      font-size: 14px;
    }
    
    .email-item .reply-button {
      padding: 5px 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .email-item .reply-button:hover {
      background-color: #45a049;
    }
    
    .email-item .reply-form {
      margin-top: 10px;
    }
    
    .email-item .reply-form textarea {
      width: 100%;
      height: 100px;
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .email-item .reply-form .send-button {
      margin-top: 10px;
      padding: 5px 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .email-item .reply-form .send-button:hover {
      background-color: #45a049;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination a {
      margin: 0 5px;
      padding: 5px 10px;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 3px;
      text-decoration: none;
      color: #333;
      
    }
    .logo{
      text-align: center;
      justify-content: center;
      margin-top: 0.5%;
    }

    .pagination a:hover {
      background-color: #e9e9e9;
    }

    .active-page {
      background-color: #4caf50;
      color: #fff;
    }
    .container-fluid{
      background-color:#ffffff;
      margin-top: -15px;
    }
    li{
      list-style-type :none;
    }
  </style>
</head>
<div class="container-fluid">
  <div class="logo">
    <li><a href="../Diamond/index.html"><img class="logo2" src="assets/images/Logo da Empresa2.png" alt="..." width="210" class="img-fluid"></a></li>
  </div>
  <hr>
  <div class="table-responsive">
    <table class="table table-striped">
      <!-- Restante do código da tabela -->
    </table>
  </div>
</div>

  
    <?php
      require_once './dao/FormularioDao.php';
      try {
        $listaformulario = FormularioDao::listar();
        } catch(Exception $e) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }
    ?>
<table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col" width='100px'>Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Mensagem</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listaformulario as $formulario){ ?>
        <tr>
        <th scope="row"><?php echo $formulario['idFormulario']; ?></th>
        <td><?php echo $formulario['nomeCompleto']; ?></td>
        <td><?php echo $formulario['email']; ?> </td>
        <td><?php echo $formulario['escreva']; ?> </td>                      
      </tr>
      <?php } ?>
      </tbody>
    </table>               
    </form>
    
    <!-- Adicione mais itens de e-mail conforme necessário -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>


