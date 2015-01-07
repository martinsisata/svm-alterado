<?php
    session_start();

    if (isset($_SESSION['nome'])) {
    	
    }else {
    	         print"<script>
                alert('Usuário sem Acesso')
                location.href='index.php?pg=login';
                </script>";
    }

?>
