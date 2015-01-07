<!--Topo principal-->
    <header id="topo">
    <!--Nome do usuario Logado-->
<?php

if (isset($_SESSION["nome"])) {?>
	    <p>
	    	<img src="imagens/user.png" />
        Ol&aacute; <?php $nome = $_SESSION["nome"]; echo $nome; ?> | <strong><a href="sair.php">Sair</a></strong>
      </p>
    <?php
}else{
?>
           <p>Flora & Filhos</p>

<?php
}
  ?>
    
    </header>