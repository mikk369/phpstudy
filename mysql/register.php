<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php"  ?>

<body>
    <div class="container">
    <div class="login-wrapper">
        <form action="register.php" method="post" class="login-form">
            <?php registerUser();?>
            <h1>Register page</h1>
            <label for="username">Username</label>
            <input type="text" name="username" class="form-controll">
            <label for="username">Password</label>
            <input type="password" name="password" class="form-controll">
            <input class="btn-submit" type="submit" name="submit" value="Register">
        </form>
    </div>
    <?php include "includes/footer.php"  ?>
    </div>
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
 .login-wrapper{
    height: 100vh;

 }
.login-form{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.6rem;
    padding-top: 10rem;
}

.form-controll{
    padding: 0.9rem;
    border-radius: 0.9rem;
    border-color: #333 3px solid;
}

.btn-submit{
    padding: 0.6rem 0.9rem;
    border-radius: 0.9rem;
    background-color: #999;
    color: #fff;
}
.btn-submit:link,
.btn-submit:hover{
    background-color: #666;
}
.footer{
    background-color: #000;
    color: #fff;
    text-align: center;
    height: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>