<?php
session_start();

if(!isset($_SESSION['user_id'])){
header("Location: login.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width,initial-scale=1.0">

<title>DeccanScout Recruiter Copilot</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Inter,sans-serif;
}

body{
background:
radial-gradient(circle at top right,#1d4ed8 0,#020617 45%),
#020617;
color:white;
overflow:hidden;
}

body:before{
content:"";
position:fixed;
width:500px;
height:500px;
border-radius:50%;
background:#2563eb;
filter:blur(170px);
opacity:.18;
top:-140px;
right:-90px;
}

body:after{
content:"";
position:fixed;
width:420px;
height:420px;
border-radius:50%;
background:#06b6d4;
filter:blur(170px);
opacity:.12;
left:-100px;
bottom:-100px;
}

.topbar{
height:90px;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 50px;
background:rgba(15,23,42,.75);
backdrop-filter:blur(20px);
border-bottom:1px solid rgba(255,255,255,.06);
position:relative;
z-index:10;
}

.brand{
display:flex;
align-items:center;
gap:15px;
}

.logo{
height:52px;
width:52px;
border-radius:18px;
display:flex;
align-items:center;
justify-content:center;
font-weight:900;
font-size:22px;
background:
linear-gradient(
135deg,
#2563eb,
#60a5fa
);
}

.brand h2{
font-size:28px;
font-weight:800;
}

.badge{
padding:12px 18px;
border-radius:30px;
background:rgba(59,130,246,.12);
border:1px solid rgba(96,165,250,.25);
color:#93c5fd;
font-weight:600;
}

.logout{
background:#ef4444;
color:white;
text-decoration:none;
padding:14px 22px;
border-radius:14px;
font-weight:700;
}

.main{
padding:35px;
height:calc(100vh - 90px);
}

.agent-shell{
height:100%;
background:#111827;
border-radius:34px;
overflow:hidden;
box-shadow:
0 35px 70px rgba(0,0,0,.45);
border:1px solid rgba(255,255,255,.04);
}

.agent-head{
display:flex;
justify-content:space-between;
align-items:center;
padding:28px 35px;
background:#0f172a;
border-bottom:1px solid #1e293b;
}

.agent-head h3{
font-size:32px;
font-weight:900;
}

.agent-head p{
color:#94a3b8;
margin-top:8px;
}

.live{
padding:12px 18px;
border-radius:30px;
background:#052e16;
color:#86efac;
font-weight:700;
}

iframe{
width:100%;
height:calc(100% - 100px);
border:none;
background:white;
}

@media(max-width:900px){

.topbar{
padding:20px;
height:auto;
flex-wrap:wrap;
gap:20px;
}

.brand h2{
font-size:22px;
}

.main{
padding:15px;
}

.agent-head{
padding:20px;
}

.agent-head h3{
font-size:24px;
}

}

</style>

</head>
<body>


<div class="topbar">

<div class="brand">
<div class="logo">
DS
</div>

<div>
<h2>DeccanScout Recruiter OS</h2>
<div class="badge">
Live Multi-Agent Talent Copilot
</div>
</div>

</div>

<a href="logout.php" class="logout">
Logout
</a>

</div>



<div class="main">

<div class="agent-shell">

<div class="agent-head">

<div>
<h3>AI Talent Sourcing Agent</h3>
<p>
Search live candidate profiles, rank matches and simulate recruiter decisions
</p>
</div>

<div class="live">
● LIVE AGENT ACTIVE
</div>

</div>


<iframe
src="https://94095c47-442d-40e7-9ebe-5c4a2ed5636f-00-u0vn1uz7lnre.spock.replit.dev:5000/"
allow="clipboard-read; clipboard-write"
loading="lazy">
</iframe>


</div>

</div>

</body>
</html>