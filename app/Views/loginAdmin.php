<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Admin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Poppins:wght@200;400;600&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
        <?php endif; ?>
        <div class="form-box">
            <form class="form" action="<?php echo base_url()?>loginAdmin" method="post">
                <span class="title">Log In as Admin</span>
                <span class="subtitle"></span>
                <div class="form-container">
                    <input type="email" class="input" placeholder="Email" name="email">
                    <input type="password" class="input" placeholder="Password" name="password">
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="form-section">

            </div>
        </div>
    </div>
</body>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container-fluid {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: #f1f7fe;
    height: 100vh;
    width: 100%;
}

.form-box {
    max-width: 300px;
    background: #f1f7fe;
    box-shadow: 10px 10px 20px #cdd2d8,
        -10px -10px 20px #ffffff;
    overflow: hidden;
    border-radius: 16px;
    color: #010101;
}

.form {
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 32px 24px 24px;
    gap: 16px;
    text-align: center;
}

/*Form text*/
.title {
    font-weight: bold;
    font-size: 1.6rem;
}

.subtitle {
    font-size: 1rem;
    color: #666;
    visibility: hidden;
}

/*Inputs box*/
.form-container {
    overflow: hidden;
    border-radius: 8px;
    background-color: #fff;
    margin: 1rem 0 .5rem;
    width: 100%;
}

.input {
    background: none;
    border: 0;
    outline: 0;
    height: 40px;
    width: 100%;
    border-bottom: 1px solid #eee;
    font-size: .9rem;
    padding: 8px 15px;
}

.form-section {
    padding: 16px;
    font-size: .85rem;
    background-color: #e0ecfb;
    box-shadow: rgb(0 0 0 / 8%) 0 -1px;
}

.form-section a {
    font-weight: bold;
    color: #0066ff;
    transition: color .3s ease;
}

.form-section a:hover {
    color: #005ce6;
    text-decoration: underline;
}

/*Button*/
.form button {
    background-color: #0066ff;
    color: #fff;
    border: 0;
    border-radius: 24px;
    padding: 10px 16px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color .3s ease;
}

.form button:hover {
    background-color: #005ce6;
}
</style>

</html>