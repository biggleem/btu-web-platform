<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel Login page</title>
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <link rel="stylesheet" href="../../assets/styles/responsive.css">
</head>
<body class="admin_panel_login">
    <div class="admin_panel_login_page_cont">
        <img src="../../assets/images/logo.png" alt="">
        <div class="aplpc_title">Admin Panel</div>
        <label for="" class="aplpc_label_title">Username</label>
        <div class="aplpc_input">
            <img src="../../assets/images/userimage.png" alt="">
            <input type="text"  placeholder="Enter your username">
        </div>
        <label for="" class="aplpc_label_title">Password</label>
        <div class="aplpc_input">
            <img src="../../assets/images/key.png" alt="">
            <input type="text"   placeholder="Enter your account password">
        </div>
        <a class="aplpc_button" href="AdminDashboard.blade.php">Log in</a>
        <a href="AdminPanelLoginResetPass.blade.php" class="aplpc_resetpass">Reset Password</a>
    </div>
</body>
</html>
