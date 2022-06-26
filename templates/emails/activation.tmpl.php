<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation Email</title>
</head>
<body>
    <h1>Account activation</h1>
    <p>Please click the link bellow to access our website</p>
    <a href="<?= WEBSITE_URL.'/activation.php?p='.$pseudo.'&amp;token='.$token ?>">Activation Link</a> 
</body>
</html>