<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>SIMPLE CALCULATOR</h1>
        <h2>calculator</h2>
        so dau tien<input type="number" name="first" size="20px"><br><br>
        so thu hai <input type="number" name="second" size="20px"><br><br>
        <select name="select" id="">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select><br><br>
        <input type="submit" value="calculator">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first = $_POST["first"];
        $second = $_POST["second"];
        $select = $_POST["select"];
        if($first<0 || $second<0){
            echo "sai";
        }
        else {
            switch($select){
                case '+':
                    echo $first + $second;
                    break;
                case '-':
                    echo $first - $second;
                    break;
                case 'x':
                    echo $first * $second;
                    break;
                case '/';
                    echo $first / $second;
                    break;
            default:
                break;
            }
        }
    }
    ?>
</body>
</html>