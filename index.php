<?php 
try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost","admin","admin");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>

<fieldset>
	<form method="POST">
		Nome: <br/>
		<input type="text" name="nome"><br/><br/>
		
		Mensagem:<br/>
		<textarea name="mensagem"></textarea><br/><br/>
		
		<input type="submit" value="Enviar Mensagem" />
	</form>
</fieldset>
<br/><br/>

<strong>Nome da pessoa</strong><br/>
A mensagem fica aqui
<hr/>
