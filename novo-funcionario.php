<?php include_once 'validarsessao.php';?>
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
                //topo do sistema
                require_once('template/topo.inc');

                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //barra de menus
                require_once('template/barra-menus.inc');
            ?>


            <!--Mapa de navegacao-->
            <div id="conteinerMapa">
                <hr/>
                <label><a href="home.php">home </a>-> <a href="configuracoes.php">Configura&ccedil;&otilde;es</a> -> Cadastrar novo Funcionário</label>
            </div>
    
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Cadastrar novo Funcion&aacute;rio</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="gravarFuncionario.php">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label>Nome</label>
                                    <br />
                                    <input type="text" name="nome" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Sobre nome</label>
                                    <br />
                                    <input type="text" name="sobreNome" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Data de nascimento</label>
                                    <br />
                                    <input type="date" name="dataNasc" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>B.I.</label>
                                    <br />
                                    <input type="text" name="bI" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Telefone</label>
                                    <br />
                                    <input type="tel" name="tel" value="" class="textBoxSmall" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Morada</label>
                                    <br />
                                    <textarea name="morada" class="textAreaNormal">
                                        
                                    </textarea>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Perfil</label>
                                    <br />
                                    <select name="perfil" class="comboBoxNormal">
                                        <option value="1">
                                            Administrador
                                        </option>
                                        <option value="0">
                                            Funcion&aacute;rio
                                        </option>
                                    </select>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br />
                                    <br />
                                    <center>
                                        <input type="submit" name="bntSubmit" value="Gravar" class="bntVermelho" />
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
           
            
            <!--Espaçamento parao rodape-->
            <br />
            <br />
            <br />
            <!--Rodape padrao-->
            <footer id="rodape">
                <p>Todos direitos reservados.2014</p>
            </footer>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>