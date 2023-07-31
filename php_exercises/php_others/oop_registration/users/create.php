<?php
/**View */
    $controller = new UsersController();

    if(isset($_POST))
    {
        $redirect = $controller->register($_POST);
        header($redirect);
    }
    else
    {
        $user = $controller->register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="./create.php" method="POST">
    <input name="username" type="text" value="<?= $user->get_username() ?>">
            <input name="email" type="text" value="<?= $user->get_username() ?>">
            <input name="password" type="password" value="<?= $user->get_username() ?>">
            <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php } ?>