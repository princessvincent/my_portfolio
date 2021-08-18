<?php
session_start();

if(isset($_POST["sub"])){
    if(isset($_POST["email"]) && isset($_POST["subj"]) && isset($_POST["message"])){
        $email = $_POST["email"];
        $sub = $_POST["subj"];
        $mess =wordwrap($_POST["message"], 70);

if(filter_var("$email, FILTER_VALIDATE_EMAIL")){
    $email_error = "Invalid Email Address!";
}

$mailto = "priscavincent2018@gmail.com";
$headers = "From: ".$email ;
$tex = "You have received an E-mail from ". $email."\n\n". $mess ;

if(mail($mailto ,$sub,$tex,$headers)){
echo  "Thank you for Reaching Out to Me,
Your Mail has been Receive!";
// header("location:sucess.php");
}else{
echo "Unable to send mail";
}



    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
div{
    text-align: center;
}
#sot{
    color: brown;
}
#ab{
    float: left;
}
.p{
    float: left;
}
#wo{
    float: left;
}
#wor{
    float: left;
}
#ed{
    float: left;
}
#fed{
    float: left;
}
#jo{
    float: left;
}
#pro{
    float: left;
}
.ul{
    float: left;
}

#lan{
    float: left;
}
#en{
    float: left;
    background-color: gray;
    color: white;
    border: 4px solid white;
    border-radius: 10px;
}
#ass{
    float: left;
}
#na{
    float: left;
    color: black;
}
#pot{
    float: left;
}
#fo{
    float: left;
}
.inpu{
    text-overflow: none;
    text-align: center;
    width: 500px;
    height: 50px;
    float: left;
}
#sub{
float: left;
color: white;
background-color: blue;
border: 5px solid white;
border-radius: 10px;
width: 100px;
height: 60px;
}
.id{
    float: left;
}
.li{
    width: 1000px;
    height: 5px;
    background-color: skyblue;
}.inp{
    text-align: center;
    width: 500px;
    height: 150px;
    float: left;
}
    </style>
</head>
<body>
    <div>
<h1> ONWUGHARA PRISCA OGOCHUKWU</h1> 
<h2 id="sot"><b>SOFTWARE ENGINEER</b></h2> 
 <p><b>Location</b>: Lagos State</p>   <p><b>Years of Experience</b>: 1 year</p>    <p><b>Availability</b>:Immidiately</p>   <p><b>Email</b>:Priscavincent2018@gmail.com</p>   <p><b>Tel</b>:08168792413</p>    
     <br><br>

<h3 id="ab"><b>ABOUT</b></h3>                   <hr class="li"> <br><br>
<p class="p"> I am an individual who believes in Tech, <br />
I enjoy solving problems that has to do with Tech and developing things that would benefit the world.<br />
 I am determined and an optimistic individual who believes that there is always a solution to any problem relating to Tech.<br />
I look forward in working with you.<br />
</p><br><br><br><br><br><br>

<h3 id="ed"><b>EDUCATION</b></h3>         <hr class="li"><br>
<p id="fed">
<b><i>Federal Polytechnic Oko</i></b><br>
<i>Degree|Computer Science</i><br>
<i>BGSS Secondary school</i><br>
</i>(SSCE) | S.S.C.E</i>
</p> 
<br><br><br><br><br><br>
<h3 id="jo"><b>JOB SKILLS</b></h3>        <hr class="li"><br>
<p >
<ul id="pro">
<p>Programming Language</p>
<li>PHP</li><br>
<li>LARAVEL</li><br>
<li>HTML</li><br>
<li>CSS</li>
</ul>
</p><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h3 id="wo"><b>WORK EXPERIENCE</b></h3>  <hr class="li"><br>

<ul class="ul"> 
<b><li>Zuri Team</b> </li><br>							 
<li>Jan 2021-May 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post Held</b>: Internship.</li>
</ul>
<br>
<ul class="ul">
<b><li> Dev Center</li></b>	<br>
<li> 2021 - July 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post Held</b>: Internship</li>	
</ul>
<br>
<ul class="ul">
<b><li>Side Hustle</b></li>	<br>
<li>June - August 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post held</b>: Internship.</li> 
</ul>
<br>
<ul class="ul">
<b><li>HNG8i</b>	</li><br>
<li>August 2021 | Presently working Here </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post held</b>: Internship.</li> 
</ul>
<br><br><br><br><br><br><br><br><br><br>

<h3 id="lan"><b>LANGUAGE</b></h3>  <hr class="li">  <br>
<ul>
    <p id="en"><b>English</b></p>
</ul><br><br><br><br><br><br>

<h3 id="ass"><b>ASSOCIATION</b></h3>  <hr class="li"> <br>
<ul>
    <p id="na"><b>NACOSS( National Association Of Computer Science):</b>Member</p>
</ul><br><br><br>

<h3 id="pot"><b>PROJECTS & PORTFOLIO</b></h3> <hr class="li"><br>
<ul id="fo">
<li><b> LinkedIn:</b> www.linkedin.com/in/vincent-prisca-4a3886209</li>
<li><b> GitHub:</b> https://github.com/princessvincent</li>
</ul>
<br><br><br><br><br><br>
<h2 class="id">Let's Meet</h2> <br><br><br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="contact-form">
         <input type="email" name="email" class="inpu" placeholder="Your Email" required><br><br><br><br>
         <input type="text" name="subj" class="inpu" placeholder="Subject" required><br><br><br><br><br>
         <input type="text" name="message"  class="inp" placeholder="Message" required><br><br><br><br><br><br><br><br><br><br><br>
         <button type="submit" name="sub" id="sub">Contact Me</button>
     </form>
</div>
 

</body>
</html>