<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Value </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Last Value </h1>
        <div id="last_Value"></div>
    </div>

    <script>
        fetch('last_value.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('last_Value').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
