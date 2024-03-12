<?php include "db.inc.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<title>Login and Sign up</title>
<style>
body {
font-family: 'Josefin Sans', sans-serif;
margin: 0;
padding: 0;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
background-color: #f4f4f4;
}
.container {
width: 500px;
padding: 20px;
background-color: #fff;
border: 1px solid #ccc;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.form-container {
display: flex;
flex-direction: column;
}
button {
background-color: #4caf50;
color: #fff;
padding: 10px 15px;
border: none;
border-radius: 4px;
cursor: pointer;
margin-top: 10px;
}
#signupForm {
display: none;
}
input {
margin: 5px;
height: 40px;
font-size: 20px;
border-style: solid;
border-radius: 5px;
border: 1px solid lightgray;
}
.small-text {
text-align: center;
margin-top: 15px;
font-size: 14px;
color: #555;
}
h1 {
text-align: center;
}
</style>
</head>
<body>
<div class="container">
<div class="form-container" id="loginForm">
<h1 >Login</h1>
<input type="text" placeholder="Username or Email">
<input type="password" placeholder="Password">
<button id="loginBtn">Login</button>
<p class="small-text">Don't have an account? click Sign up !</p>
<button id="showSignupBtn" style="background-color: lightgray; color: black">Sign Up</button>
</div>
<div class="form-container" id="signupForm">
<h2>Sign Up</h2>
<input type="text" placeholder="Full Name">
<input type="text" placeholder="Username">
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">
<button id="signupBtn">Sign Up</button>
<p class="small-text">Already have an account? click Login !</p>
<button id="showLoginBtn" style="background-color: lightgray; color: black">Login</button>
</div>
</div>
<script>
const loginForm = document.getElementById('loginForm');
const signupForm = document.getElementById('signupForm');
const showSignupBtn = document.getElementById('showSignupBtn');
const showLoginBtn = document.getElementById('showLoginBtn');
showSignupBtn.addEventListener('click', () => {
loginForm.style.display = 'none';
signupForm.style.display = 'flex';
});
showLoginBtn.addEventListener('click', () => {
loginForm.style.display = 'flex';
signupForm.style.display = 'none';
});
</script>
</body>
</html>