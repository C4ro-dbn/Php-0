<?php 
    $txtDesc = "";

    if($_POST){
        $txtDesc = (isset($_POST['txtDesc']))?$_POST['txtDesc']:"";
    }

    print_r ($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valores input textarea</title>
</head>
<body>
    <strong><?php echo $txtDesc; ?></strong>
    <form action="38_Valores-textarea.php" method="post">
        <textarea name="txtDesc" id="" cols="30" rows="10"></textarea>
        <br> <input type="submit" value="Enviar">
    </form>
</body>
</html>