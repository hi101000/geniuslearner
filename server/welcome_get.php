<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('users.db');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      INSERT INTO username (USERNEAME)
      VALUES ($_GET["username"]);

      INSERT INTO COMPANY (Password)
      VALUES ($_GET["password"]);
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>

</body>
</html>