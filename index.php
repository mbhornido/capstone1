<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Background</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        font-family: Arial, sans-serif;
    }
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="background.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <h1><i class="fa-brands fa-whatsapp"></i>TalknFlirt</h1>
            <div class="buttons">
                <a href="discover.php">
                    <button class="button1">Get Started</button>
                </a>
                <p class="wala">or</p>
                <a href="profile.php">
                    <button class="button2 wala">Sign In</button>
                </a>
            </div>
            <p><i class="fa-regular fa-circle-check"></i> Agree to <a href="" class="a_des">User Mangement</a> and <a href=""  class="a_des">Privacy Policy</a></p>

        </div>
    </div>
</body>
</html>
