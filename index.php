<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حاسبة BMI</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="container">
        <h2>حاسبة مؤشر كتلة الجسم (BMI)</h2>
        <form id="bmiForm" method="post">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>

            <label for="weight">الوزن (كجم):</label>
            <input type="number" id="weight" name="weight" required>

            <label for="height">الطول (متر):</label>
            <input type="number" id="height" name="height" step="0.01" required>

            <button type="submit">حساب BMI</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $weight = $_POST["weight"];
                $height = $_POST["height"];

                if (!empty($name) && is_numeric($weight) && is_numeric($height) && $height > 0) {
                    $bmi = $weight / ($height * $height);
                    echo "<p>مرحبًا $name، مؤشر كتلة جسمك هو: " . round($bmi, 2) . "</p>";
                } else {
                    echo "<p>يرجى إدخال بيانات صحيحة!</p>";
                }
            }
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>