<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bus Animation</title>
</head>
<body>
    <div class="road">
        <div class="bus"></div>
    </div>
</body>
</html>

<style>
body {
    margin: 0;
    padding: 0;
    overflow: hidden;
   
}

.road {
    background: url('images/road1.png')center/contain repeat;
    height: 200px;
    position: relative;
    overflow: hidden;
}

.bus {
    width: 100px;
    height: 50px;
    position: absolute;
    bottom: 0;
    left: -100px; /* Initial position off the left side */
    animation: moveBus 10s linear infinite; /* Slower animation settings */
    background: url('images/bus.png') center/contain no-repeat; /* Bus image */
    border-radius: 10px; /* Rounded corners to make it look like a bus */
}

@keyframes moveBus {
    0% {
        left: -100px; /* Start position */
    }
    100% {
        left: 100%; /* End position */
    }
}



</style>