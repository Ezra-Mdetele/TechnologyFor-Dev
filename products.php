<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Electronic Components</h1>
        <div class="row">
            <?php
            $products = [
                ["ESP32", "esp32.jpg", "Powerful microcontroller with Wi-Fi & Bluetooth", "$8"],
                ["Arduino Uno", "arduino.jpg", "Popular development board for beginners", "$10"],
                ["Capacitor Kit", "capacitor.jpg", "Assorted capacitors for prototyping", "$5"],
                ["RFID Module", "rfid.jpg", "Read/write RFID tags", "$6"]
            ];
            foreach ($products as $p) {
                echo "<div class='col-md-3'>
                        <div class='card mb-4'>
                            <img src='images/{$p[1]}' class='card-img-top'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$p[0]}</h5>
                                <p class='card-text'>{$p[2]}</p>
                                <p class='text-primary fw-bold'>{$p[3]}</p>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
