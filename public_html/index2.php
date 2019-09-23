<?php
include_once 'recebeFormulario.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulário EloGroup</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/Javascript" src="http://localhost/Formulario-EloGroup/public_html/js/jquery.maskedinput.js"></script>
        <script src="http://localhost/Formulario-EloGroup/public_html/js/formulario.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>






</head>

<body>

    <div class="container" align="center" id="container">
        <header><h1>Formulário EloGroup</h1></header>  
        <label >Os campos marcados com</label> <label style="color:red;"> *</label>  <label> são de preenchimento obrigatório</label><br><br>
        <div id="caixa"></div>
        <nav> </nav>


        <form id="form" method="POST"  action="http://localhost/Formulario-EloGroup/public_html/recebeFormulario.php">
            <div class="form-group">
                <label >Nome:</label><label style="color:red;"> *</label> 
                <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome" value="<?php echo $nome;?>" disabled>
            </div>

            <div class="form-group">
                <label>Telefone:</label><label style="color:red;"> *</label> 
                <input type="text" class="form-control" name="telefone" placeholder="Digite o seu telefone (99 – 99999999)" value="<?php echo $telefone;?>" disabled>
            </div>

            <div>
                <label>Como nos conheceu:</label> 

               
                    
                    <?php 
                    echo ' <select id="comoConheceu" name="comoConheceu" class="form-control" disabled>';
                    switch ($comoConheceu){
                     case 0: 
                        echo '<option value="0" selected>Selecione...</option>
                        <option value="1">Internet</option>
                        <option value="2">Tv</option>
                        <option value="3">Outros</option>';
                         break;
                            

                        case 1: 
                        echo '<option value="0" >Selecione...</option>
                        <option value="1" selected>Internet</option>
                        <option value="2">Tv</option>
                        <option value="3">Outros</option>';
                            break;
                            


                        case 2: 
                                echo '<option value="0" >Selecione...</option>
                        <option value="1">Internet</option>
                        <option value="2" selected>Tv</option>
                        <option value="3">Outros</option>';
                                break;
                            
                        case 3: 
                                echo '<option value="0" >Selecione...</option>
                        <option value="1">Internet</option>
                        <option value="2">Tv</option>
                        <option value="3" selected>Outros</option>';
                                break;
                            
                    }
                      echo  '</select>';
                      ?>
               


            </div>




            <label>Possui rede social:</label>

            <div class="row">
                <div class="col-sm-6" align="right">
                    <label class="radio-inline">
                        
                      <?php 
                      if($radioRedeSocial== "sim"){
                        echo  '<input type="radio" value="sim" name="radioRedeSocial" onclick="exibeRede()" disabled checked>Sim ';
                       // var_dump($lista);
                        
                        
                        
                      }
                      else 
                           echo  '<input type="radio" value="sim" name="radioRedeSocial" onclick="exibeRede()" disabled >Sim ';
                          ?>
                      

                    </label>
                </div>
                <div class="col-sm-6" align="left">
                    <label class="radio-inline">
                        
                          <?php 
                      if($radioRedeSocial== "nao")
                        echo  '<input type=radio  value="nao" name="radioRedeSocial" onclick=" limpaRedeSocial()" disabled checked>Não ';
                      else 
                           echo  '<input type=radio  value="nao" name="radioRedeSocial" onclick=" limpaRedeSocial()" disabled>Não ';
                          ?>
                        
                        
                    </label>
                </div>  
            </div>



            <div id="redeSocial"></div>   




            <br><br>

            <div class="row">
                <button type="submit" class="btn btn-success" disabled> Enviar Dados</button>
            </div>



        </form>
        <br><br>
     



        <footer> </footer>
    </div>





</body>
</html>





