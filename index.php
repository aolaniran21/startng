<?php
if (isset($_POST['submit'])) {
    # code...
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['message'];

    $textfile = "$first $last.txt";
    file_put_contents($textfile, "Firstname : " . $first . " Lastname : " . $last . " Phone Number : " . $number . " Email : " . $email . " Message : " . $msg . "\r\n", FILE_APPEND);
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="first" placeholder="firstname"><br><br>
        <input type="text" name="last" placeholder="lastname"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="number" placeholder="phone number"><br><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br><br><br><br>

        <button type="submit" name="submit">Contact</button>
    </form>
</body>

</html>