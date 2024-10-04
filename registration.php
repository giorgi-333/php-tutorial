<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>რეგისტრაცია</title>
</head>
<body>
    <?php include("./header.php"); ?>
    <h1>გაიარეთ რეგისტრაცია</h1>
    <form method="post" action="form.php">
        <input type="text" name="gmail" placeholder="მეილი"> <br> <br>
        <input type="text" name="paswrod" placeholder="პაროლი"> <br> <br>
        <button type="submit">რეგისტრაცია</button>
        <button type="reset">გასუფთავება</button>
    </form>
</body>
</html>