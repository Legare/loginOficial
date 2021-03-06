<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Novo Usuário</title>
                <meta charset="UTF-8">
	        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
		<!-- Inclus�o do Jquery -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
                <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Inclus�o do Jquery Validate -->
		<!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
                <script type="text/javascript" src="js/validate.js"></script>
		<!-- Valida��o do foruml�rio -->
		<script type="text/javascript">
			$(document).ready(function(){
						 
			    $('#meu_form').validate({
			   
					rules:{ 
						login:{ 
                                                    required: true,
                                                    remote: 'includes/verificaemail.php'
                                                    },//,
                                                conflogin:{
                                                  required: true,
                                                  equalTo: "#login"
                                                },                                
                                             senha:{ 
                                                 required: true
                                                 },
                                              confsenha:{ 
                                                 required: true,
                                                 equalTo: "#senha"
                                                 },
                                               
                                                    /*código meu*/
                                             termos: "required"
                                        /*fim código meu*/
					},
                                        
                                      
					messages:{
						login:{ 
                                                     required: 'Este Campo &eacute; obrigat&oacute;rio' , 
                                                     remote: '<font color="red">Este Login j&aacute; est&aacute; em uso.</font>'},//,
                                                conflogin:{
                                                       required: "O campo confirmação de email é obrigatorio.",
                                                       equalTo: '<font color="red">O campo confirmação de email deve ser identico ao campo email.</font>'
                                                     },
                                                senha:{ 
                                                       required: 'Este Campo &eacute; obrigat&oacute;rio' 
                                                      },
                                                confsenha:
                                                      { 
                                                         required: 'Este Campo &eacute; obrigat&oacute;rio', 
                                                         equalTo:  '<font color="red">O campo confirmação de senha deve ser identico ao campo senha.</font>'
                                                      },
					         termos: "Para se cadastrar você deve aceitar os termos de uso."
                                              }
					});
			
                                    });
			
			
					
					window.onload = function() {
					
                    // $('#login').keypress function(){alert("");});
					  
                       $("#login").keypress(function() {

					     $('div.loader').show();
                     });
									
                       $("#login").focusout(function() {

					     $('div.loader').hide();
                     });									
					 $("#login").keyup(function() {
                       $('div.loader').hide();
                     });
			}
            
	</script>
                
 </head>
<body>
    
 
    
   
   
<h1>Cadastro de Usuário</h1>
<form id="meu_form" action="inserirNovoUsuario.php" method="post" >
           
		<!--Login:<br />-->
                <label>Digite seu nome</label><br/>
                <input type="text" name="nome" id="nome" />
		<br />
                <label>Digite um email válido</label><br/>
                <input type="email" name="login" id="login" />
		<br />
                  <label>Confirme o  email</label><br/>
                <input type="email" name="conflogin" id="conflogin" />
		<br />
                 <label>Sexo:</label><br/>
                 Masculino<input type="radio" name="sexo" id="sexo" value="M" />
                Feminino<input type="radio" name="sexo" id="sexo" value="F" />
		<br />
                 <label>Data de Nascimento</label><br/>
                <input type="date" name="nascimento" id="nascimento" />
                <br/>
                <label>Estado</label><br/>
               <select name="uf" id="uf"> 
               <option value="SP"> SP</option>
               <option value="RJ"> RJ</option>
               <option value="MG"> MG</option>
               <option value="ES"> ES</option>
               <option value="SC"> SC</option>
               <option value="MS"> MS</option>
               <option value="PR"> PR</option>
               <option value="AM"> AM</option>
               <option value="RN"> RN</option>
               <option value="RR"> RR</option>
               <option value="AC"> AC</option>
               <option value="TO"> TO</option>
               <option value="PE"> PE</option>
               <option value="PB"> PB</option>
               <option value="SE"> SE</option>
               <option value="DF"> DF</option>
               <option value="GO"> GO</option>
               <option value="MT"> MT</option>
               <option value="RN"> RN</option>
               <option value="BA"> BA</option>
               <option value="PA"> PA</option>
               <option value="CE"> CE</option>
               <option value="RS"> RS</option>
               <option value="PI"> PI</option>
               <option value="AL"> AL</option>
               <option value=""> </option>
               <option value=""> </option>
               
                </select>
		<br />
                <label>Cidade</label><br/>
                <input type="text" name="cidade" id="cidade"  />
		<br />
                
		Senha:<br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confsenha" id="confsenha"/><br />
                Aceito os termos e condições:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Cadastrar" />
	</form>
<br/><br/>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>




