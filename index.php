<?php
use App\Autoloader;
use \App\HTML\BootstrapForm;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-esquiv="X-UA-Comptatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<body>
<?php
require 'class/Autoloader.php';
Autoloader::register();
$form = new BootstrapForm($_POST);
?>

<form action="#" method="post">
    <?php
    echo $form->input(' <strong>username</strong>');
    echo $form->input(' <strong>password</strong>');
    echo $form->submit();
    ?>    
</form>
</body>
</html>
