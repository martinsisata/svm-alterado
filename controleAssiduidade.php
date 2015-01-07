<?php include_once 'validarsessao.php';

error_reporting(0);?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            <?php
                //Barra topo do sistema
                require_once('template/topo.inc');
                
                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //Barra de menus
                require_once('template/barra-menus.inc');
            ?>

            <!--Mapa de navegacao-->
            <div id="conteinerMapa">
                <hr/>
                <label><a href="home.php">home </a>-> <a href="relatorios.php">Relact&oacute;rios</a> -> Controlo de aciduidade</label>
            </div>
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Controle de Assiduidade</h1>
                    <br />
                    <br />
                    
                    <!--Formulario de pesquisa-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <!--Primeiro filtro
                                <td>
                                    <select class="comboBoxNormal">
                                        <option>
                                            Dia
                                        </option>
                                        <option>
                                            Filtro 1-1
                                        </option>
                                        <option>
                                            Filtro 1-2
                                        </option>
                                    </select>
                                </td>
                                
                                
                                <td>
                                    <select class="comboBoxNormal">
                                        <option>
                                            Mês
                                        </option>
                                        <option>
                                            filtro 1-2
                                        </option>
                                        <option>
                                            Tipo2 2-3
                                        </option>
                                    </select> -->
                                </td>
                                
                                <!--Terceiro filtro-->
                                <td>
                                    <input type="date" name="data"  placeholder="Apartir de..." class="textBoxSmall" />
                                </td>
                                
                                <td>
                                    <input type="submit"  value="Pesquisar" class="bntVermelho" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                        <?php 

                        if (!isset($_GET['data'])) {?>
                            <table class="table centralizarDiv">

                            <!--Cabecalho da listagem-->
                              <tr class="tableHeader">
                                <td>
                                    NOME
                                </td>
                                <td>
                                    Data
                                </td>
                                <td>
                                    Hora
                                </td>
                                <td>
                                    AC&Ccedil;&Atilde;O
                                </td>

                            </tr>

<?php
include_once 'fontes/conexao.php';
$sql = "SELECT * FROM controleAssiduidade"; 
$result = mysql_query($sql,$conn);

#while ($linha=mysql_fetch_array($result)) 
$row=mysql_num_rows($result);

     for($i=0; $i<$row; $i++){
        $linha=mysql_fetch_array($result);
        $n = $i%2;
        if($n == 1)
        {
            $estilo = 'tableRowBrancoBrilho';
        }
        else
        {
            $estilo = 'tableRowBrancoFosco';
            } ?>

               <tr class='<?php echo $estilo; ?>'>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['data']; ?></td>
                        <td><?php echo $linha['hora']; ?></td>
                        <td><?php echo $linha['tipo']; ?></td>

               </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                            
                        }else
                        #Começo aqui o filtro
                        {?>
                        <table class="table centralizarDiv">

                            <!--Cabecalho da listagem-->
                              <tr class="tableHeader">
                                <td>
                                    NOME
                                </td>
                                <td>
                                    Data
                                </td>
                                <td>
                                    Hora
                                </td>
                                <td>
                                    ACÇÃO
                                </td>

                            </tr>

<?php
include_once 'fontes/conexao.php';
$dataDirecta = $_GET ['data'];
$arrayData = explode("-", $dataDirecta);
$arrayData = array_reverse($arrayData);
$data = implode("-", $arrayData);

$sql = "SELECT * FROM controleAssiduidade where data='".$data."'"; 
$result = mysql_query($sql,$conn);

#while ($linha=mysql_fetch_array($result)) 
$row=mysql_num_rows($result);

     if ($row<=0) {
         echo "<center><h1>Não existe nehum registo nesta data</h1></center>";
     }else{
        for($i=0; $i<$row; $i++){
        $linha=mysql_fetch_array($result);
        $n = $i%2;
        if($n == 1)
        {
            $estilo = 'tableRowBrancoBrilho';
        }
        else
        {
            $estilo = 'tableRowBrancoFosco';
            } ?>

               <tr class='<?php echo $estilo; ?>'>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['data']; ?></td>
                        <td><?php echo $linha['hora']; ?></td>
                        <td><?php echo $linha['tipo']; ?></td>

               </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                        }
     }
                        #Termina aqui o filtro

                         ?>
                        <br />
                        <br />
                        <div class="caixa">
                            <div class="caixa">
                                <a href="#" class="bntAzul"><label>Baixar PDF</label></a>
                            </div>
                            <div class="caixa">
                                <a href="#" class="bntVermelho"><labe>Imprimir</labe></a>
                            </div>
                        </div>
                    <br />
                    
                    <br />
                    <br />
                    
                </div><!--Fim zonaConteudo-->
                
            </session>

            <?php
                //Rodape do sistema
                require_once('template/footer.inc');
            ?>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>