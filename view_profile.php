<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curved Border Background</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
    <style>
        .view_body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }  
        @media (max-width: 768px) {
            .view_body{
                display: none;
            }
        }
       

    </style>
</head> 
<body>

    <?php include './components/w1_header.php'?>
    <?php include './components/m1_header.php'?>



    <!-- mobile view -->

<div class="wala">
    <br><br><br>
</div>  
<div class="view_body  pc_view1">
    <div class="view_container">
        <div class="view_left">
            <div class="my_p1">
                <a href="profile.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h1>My Profile</h1>
            </div>
            <img src="test.jpg" class="preview_avatar" alt="">
            <p>mark hornido</p>
        </div>
        <div class="view_right">
            <div class="view-container" >
                
                <div class="view_s">
                    <div>
                        <a href="">ID</a>
                    </div>
                    <div class="s_time">
                        <p>850011</p>
                    </div>        
                </div>
                <div class="view_s">
                    <div>
                        <a href="">Nickname</a>
                    </div>
                    <div class="s_time">
                        <p>Jane11</p>
                    </div>        
                </div>
                <div class="view_s">
                    <div>
                        <a href=""> Email:</a>
                    </div>
                    <div class="s_time">
                        <p>Jane.sandara@gmail.com</p>
                    </div>            
                </div>
                <div class="view_s">
                    <div>
                        <a href=""> Password:</a>
                    </div>
                    <div class="s_time">
                        <p>*********</p>
                    </div>            
                </div>
                <div class="view_s">    
                    <div>
                        <a href=""> Edit Profile</a>
                    </div>
                    <div class="s_time">
                        <a href="settings.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>            
                </div>
                <div class="view_s">    
                    <div>
                        <a href=""> Logout</a>
                    </div>
                    <div class="s_time">
                        <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wala">
    <div class="grid-container" >
        <div class="grid_s">
            <div>
                <a href="">My Avatar</a>
            </div>
            <div class="s_time">
                <img class="view_image" src="test.jpg" alt="">
                <a href="settings.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
        </div>
        <div class="grid_s">
            <div>
                <a href="">ID</a>
            </div>
            <div class="s_time" style="margin-right: 1.8rem;">
                <p>850011</p>
            </div>        
        </div>
        <div class="grid_s">
            <div>
                <a href="">Nickname</a>
            </div>
            <div class="s_time">
                <p>Jane11</p>
                <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>        </div>
        <div class="grid_s">
            <div>
                <a href=""> Email:</a>
            </div>
            <div class="s_time">
                <p>Jane.sandara@gmail.com</p>
                <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>            
        </div>
        <div class="grid_s">
            <div>
                <a href=""> Password:</a>
            </div>
            <div class="s_time">
                <p>*********</p>
                <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>            
        </div>
        <div class="grid_s">
            <div>
                <a href=""> Logout</a>
            </div>
            <div class="s_time">
                <a href="view_profile.php"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>            
        </div>
    </div>
</div>
    <?php include './components/m1_footer.php'?>

</body>
</html>
