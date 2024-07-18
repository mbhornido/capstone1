<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }     
    </style>
</head>
<body>
<?php include './components/w1_header.php'?>

<div class="view_container">
    <div class="view_left">
        <div class="my_p1">
            <a href="view_profile.php"><i class="fa-solid fa-arrow-left"></i></a>
            <h1>My Profile</h1>
        </div>
        <img src="test.jpg" class="preview_avatar" alt="">
        <p>mark hornido</p>
    </div>
    <div class="view_right">
        <form method="" action="">
            <div class="avatar-section">
                <label for="avatar">Avatar</label>
                <div class="avatar-wrapper">
                    <input type="file" id="avatar" accept="image/*">
                </div>
            </div>
            <div class="input-group">
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="button3" type="submit">Save Changes</button>
        </form>
    </div>
</div>

    <?php include './components/m1_footer.php'?>


<script>
    document.getElementById('avatar').addEventListener('change', function(event) {
        const previewAvatar = document.querySelector('.preview_avatar');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewAvatar.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>
