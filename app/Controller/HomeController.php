<?php
    class HomeController{
        public function index(){
           try 
                {
                    $loader = new \Twig\Loader\FilesystemLoader('app/View');
                    $twig = new \Twig\Environment($loader);
                    $ColecaoClassificacao=Classificacao::ListarTodosClassficacao();
                    $template = $twig->load('Classificacao.html');
                    $parametros= array();
                    $parametros['classificacao']=$ColecaoClassificacao;

                    $conteudo= $template-> render($parametros);
                    echo $conteudo;

                       } catch (Exception $e) 
                {
                    echo $e->getMessage();
                }
         
        }
    }
?>