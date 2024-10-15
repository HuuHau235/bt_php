<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            border: 3px solid red;
            background: #ccc;
            width: 50%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            font-size: 30px;
            text-align: center;
            color: blue;
        }

        .nhap1, .nhap2 {
            display: grid;
            grid-template-columns: 20% 60%;
            column-gap: 2%;
            margin-bottom: 10px;
            padding: 5px;
        }

        label {
            font-size: 20px;
            padding: 10px;
        }

        .nhap-button {
            text-align: center;
            margin-top: 10px;
        }

        button {
            margin-right: 30px;
            background-color: white;
            border: 2px solid black;
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .text {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>BANG DIEM CUA EM</h3>
        <form method="POST">
            <div class="nhap1">
                <label for="se1">Semester 1:</label>
                <input type="number" name="se1" id="se1" placeholder="Nhập điểm học kỳ 1" required>
            </div>
            <div class="nhap1">
                <label for="se2">Semester 2:</label>
                <input type="number" name="se2" id="se2" placeholder="Nhập điểm học kỳ 2" required>
            </div>
            <div class="nhap2">
                <label for="year">Year:</label>
                <select name="year" id="year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <div class="nhap1">
                <label for="result">Sum:</label>
                <input type="text" id="result" value="<?php echo isset($summary) ? $summary : ''; ?>" readonly>
            </div>
            <div class="nhap-button">
                <button type="submit" name="submit">Ok</button>
                <button type="reset" onclick="window.location.href='';">Cancel</button>
            </div>
        </form>
        <div class="text" id="classification">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $se1 = isset($_POST['se1']) ? (float) $_POST['se1'] : 0;
                $se2 = isset($_POST['se2']) ? (float) $_POST['se2'] : 0;
                $year = isset($_POST['year']) ? (int) $_POST['year'] : 1;
                if ($year == 1) {
                    $summary = ($se1 + ($se2 * 3)) / 3;
                } else {
                    $summary = ($se1 + ($se2 * 3)) / 4;
                }

                echo "<script>document.getElementById('result').value = '$summary';</script>";

                if ($summary >= 9) {
                    echo "<span style='color:red'>Woww Học sinh giỏi</span>";
                } elseif ($summary >= 7) {
                    echo "<span style='color:orange'>Ồ Học sinh khá</span>";
                } elseif ($summary >= 5) {
                    echo "<span style='color:green'>Êyyyyy Học sinh trung bình</span>";
                } else {
                    echo "<span style='color:blue'>Ưiiii Học sinh yếu ròi</span>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
