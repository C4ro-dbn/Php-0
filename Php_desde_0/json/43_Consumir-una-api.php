<?php 
    $url = 'https://api.dailymotion.com/videos?channel=music&limit=10';

    $options = array("ssl" => array("verify_peer" => false,"verify_peer_name" => false));
    // con la funcion declarada, la desactivamos
    $result = file_get_contents($url, false, stream_context_create($options));

    $objResult = json_decode($result);

    // print_r($objResult);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <?php foreach ($objResult->list as $video) { ?>
    <ul>
        <li><?php echo ($video->title); ?> || <?php echo ($video->channel); ?></li>
    </ul>
    <?php } ?>
</body>
</html> 