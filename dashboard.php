<?php
session_start();

if(!isset($_SESSION["user_id"])){
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

<title>DeccanScout Recruiter OS</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Inter,sans-serif;
}

body{
background:
linear-gradient(
180deg,
#020617,
#0f172a
);
color:white;
overflow-x:hidden;
}

/* SIDEBAR */

.sidebar{
position:fixed;
left:0;
top:0;
width:280px;
height:100vh;
background:#0f172a;
border-right:1px solid rgba(255,255,255,.06);
padding:30px;
z-index:100;
}

.brand{
display:flex;
align-items:center;
gap:15px;
margin-bottom:50px;
}

.logo{
height:54px;
width:54px;
border-radius:18px;
display:flex;
align-items:center;
justify-content:center;
background:
linear-gradient(
135deg,
#2563eb,
#60a5fa
);
font-size:22px;
font-weight:900;
}

.brand h2{
font-size:28px;
font-weight:800;
}

.menu{
display:flex;
flex-direction:column;
gap:18px;
}

.menu a{
text-decoration:none;
color:#cbd5e1;
padding:18px 20px;
border-radius:16px;
background:#111827;
font-weight:600;
display:block;
transition:.3s;
}

.menu a:hover{
background:#1e293b;
transform:translateX(4px);
}

.logout{
background:#dc2626!important;
margin-top:35px;
}

/* MAIN */

.main{
margin-left:280px;
padding:45px;
}

/* TOP */

.topbar{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:40px;
}

.topbar h1{
font-size:52px;
font-weight:900;
}

.topbar span{
color:#60a5fa;
}

/* STATS */

.stats{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
margin-bottom:35px;
}

.stat{
background:#111827;
padding:30px;
border-radius:28px;
box-shadow:
0 15px 40px rgba(0,0,0,.22);
}

.stat h2{
font-size:44px;
color:#60a5fa;
margin-bottom:10px;
}

.stat p{
color:#94a3b8;
}

/* MAIN PANELS */

.agent-grid{
display:grid;
grid-template-columns:2fr 1fr;
gap:28px;
margin-bottom:35px;
}

.panel{
background:#111827;
border-radius:32px;
padding:30px;
box-shadow:
0 10px 30px rgba(0,0,0,.2);
}

.panel h3{
font-size:30px;
margin-bottom:25px;
}

/* EMBED */

iframe{
width:100%;
height:900px;
border:none;
border-radius:24px;
background:white;
}

/* CANDIDATES */

.candidate{
background:#0f172a;
padding:24px;
border-radius:20px;
margin-bottom:20px;
border:1px solid rgba(255,255,255,.04);
}

.candidate h4{
font-size:22px;
margin-bottom:8px;
}

.badge{
display:inline-block;
margin-top:12px;
background:#2563eb;
padding:8px 14px;
border-radius:12px;
font-size:14px;
}

/* PIPELINE */

.pipeline{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
margin-bottom:35px;
}

.pipe{
background:#111827;
padding:30px;
border-radius:26px;
}

.pipe h2{
font-size:42px;
color:#60a5fa;
margin-bottom:8px;
}

/* ACTIVITY */

.activity{
background:#111827;
padding:35px;
border-radius:30px;
}

.activity h2{
margin-bottom:25px;
}

.item{
padding:18px 0;
border-bottom:1px solid rgba(255,255,255,.06);
color:#cbd5e1;
}

/* MOBILE */

@media(max-width:1200px){

.stats{
grid-template-columns:repeat(2,1fr);
}

.agent-grid{
grid-template-columns:1fr;
}

}

@media(max-width:900px){

.sidebar{
position:relative;
width:100%;
height:auto;
}

.main{
margin-left:0;
padding:25px;
}

.stats{
grid-template-columns:1fr;
}

.pipeline{
grid-template-columns:1fr;
}

.topbar h1{
font-size:38px;
}

}

</style>
</head>
<body>


<div class="sidebar">

<div class="brand">
<div class="logo">
DS
</div>
<h2>DeccanScout</h2>
</div>


<div class="menu">
<a href="#">Dashboard</a>
<a href="#">Live Talent Agent</a>
<a href="#">Shortlisted Candidates</a>
<a href="#">Interview Scheduler</a>
<a href="#">Recruiter Copilot</a>

<a href="logout.php" class="logout">
Logout
</a>
</div>

</div>



<div class="main">

<div class="topbar">
<h1>
Welcome Back,
<span>Recruiter</span>
</h1>
</div>



<div class="stats">

<div class="stat">
<h2>248</h2>
<p>Candidates Sourced</p>
</div>

<div class="stat">
<h2>91%</h2>
<p>Match Accuracy</p>
</div>

<div class="stat">
<h2>37</h2>
<p>Interviews Scheduled</p>
</div>

<div class="stat">
<h2>84</h2>
<p>Interest Score</p>
</div>

</div>




<div class="agent-grid">

<div class="panel">

<h3>
Live Talent Sourcing Agent
</h3>

<iframe
src="https://94095c47-442d-40e7-9ebe-5c4a2ed5636f-00-u0vn1uz7lnre.spock.replit.dev:5000/">
</iframe>

</div>



<div class="panel">

<h3>
Top Ranked Candidates
</h3>

<div class="candidate">
<h4>Rahul Verma</h4>
SAP SD Consultant
<br>
<span class="badge">
#1 Match 91
</span>
</div>


<div class="candidate">
<h4>Priya Sharma</h4>
S/4HANA Analyst
<br>
<span class="badge">
#2 Match 88
</span>
</div>


<div class="candidate">
<h4>Amit Reddy</h4>
SAP Functional
<br>
<span class="badge">
Interest 84
</span>
</div>

</div>

</div>




<div class="pipeline">

<div class="pipe">
<h2>14</h2>
Shortlisted Profiles
</div>

<div class="pipe">
<h2>8</h2>
Active Outreach
</div>

<div class="pipe">
<h2>5</h2>
Pending Interviews
</div>

</div>




<div class="activity">

<h2>
Recent Agent Activity
</h2>

<div class="item">
JD parsed for Software Engineer role
</div>

<div class="item">
12 Hyderabad profiles sourced
</div>

<div class="item">
Interest agent ranked candidates
</div>

<div class="item">
2 interview recommendations generated
</div>

<div class="item">
Recruiter Copilot suggested top shortlist
</div>

</div>


</div>

</body>
</html>