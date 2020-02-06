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
        <h1>Future Value Calculator</h1>
        <input type="number" name="InventmentAmount" size="10px" placeholder="Inventment Amount" />
        <input type="number" name="YearlyInterestRate" size="10px" placeholder="Yearly Interest Rate" />
        <input type="number" name="NumberofYears" size="10px" placeholder="Number of Years" />
        <input type="submit" value="Calculate " />
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $InventmentAmount = $_POST["InventmentAmount"];
        $YearlyInterestRate = $_POST["YearlyInterestRate"];
        $NumberofYears = $_POST["NumberofYears"];
        if ($InventmentAmount < 0 || $YearlyInterestRate < 0 || $NumberofYears < 0) {
            echo "sai";
        } else {
            $a = $InventmentAmount * ((1 + $YearlyInterestRate / 100) ** $NumberofYears);
            echo $a;
        }
    }
    ?>
</body>

</html>