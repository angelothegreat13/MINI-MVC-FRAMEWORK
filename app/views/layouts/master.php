<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $this -> siteTitle();?></title>
<link href="<?php echo CSS;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo CSS;?>main.css" rel="stylesheet">

<?php echo $this -> content('head');?>

</head>
<body>
<?php include 'navbar.php';?>


<div class="container-fluid">
    <?php echo $this -> content('body');?>
</div>

<?php include 'footer.php';?>
<script src="<?php echo JS;?>jquery-3.2.1.min.js"></script>
<script src="<?php echo JS;?>bootstrap.min.js"></script>
<?php echo $this -> content('footer');?>
</body>
</html>