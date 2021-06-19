<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/profile.css');?>">
    <style>
      .user-login{
          background:url('https://hdwallpapers.move.pk/wp-content/uploads/2015/02/rice-food.jpg') no-repeat;
          background-size: 100%;
          display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .user-login-form{
        width: 1000px;
        outline: 10px solid #fad958;
        display: flex;
        padding:20px;
        border: 1px solid #f8cd21;
        }
        .user-login .login{
        color:#000;
        background-color:#f8cd21;
        width:500px;
        }
        .user-login .login-form{
            width: 100%;
            background-color:#fff;
        }
        .form-control{
            border-radius:5px;
            height:40px;
        }
        </style>
</head>

<body class="user-login">
    <div class="user-login-form">
        <div class="login p-5 text-center">
        <h3 class="font-weight-bold ">Login To Your Account</h3>
        <p class="text-white mt-5">" One cannot think well, love well, sleep well, if one has not dined well. "</p>
    </div>
        <form action="<?php echo base_url().'login/authenticate' ;?>" name="loginform" id="loginform" method="POST" class="p-5 login-form">
        <?php
        if (!empty($this->session->flashdata('success'))) {
          echo "<div class='alert alert-success m-3 mx-auto'>".$this->session->flashdata('success')."</div>";
        }
        ?>
        <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger m-3 mx-auto'>".$this->session->flashdata('msg')."</div>";
        }
        ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control bg-light" name="username" id="username"
                    placeholder="Username">
                <span></span>
            </div>
            <?php echo form_error('username'); ?>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control bg-light" name="password" id="password"
                    placeholder="Password">
                <span></span>
            </div>
            <?php echo form_error('password'); ?>
            <div class="d-flex justify-content-between aliign-items-center mt-4 pt-4">
                <a href="<?php echo base_url().'singup/index' ?>" class="btn">Register</a>
                <button type="submit" class="btn btn-primary px-5 ml-3">Login</button>
            </div>
        </form>
    </div>
    <script>
    const form = document.getElementById('loginform');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const sendData = (sRate, count) => {
        if(sRate === count) {
            event.currentTarget.submit();
        }
    }

    const successMsg = (usernameVal) => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1; 
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control bg-light success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const usernameVal = username.value.trim();
        const passwordVal = password.value.trim();

        if (usernameVal === "") {
            setErrorMsg(username, 'username can be blank');
        } else {
            setSuccessMsg(username);
        }

        if (passwordVal === "") {
            setErrorMsg(password, 'password can not be blank');
        } else {
            setSuccessMsg(password);
        }

        successMsg();
    }

    function setErrorMsg(ele, msg) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = msg;
        formInput.className = "form-control bg-light is-invalid";
        span.className = "invalid-feedback font-weight-bold";
    }

    function setSuccessMsg(ele) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        formInput.className = "form-control bg-light success";
    }
    </script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>