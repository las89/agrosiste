
 <?php 
  abstract class Conexao
  {
    private static $conn;

    public static function getConnection()
    {
       if (self::$conn == null) 
       {
         self::$conn = new PDO('mysql: host=localhost; dbname=sagro;', 'root', '');
        }
    
    return self::$conn;
    }
  }
 ?>
