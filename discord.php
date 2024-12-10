<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discord</title>
</head>
<body>

    <?php 

    ob_start();

    $dcinvContent = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bothPull/dclink.txt');

    ?>

    <script>
        
        location.href = "<?php echo $dcinvContent; ?>";

    </script>   

</body>
</html>