<?php
    class ClassificacaoController{
        public function index($param){
           try 
                {
                    $loader = new \Twig\Loader\FilesystemLoader('app/View');
                    $twig = new \Twig\Environment($loader);
                    $ColecaoClassificacao=Classificacao::AcharIdClassificicao();
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