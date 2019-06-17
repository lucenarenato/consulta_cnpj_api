<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="retorno.js"></script>
<form id="formu">
        <p>Cadastro de Empresa</p>
    		<fieldset id="first">
    
    			<label for="cnpj">CNPJ</label><br/>
    				<input id="cnpj" type="text" name="cnpj" size="35" maxlength="14" style="margin-right:20px; " value="27865757000102"><!-- Coloquei o value já preenchido apenas para facilitar os testes durante o desenvolvimento -->
    					<input id="pesquisar" type="button" name="pesqui" value="Pesquisar"><!-- Aqui incluímos o id="pesquisar" para poder aplicar o evento pelo ID e mudamos o type para "button"--><br/><br/>
    			
    			<label for="razao">Razão social</label><br/>
    				<input id="razao" type="text" name="razao" size="35" maxlength="50"><br/><br/>
    			
    			<label for="nome">Nome fantasia</label><br/>
    				<input id="nome" type="text" name="nome" size="35" maxlength="50"><br/><br/>
    		</fieldset>
    		
    		<fieldset id="second">
    			
    			<label for="logradouro">Logradouro</label><br/>
    				<input id="logradouro" type="text" name="Logradouro" size="35" maxlength="50"><br/><br/>
    			
    			
    		</fieldset>
    		<br/><input id=save type="submit" name="salvar" value="Salvar">
    	</form>