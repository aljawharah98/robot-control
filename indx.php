<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .controller {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 10px;
        }
        .controller button {
            width: 100px;
            height: 100px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Robot Controller</h1>
    <div class="controller">
        <div></div>
        <button onclick="sendCommand('forward')">Forward</button>
        <div></div>
        <button onclick="sendCommand('left')">Left</button>
        <button onclick="sendCommand('stop')">Stop</button>
        <button onclick="sendCommand('right')">Right</button>
        <div></div>
        <button onclick="sendCommand('backward')">Backward</button>
        <div></div>
    </div>
   
    <script>
        function sendCommand(command) {
            fetch(`/robot.php?command=${command}`, {
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
