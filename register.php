<?php
include("includes/db_connect.php");

$error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=trim($_POST["name"]);
$email=trim($_POST["email"]);
$password=$_POST["password"];

$hashed=password_hash(
$password,
PASSWORD_DEFAULT
);

/* recruiters table now */
$check=$conn->prepare(
"SELECT id FROM recruiters WHERE email=?"
);

$check->bind_param(
"s",
$email
);

$check->execute();
$check->store_result();

if($check->num_rows>0){

$error="Recruiter email already exists";

}
else{

$stmt=$conn->prepare(
"INSERT INTO recruiters(name,email,password)
VALUES(?,?,?)"
);

$stmt->bind_param(
"sss",
$name,
$email,
$hashed
);

if($stmt->execute()){

header(
"Location: login.php?registered=1"
);

exit;

}
else{
$error="Registration failed";
}

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta
name="viewport"
content="width=device-width,initial-scale=1.0">

<title>Create Recruiter Account</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Inter,sans-serif;
}

body{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:
radial-gradient(circle at top right,#2563eb 0,#020617 45%),
#020617;
position:relative;
overflow:hidden;
}

body:before{
content:"";
position:absolute;
width:550px;
height:550px;
border-radius:50%;
background:#2563eb;
filter:blur(170px);
opacity:.18;
top:-150px;
right:-120px;
}

body:after{
content:"";
position:absolute;
width:450px;
height:450px;
border-radius:50%;
background:#06b6d4;
filter:blur(170px);
opacity:.15;
left:-120px;
bottom:-120px;
}

.container{
display:grid;
grid-template-columns:1.2fr 1fr;
width:1200px;
max-width:95%;
min-height:760px;
border-radius:38px;
overflow:hidden;
box-shadow:
0 45px 100px rgba(0,0,0,.55);
z-index:2;
position:relative;
}

.left{
background:
linear-gradient(
135deg,
#0f172a,
#111827
);
padding:90px 80px;
color:white;
display:flex;
flex-direction:column;
justify-content:center;
}

.logo{
display:flex;
align-items:center;
gap:14px;
margin-bottom:45px;
}

.logo-box{
width:54px;
height:54px;
border-radius:18px;
background:
linear-gradient(
135deg,
#3b82f6,
#60a5fa
);
display:flex;
align-items:center;
justify-content:center;
font-weight:900;
font-size:22px;
}

.logo h1{
font-size:30px;
font-weight:800;
}

.badge{
display:inline-block;
padding:12px 18px;
border-radius:50px;
background:rgba(59,130,246,.12);
border:1px solid rgba(96,165,250,.25);
color:#93c5fd;
font-weight:600;
margin-bottom:30px;
width:max-content;
}

.left h2{
font-size:60px;
font-weight:900;
line-height:1.05;
margin-bottom:25px;
}

.left h2 span{
background:
linear-gradient(
to right,
#60a5fa,
#93c5fd
);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

.left p{
font-size:20px;
line-height:1.8;
color:#94a3b8;
margin-bottom:40px;
}

.metrics{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.metric{
background:#111c34;
padding:28px;
border-radius:22px;
}

.metric h3{
font-size:38px;
color:#60a5fa;
margin-bottom:8px;
}

/* right */

.right{
background:#fff;
display:flex;
align-items:center;
justify-content:center;
padding:60px;
}

.formbox{
width:100%;
max-width:430px;
}

.formbox h3{
font-size:46px;
font-weight:900;
color:#0f172a;
margin-bottom:14px;
}

.formbox p{
color:#475569;
margin-bottom:30px;
}

.field{
margin-bottom:22px;
}

label{
display:block;
margin-bottom:10px;
font-weight:600;
}

input{
width:100%;
padding:17px 18px;
border-radius:16px;
border:1px solid #cbd5e1;
font-size:16px;
}

input:focus{
outline:none;
border-color:#2563eb;
}

button{
width:100%;
padding:18px;
border:none;
border-radius:16px;
background:
linear-gradient(
135deg,
#2563eb,
#60a5fa
);
color:white;
font-weight:800;
font-size:17px;
cursor:pointer;
}

.error{
margin-bottom:18px;
background:#fee2e2;
color:#991b1b;
padding:14px;
border-radius:12px;
text-align:center;
}

.loginlink{
margin-top:22px;
text-align:center;
}

.loginlink a{
text-decoration:none;
font-weight:700;
color:#2563eb;
}

@media(max-width:980px){

.container{
grid-template-columns:1fr;
}

.left{
padding:60px 35px;
}

.left h2{
font-size:46px;
}

.right{
padding:35px;
}

}

</style>
</head>
<body>

<div class="container">

<div class="left">

<div class="logo">
<div class="logo-box">
DS
</div>
<h1>DeccanScout</h1>
</div>

<div class="badge">
Recruiter Access Platform
</div>

<h2>
Build Your
<span>Recruiter Workspace</span>
</h2>

<p>
Create your recruiter account and access autonomous
talent sourcing, candidate ranking and interview automation.
</p>

<div class="metrics">

<div class="metric">
<h3>248</h3>
Candidates Sourced
</div>

<div class="metric">
<h3>91%</h3>
Match Accuracy
</div>

<div class="metric">
<h3>84</h3>
Interest Score
</div>

<div class="metric">
<h3>3.2x</h3>
Faster Hiring
</div>

</div>

</div>



<div class="right">

<div class="formbox">

<h3>Create Account</h3>

<p>
Set up your recruiter console
</p>

<?php if($error!=""){ ?>
<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>


<form method="POST">

<div class="field">
<label>Full Name</label>
<input
type="text"
name="name"
required>
</div>


<div class="field">
<label>Email</label>
<input
type="email"
name="email"
required>
</div>


<div class="field">
<label>Password</label>
<input
type="password"
name="password"
required>
</div>


<button type="submit">
Create Recruiter Account
</button>

</form>


<div class="loginlink">
Already have account?
<a href="login.php">
Sign In
</a>
</div>

</div>

</div>

</div>

</body>
</html>