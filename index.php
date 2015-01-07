<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            
            <?php
                //barra topo do sistema
                require_once('template/topo.inc');
            ?>
            <!--Banner Publicitario-->
            <div id="marketing-banner">
                <img src="imagens/marketingBanner.png" alt="Marketing Banner" width="100%" />
            </div>

            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Bem vindo!</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="validarLogin.php">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label>Login</label>
                                    <br />
                                    <input type="text" name="user" value="" class="textBoxNormal" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Senha</label>
                                    <br />
                                    <input type="password" name="senha" value="" class="textBoxNormal" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br />
                                    <center>
                                        <input type="submit" name="bntSubmit" value="Entrar" class="bntVermelho" />
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>
           
            
            <?php
                //rodape do sistema
                require_once('template/footer.inc');
            ?>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>