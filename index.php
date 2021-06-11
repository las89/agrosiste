<?php
/*importação do arquivos*/
    require_once 'app/Core/Core.php';
    require_once 'app/Controller/HomeController.php';
    require_once 'app/Controller/ErroController.php';
    require_once 'app/Controller/ClassificacaoController.php';
    require_once 'app/Model/Classificacao.php';
    require_once 'app/Model/Conexao.php';
    require_once 'vendor/autoload.php';    
/*inicio do pagiaa*/
    $template = file_get_contents('app/View/estrutura.html');
    
        ob_start();
            $core= new Core;
            $core->start($_GET);
                $saida= ob_get_contents();/*armazenando os dados  da pagina*/
        ob_end_clean();
           $templatepronto= str_replace('{{Area_Dinamica}}',$saida,$template);
        echo $templatepronto;/*esta variavel ja mostar o conteudo da pagina dinamica*/
?>