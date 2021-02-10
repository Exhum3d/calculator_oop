<?php

$result = array_key_exists("result", $_GET) ? $_GET['result'] : "";
$num1 = array_key_exists("num1", $_GET) ? $_GET['num1'] : "";
$num2 = array_key_exists("num2", $_GET) ? $_GET['num2'] : "";
$cal = array_key_exists("cal", $_GET) ? $_GET['cal'] : "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Calculator</title>

</head>

<body>
    <div style="display:flex;justify-content:center;margin-top:50px;">

        <div class="card" style="width:400px;">
            <div class="card-title mx-auto" style="margin-top:15px;">
                <h3>Basic Calculator</h3>
            </div>
            <form action="calc.php" method="Post" class="card-body">
                <div class="form-group mb-3">
                    <input type="text" name="num1" class="form-control" placeholder="Insert 1st number"
                        value="<?php echo $num1 ?>">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="num2" placeholder="Insert 2nd number"
                        value="<?php echo $num2 ?>">
                </div>
                <div class="form-group mb-3">
                    <select name="cal" class="form-control form-select">
                        <option <?php echo $cal === "add" ? "selected" : ""?> value="add">Add</option>
                        <option <?php echo $cal === "sub" ? "selected" : ""?> value="sub">Subtract</option>
                        <option <?php echo $cal === "mul" ? "selected" : ""?> value="mul">Multiply</option>
                        <option <?php echo $cal === "div" ? "selected" : ""?> value="div">Division</option>
                    </select>
                </div>

                <button class="btn btn-danger btn-lg" style="width:100%" type="submit">Calculate</button>
                <div class="form-group">

                    <h5 class="card-title" style="text-align:center;margin-top:20px;">Your result is:
                        <?php echo $result?> </h5>
                </div>
            </form>
        </div>
    </div>
</body>

</html>