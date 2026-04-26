<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width,initial-scale=1.0">

<title>DeccanScout — Autonomous Talent Intelligence</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Inter,sans-serif;
scroll-behavior:smooth;
}

body{
background:
radial-gradient(circle at top right,#1d4ed8 0,#020617 35%),
#020617;
color:white;
overflow-x:hidden;
}

nav{
position:fixed;
top:0;
width:100%;
padding:22px 70px;
display:flex;
justify-content:space-between;
align-items:center;
backdrop-filter:blur(18px);
background:rgba(2,6,23,.65);
border-bottom:1px solid rgba(255,255,255,.06);
z-index:999;
}

.logo{
display:flex;
align-items:center;
gap:14px;
font-size:24px;
font-weight:800;
}

.logo-box{
height:50px;
width:50px;
border-radius:16px;
display:flex;
align-items:center;
justify-content:center;
background:linear-gradient(
135deg,
#2563eb,
#60a5fa
);
font-weight:900;
}

nav ul{
display:flex;
gap:35px;
list-style:none;
}

.launch{
background:linear-gradient(
135deg,
#2563eb,
#60a5fa
);
padding:15px 28px;
border:none;
border-radius:14px;
color:white;
font-weight:800;
cursor:pointer;
}

.hero{
min-height:100vh;
display:flex;
align-items:center;
justify-content:space-between;
padding:150px 70px 90px;
flex-wrap:wrap;
}

.left{
max-width:700px;
}

.badge{
display:inline-block;
padding:12px 20px;
border-radius:40px;
background:rgba(37,99,235,.12);
border:1px solid rgba(96,165,250,.2);
color:#93c5fd;
margin-bottom:30px;
font-weight:600;
}

h1{
font-size:78px;
line-height:1.04;
font-weight:900;
margin-bottom:28px;
}

h1 span{
background:
linear-gradient(
to right,
#60a5fa,
#93c5fd
);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
}

.hero p{
font-size:22px;
line-height:1.8;
color:#cbd5e1;
margin-bottom:40px;
}

.actions{
display:flex;
gap:20px;
flex-wrap:wrap;
}

.primary{
padding:18px 34px;
border:none;
border-radius:16px;
background:
linear-gradient(
135deg,
#2563eb,
#60a5fa
);
font-size:18px;
font-weight:800;
color:white;
cursor:pointer;
}

.secondary{
padding:18px 34px;
border:1px solid #334155;
background:transparent;
border-radius:16px;
color:white;
}

.right{
max-width:600px;
}

.mock{
background:#111827;
padding:35px;
border-radius:30px;
box-shadow:
0 30px 70px rgba(0,0,0,.45);
}

.metrics{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:18px;
margin-top:25px;
}

.metric{
background:#0f172a;
padding:28px;
border-radius:20px;
}

.metric h2{
font-size:40px;
color:#60a5fa;
}

section{
padding:120px 70px;
}

.section-head{
text-align:center;
max-width:850px;
margin:auto auto 80px;
}

.section-head h2{
font-size:58px;
margin-bottom:20px;
}

.section-head p{
font-size:22px;
color:#94a3b8;
}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:30px;
}

.feature{
background:#111827;
padding:45px;
border-radius:30px;
}

.feature h3{
font-size:30px;
margin-bottom:16px;
}

.feature p{
line-height:1.8;
color:#94a3b8;
}

.cta{
max-width:1200px;
margin:70px auto;
background:
linear-gradient(
135deg,
#2563eb,
#1d4ed8
);
padding:90px 60px;
border-radius:40px;
text-align:center;
}

.cta h2{
font-size:56px;
margin-bottom:20px;
}

.cta p{
font-size:22px;
margin-bottom:30px;
}

#login-section,
#dashboard-section{
display:none;
width:95%;
max-width:1400px;
margin:70px auto;
background:#111827;
border-radius:30px;
overflow:hidden;
}

iframe{
width:100%;
height:950px;
border:none;
}

footer{
padding:50px;
text-align:center;
color:#64748b;
}

@media(max-width:950px){

nav{
padding:18px 30px;
}

nav ul{
display:none;
}

.hero{
padding:130px 30px 70px;
}

h1{
font-size:52px;
}

.section-head h2{
font-size:42px;
}

}

</style>
</head>
<body>

<nav>

<div class="logo">
<div class="logo-box">
DS
</div>
DeccanScout
</div>

<ul>
<li>Agents</li>
<li>Platform</li>
<li>Enterprise</li>
<li>Docs</li>
</ul>

<button
class="launch"
onclick="openLogin()">
Launch Platform
</button>

</nav>



<section class="hero">

<div class="left">

<div class="badge">
Autonomous Multi-Agent Recruiting Intelligence
</div>

<h1>
Hire with
<span>AI Agents</span>
Not Guesswork
</h1>

<p>
Discover, rank and engage top candidates through
live retrieval, scoring agents and recruiter copilot automation.
</p>

<div class="actions">

<button
class="primary"
onclick="openLogin()">
Launch Talent Agent
</button>

<button class="secondary">
View Architecture
</button>

</div>

</div>



<div class="right">

<div class="mock">

<h2 style="font-size:34px;">
Recruiter Copilot
</h2>

<div class="metrics">

<div class="metric">
<h2>97%</h2>
Match Accuracy
</div>

<div class="metric">
<h2>3.2x</h2>
Faster Hiring
</div>

<div class="metric">
<h2>84</h2>
Interest Score
</div>

<div class="metric">
<h2>#1</h2>
Best Candidate
</div>

</div>

</div>

</div>

</section>



<section>

<div class="section-head">
<h2>
Four Autonomous Agents.
One Recruiting Engine.
</h2>

<p>
Purpose-built agents working together to source
and prioritize talent in real time.
</p>
</div>


<div class="grid">

<div class="feature">
<h3>JD Parsing Agent</h3>
<p>
Turns job descriptions into structured search intelligence.
</p>
</div>

<div class="feature">
<h3>Live Retrieval Agent</h3>
<p>
Sources real candidate profiles using live web data.
</p>
</div>

<div class="feature">
<h3>Ranking Agent</h3>
<p>
Scores candidates using explainable ranking logic.
</p>
</div>

<div class="feature">
<h3>Recruiter Copilot</h3>
<p>
Suggests best-fit candidates and interview actions.
</p>
</div>

</div>

</section>



<div class="cta">

<h2>
Ready to Recruit with Autonomous Agents?
</h2>

<p>
Launch DeccanScout and start sourcing top talent.
</p>

<button
class="primary"
onclick="openLogin()">
Enter Platform
</button>

</div>



<div id="login-section">
<iframe src="login.php"></iframe>
</div>

<div id="dashboard-section">
<iframe src="dashboard.php"></iframe>
</div>


<footer>
DeccanScout • Autonomous Talent Intelligence Platform
</footer>


<script>

function openLogin(){

document.getElementById(
"login-section"
).style.display="block";

window.scrollTo({
top:
document.getElementById(
"login-section"
).offsetTop,
behavior:"smooth"
});

}

window.addEventListener(
"message",
function(event){

if(
event.data==="login-success"
){

document.getElementById(
"login-section"
).style.display="none";

document.getElementById(
"dashboard-section"
).style.display="block";

window.scrollTo({
top:
document.getElementById(
"dashboard-section"
).offsetTop,
behavior:"smooth"
});

}

}
);

</script>

</body>
</html>