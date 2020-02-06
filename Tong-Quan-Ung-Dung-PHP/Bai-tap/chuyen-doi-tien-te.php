<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="money" placeholder="số tiền là : " > </br>
        <input type="submit" value="chek" name="submit">
        <select name="select" id="">
            <option value="USD"> USD->VNĐ</option>
            <option value="VND"> VNĐ->USD</option>
        </select><br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $money = $_POST['money'];
        $select = $_POST['select'];
        switch ($select) {
            case "VND":
                echo $money * 23000 . "là số tiền việt nam của tôi";
                break;
            case "USD":
                echo $money / 23000 . "là số tiền USD của tôi";
                break;
            default:
                break;
        }
    }

    ?>
</body>

</html>