<?php
    class Classificacao{
       /* public static function CadastarAtualizacaoClassificacao($classificacao)
        {
            $conn = Conexao::getConnection();
            
            if (empty($classificacao['idclassificacao']))
            {
                $result = $conn ->query("SELECT max(idclassificacao) as next FROM classificacao");
                $row = $result->fetch();
                $classificacao['idclassificacao'] = (int) $row['next'] +1;
              
                $sql = "INSERT INTO classificacao (idclassificacao, classificacao) VALUES ( :idclassificacao, :classificacao)";
            }
            else
            {
                $sql = "UPDATE classificacao SET classificacao = :classificacao WHERE id = :idclassificacao";
            }

            $result = $conn->prepare($sql);
            $result->execute([':idclassificacao'        => $classificacao['idclassificacao'],
                              ':classificacao'      => $classificacao['classificacao'] ]);
        }

 public static function DeletarClassficacao($idclassificacao)
        {
            $conn = Conexao::getConnection();
            $result = $conn->prepare("DELETE FROM classificacao WHERE idclassificacao=:idclassificacao");
                $result->execute([':idclassificacaoclassificacao'=>$idclassificacao]);
        }
        ublic static function ListarPPClassficacao ($Pesquisa)
        {
            $conn = Conexao::getConnection();
            $result = $conn->prepare("SELECT * FROM classificacao WHERE idclassificacao=:idclassificacao OR classificacao=:classificacao" );
            $result->execute([':idclassificacao'=>(int)$Pesquisa]);
            $result->execute([':classificacao'=>(string)$Pesquisa]);
                return $result->fetch();
        }*/
        public static function AcharIdClassificicao($idclassificacao)
        {
            $conn = Conexao::getConnection();
            $sql= "SELECT * FROM Classificacao WHERE idclassificacao=:idclassificacao";
           $sql= $conn->prepare($sql);
           $sql->binvalue('idclassificacao',$idclassificacao, PDO::PARAM_INT);
           $sql-> execute();
           $resultado=$sql->fetchObject('Classificacao');
            if(!$resultado){
                throw new Exception("Não encontrado o Dado");
                
            }

                return $result->fetch();
        }
public static function ListarTodosClassficacao()
        {
            $conn = Conexao::getConnection();

            $sql =  "SELECT * FROM Classificacao";
            $sql= $conn->prepare($sql);
            $sql->execute();
                $resultado = array();
                    while($row= $sql->fetchobject('Classificacao'))
                    {
                        $resultado[]=$row;
                    }
                        if(!$resultado){
                            throw new Exception("Arquivo não encontrado!");
                            
                        }
                    return $resultado;

                
        }

    }
