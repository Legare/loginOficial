<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Novo Usuário</title>
               <meta charset="UTF-8">
                
 </head>
<body>
    
 
    
   
   
<h1>Cadastro de Banda</h1>
<form id="meu_form" action="inserirBanda.php" method="post" >
           
		<!--Login:<br />-->
                <label>Nome da banda:</label><br/>
                <input type="text" name="banda" id="banda" />
		<br />
                <label>Digite um email válido</label><br/>
                <input type="email" name="emailbanda" id="emailbanda" />
		<br />
                  <label>Confirme o  email</label><br/>
                <input type="email" name="confloginb" id="confloginb" />
		<br />
                
                <label>Gênero da banda:</label><br/>
               <select name="genero" id="genero"> 
               <option value="axe"> Axé</option>
               <option value="asian"> Asian</option>
               <option value="black"> Black</option>
               <option value="eletronica"> Eletrônica</option>
               <option value="gospel"> Gospel</option>
               <option value="rap"> Rap</option>
               <option value="reggae"> reggae</option>
               <option value="outros"> outros</option>
               
               
                </select>
		<br />
                
                
		Senha:<br />
		<input type="password" name="senhabanda" id="senhabanda"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confsenhab" id="confsenhab"/><br />
                Aceito os termos e condições:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Cadastrar" />
	</form>
<br/><br/>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>




