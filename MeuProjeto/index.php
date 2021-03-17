

<html>
  <head> <link rel = "stylesheet" href="css/minhacss.css"> </head>
  <title>RS Cursos</title>
  <h1>R.A Cursos</h1> 
  <header class = "buttonI" action = "">
  <a href="login.php"><button>Fazer Login</button></a>
  <a href="cadastro.php"><button>Cadastre-se</button></a>
      
  </header><br>

  <body>
   
  <p>A melhor plataforma de cursos on line, com certificado reconhecido nacionalmente. Quer melhorar suas habilidade
    e ter mais chance de entrar para o mercado de trabalho.
  </p>
<br>
<ul>
     <li>
        <img width="390px"  height="290px" src="img/imagem1.jpg">
        <h2>Java avançado</h2>
        <h2>R$ 23,00</h2>
    </li>

    <li>
        <img  width="390px"  height="290px" src="img/imagem2.jpg">
        <h2>Photoshop do zero</h2>
        <h2>R$ 23,00</h2>
    </li>

      <li>
        <img width="390px"  height="290px" src="img/imagem3.jpg">
        <h2>InDesign</h2>
        <h2>R$ 23,00</h2>
    </li>

    </ul>

<br>
    


<?php 
   $cursos = array(
      0 => array("curso" =>"Assistente administrativo","preço"=>" R$ 23,00"),
      1 => array("curso" =>"Java do básico ao Avançado","preço"=>" R$ 23,00"),
      2 => array("curso" =>"Photoshop","preço"=>"R$ 23,00"),
      3 => array("curso" =>"InDesign","preço"=>"R$ 23,00"),
      4 => array("curso" =>"Sql do zero ao avançado","preço"=>"R$ 23,00"),
      5 => array("curso" =>"Informática Básica","preço"=>"R$ 23,00")
   );
   foreach ($cursos as $key => $curs) {
      
  }
  
  ?>

  <h1 align = "center">Tabela de Cursos</h1>
  <div id = 'header' align ="center"> 
    <br>
    <table class = "tabela1" border="1" align = center >    
        <th>Item</th>
        <th>Curso</th>
        <th>Preço</th>

     <?php   foreach ($cursos as $key => $curs) {
    ?>  
       <tr>
        <td><?php  echo $key; ?></td>
        <td><?php  echo $curs["curso"]; ?></td>
        <td><?php echo $curs["preço"]; ?></td>
    </tr>
    
    <?php 
     }
     ?>   
    
</table>

  
    


  </div><br>
  <br>
  
  
  <h1 align = "center">Formulário</h1>
  <form id = 'form1' method="POST" align = "center"><br>
        
    
    <div class ="formulario1" method = "POST" action ="">

    <label>Nome</label><br>
    <input type = "text" name = "nome" placeholder = "Digite seu nome">
    <label>Selecione o Curso</label>

    <SELECT id = "curso" class = "selecao" NAME = "curso">
        <OPTION VALUE = "Nenhum">Nenhum</OPTION>
        <OPTION VALUE = "Conserto e Manutenção de Computadores">Conserto e Manutenção de Computadores </OPTION>
        <OPTION VALUE = "Photoshop do zero " >Photoshop do zero </OPTION>
        <OPTION VALUE = "InDesign">InDesign </OPTION>
        <OPTION VALUE = "Java avançado" >Java avançado </OPTION>
    </SELECT><br><br>
    <input class = "buttonComprar" TYPE="submit" NAME="botao" VALUE = "Comprar" />
    </div>

  </form>
  <?php
        
        $curso = $_POST ['curso'];
        $nome = $_POST['nome'];
        
        foreach ($array as &$value) {
          $value = $value * 3;
      }
        
       
    ?>
    <table class = "tabela" border ="1" align = center>
         <tr>
            <th>Cliente</th>
             <th>Curso</th>
             <th>preço</th>
         </tr>
         <tr>
            <td><?php echo $nome ?></td>
            <td><?php echo $curso ?></td>
            <td><?php echo "R$ 23,00" ?></td>
            
         </tr>
         <br>
        


    </table>
  
 


  </body>
</html>