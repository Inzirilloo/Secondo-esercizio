<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <label for="nome">First name:</label>
  <input type="text" id="nome" name="nome"><br><br>

</form> 

<?php
$nomeErr ="";

function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
          $nomeErr = "Name is required";
        } else {
          $nome = test_input($_POST["nome"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $nomeErr = "Only letters and white space allowed";
          }
        }
        
      }
echo "My first PHP script!";
?>

</body>
</html>