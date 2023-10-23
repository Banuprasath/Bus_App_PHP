<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vali Kaatum Tholan</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BP Creations</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view.php">Bus</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="landing-page">
        <div class="background-image"></div>
        <div class="centered-content">
            <h1 class='my-text'>Vali Kaatum Tholan</h1>
            <p>Efficient, eco-friendly, and affordable transportation solutions for everyone.</p>
            <a href='view.php'><button type="button" class="btn btn-dark">Check your Buses</button></a>
        </div>
    </div>
<br>
<br>
<div><center><h3>"Find the Right Bus at Right Time✨"</h3></center></div>
<br>
<br>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Helper</title>
</head>
<body>
    <div class="road">
        <div class="bus"></div>
    </div>
</body>
</html>

<style>

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


<style>
    .my-text {
    text-shadow: 2px 2px 4px #454545;
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.landing-page {
    position: relative;
    width: 100vw;
    height: 100vh;
    background-color: #000;
    background-image: url('images/land2.jpg');
    background-size: cover;
    background-position: center;
}

.background-image {
    background-image: url('images/land2.jpg');
    filter: blur(8px);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}

.centered-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

h1 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
    color: black;
}

p {
    color: #000;
    font-size: 18px;
}

.quotes-section {
    text-align: center;
    background-color: #fff;
    padding: 20px;
}

.quotes-section .quote {
    font-size: 20px;
    margin: 20px 0;
}

.working-manual {
    text-align: center;
    background-color: #f0f0f0;
    padding: 20px;
    font-size: 18px;
}

.working-manual ol {
    text-align: left;
    margin-left: 30px;
}

.working-manual p {
    font-size: 20px;
}
</style>
