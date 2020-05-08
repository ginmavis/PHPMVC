<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
div {
    padding: 20px;
    
}
#header,#footer{background-color: yellow}
</style>
    <div id="header"></div>
<div id="content">

<?php require_once "./mvc/views/pages/".$data['Page'].".php" ?>
 
</div>




</body>
</html>