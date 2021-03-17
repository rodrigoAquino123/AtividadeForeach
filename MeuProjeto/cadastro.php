<html>
  <head>
  <link rel = "stylesheet" href="css/minhacss.css">
    <title> RS Cursos</title>
    <h1>RS Cursos</h1>
  </head>
  <body>
    
    <p>Faça seu cadastro para poder fazer a compra e acesso a tudo que seu curso tem a oferecer.</p>
     
    <form class = "formL" method="POST" action = "">
        <div class = "card">
          <div class = "card-top">
            <h2>CADASTRE-SE</h2>
          </div>
          <div class ="card-group">
            <label>Nome</label>
            <input type = "text" name = "nome" placeholder = "Digite seu Nome">
          </div>
          <div class ="card-group">
            <label>Email  </label>
            <input type = "text" name = "email" placeholder = "Digite seu Email">
          </div>
          <div class ="card-group">
            <label>Crie uma Senha</label>
            <input type = "password" name = "criar-senha" placeholder = "Digite sua senha">
          </div>
          <div class ="card-group">
            <label>Repita a senha</label>
            <input type = "password" name = "repetir-senha" placeholder = "Digite sua senha">
          </div>
          <div class ="card-group">
            <button TYPE = "submit">Cadastrar</button>
          </div>

        </div>
        <?php
        
        @$nome = $_POST['nome'];
        @$email = $_POST['email'];
       
    ?>
    <br><br>
    

        

   </form>
    
  </body>
</html>