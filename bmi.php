<?php
if (isset($_POST["submit"])) {
    $n = $_POST['number1'];
    $a = $_POST['number2'] / 100;
    
    $f = $n / ($a * $a);
    if ($f <= 18.4) {
        $resultMessage = "<span class='result underweight'>$f Underweight</span>";
    } elseif ($f >= 18.5 && $f <= 24.9) {
        $resultMessage = "<span class='result normal'>$f Normal</span>";
    } elseif ($f >= 25.0 && $f <= 39.9) {
        $resultMessage = "<span class='result overweight'>$f Overweight</span>";
    } elseif ($f >= 40.0) {
        $resultMessage = "<span class='result obese'>$f Obese</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5rem;
        }
        .underweight {
            color: #ff6347;
        }
        .normal {
            color: #4caf50;
        }
        .overweight {
            color: #ff9800;
        }
        .obese {
            color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Weight (kg)</label>
                <input type="number" class="form-control" name="number1" required>
            </div>

            <div class="form-group">
                <label>Height</label>
                <input type="number" class="form-control" name="number2" required>
                <select class="form-control mt-2" name="select">
                    <option value="cm">cm</option>
                    <option value="m">m</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Calculate BMI">
        </form>

        <?php if (isset($resultMessage)) echo $resultMessage; ?>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th colspan="2">BMI Categories</th>
                </tr>
                <tr>
                    <th>BMI</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><18.4</td>
                    <td>Underweight</td>
                </tr>
                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal</td>
                </tr>
                <tr>
                    <td>25.0 - 39.9</td>
                    <td>Overweight</td>
                </tr>
                <tr>
                    <td>>40.0</td>
                    <td>Obese</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
