<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curved Border Background</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include './components/w1_header.php'?>

    <div class="curved-background">
        <img src="test.jpg" alt="Profile Picture" class="profile_pic">
        <h3>Jane@email.com</h3>
    </div>

    <!-- Display this in grid 3 rows per column and make it mobile responsive 1 column per 1 row -->
    <div class="grid-container">
        <div class="grid_s">
            <div>
                <i class="fa-regular fa-gem"></i>
                <a href="">My Balance</a>
            </div>
            <div class="s_time">
                <i class="fa-regular fa-clock"></i>
                <p>20 mins</p>
                <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
        </div>
        <div class="grid_s">
            
            <div>
                <i class="fa-regular fa-user"></i>
                <a href="view_profile.php"> My Profile</a>
            </div>
            <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <div class="grid_s">
            <div>
                <i class="fa-solid fa-arrow-right-from-bracket"></i> 
                <a href=""> Logout</a>
            </div>
            <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
    </div>

    <?php include './components/m1_footer.php'?>

</body>
</html>
