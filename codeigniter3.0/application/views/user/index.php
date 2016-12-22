<h2><?php echo $firstname; ?></h2>

 
<table border='5' cellpadding='4'>
    <tr>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
        <td><strong>Middle Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email Address</strong></td>
        <td><strong>Home Address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($user as $user_item): ?>
        <tr>
            <td><?php echo $user_item['firstname']; ?></td>
            <td><?php echo $user_item['lastname']; ?></td>
             <td><?php echo $user_item['midname']; ?></td>
              <td><?php echo $user_item['nickname']; ?></td>
               <td><?php echo $user_item['email']; ?></td>
                <td><?php echo $user_item['homeadd']; ?></td>
                 <td><?php echo $user_item['gender']; ?></td>
                  <td><?php echo $user_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('user/'.$user_item['slug']); ?>">View</a> |
                <a href="<?php echo site_url('user/edit/'.$user_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('user/delete/'.$user_item['id']); ?>" onClick="return confirm('Deleted data cant be retrieve anymore.Do you still wanna perform the action?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>


<!DOCTYPE html>
<html>
  <head>
    <title>yih!</title>

    <style> 
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.container {
    position: relative;
}

.center {
    position: absolute;
    left: 0;
    top: 10%;
    width: 100%;
    text-align: center;
    font-size: 18px;
}

img {
    width: 100%;
    opacity: 0.7;
}



h1 {
    text-align: center;
    text-transform: capitalize;
    color: blue;
    
}

h3 {
    text-align: center;
    text-transform: capitalize;
    color: #000000;
    padding-bottom: 0%
    
}

h2 {
    text-align: center;
    text-transform: capitalize;
    color: #000000;
    padding: 100px 0px


    
}

.left {
    position: absolute;
    right: 300px;
    width: 400px;
    border: 3px solid #73AD21;
    padding: 100px;
}

p {

    text-indent:50px;
    text-align: center;
    letter-spacing: 2px
    direction:rt1;

}


.center {
    height: 200px;
    position: relative;
    border: 3px solid green;
}

.center p {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
 

a
{
    text-decoration: none;
}

a:hover{
  opacity: 0.7;
}





     </style>
  </head>

  

  <body>

    <ul>
      <li><a class="active" href="#home">Home</a></li>
      
    </ul>
           <div class="container">
            <img src="" alt="" height="320">
            <div class="center">
                <h3><em>I am <strong>fearfully wonderfully</strong> made...</em></h3>
            </div>

      

            <h1>MIGGIE RODRIGUEZ</h1>

            <p>Hello! Hi! Miggie Rodriguez but you can call me Migs for short.Im an <stong>APCIAN</strong> student and Im welcoming myself to the website world.<br>I hope html will not be so hard to me,patience is a must! Im so exoited about learning more ! :)</p>

            <br>

            <br>

            <h1>Hobbies</h1>

            <p>I can say that I have many hobbies in life.Lets start naming it one by one when it comes to sports I love playing basketball and playing drums.</br> </p>

            <br>

            <br>


            <h1>Interest</h1>

            <p>Learning new things every single day is a great please of mine. Discovering myself and own passion is still on the process so as of now Im still<br> finding myself.I kept asking myself on what field should I focus,what path should I take,am I on the right track.Questions are everywhere but if<br> you'll ask me what I want for now, I would say learning <b>HTML, CSS, PHP, JAVA SCRIPT, PYTHON, and PHOTOSHOP</b> are all in my list.<br>Eager to learn them profesionally with ample time</p>

            <br>

            <br>

            <h1>Favorite websites</h1>

            <p>There are many different websites that can be accessed using internet. Learning and making it is really my goal. Also, I can generate ideas in my favorite<br> and most visited websites such as <a href="http://facebook.com/">facebook, </a><a href="http://9gag.com/">9gag, </a><a href="http://twitter.com/">twitter, </a><a href="http://W3schools.com/">W3schools, </a><a href="http://moodle2.apc.edu.ph/">moodle, </a>and <a href="http://youtube.com/">youtube</a>  </p>

            <br>

            <br>

            <br>


            <h1>Summary table (Hobbies,Interest,Favorite Websites)</h1>

            <p><a href="Summary Table.html">Click me for the summary </a></p>

            <br>
            <br>


        
            <h1>Did you know? (Trivia) </h1>


                <div class="center">
                <p>What scares me the most ?</p>

                </div>

                <p id="insect" style="display:none"><strong>Centipede</strong></p>

                <p><button type="button" onclick="document.getElementById('insect').style.display='block'">Find out</button><p>


                 <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>
              
               <h1>Did you know? (Trivia) </h1>
    
                  <div class="center">
                <p>My ultimate crush is no other than ?</p>

                </div>

                <p id="insects" style="display:none"><strong>Shailene Woodley</strong></p>

                <p><button type="button" onclick="document.getElementById('insects').style.display='block'">Find out</button><p>


                       <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>

                  <h1>Did you know? (Trivia) </h1>


                  <div class="center">
                <p>How many hours do I play basketball when I have a spare time ?</p>

                </div>

                <p id="insectss" style="display:none"><strong>more or less 1 hr</strong></p>

                <p><button type="button" onclick="document.getElementById('insectss').style.display='block'">Find out</button><p>

                     <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>


                  <h1>Did you know? (Trivia) </h1>


                  <div class="center">
                <p>In what field am I willing to excel ?</p>

                </div>

                <p id="insectsss" style="display:none"><strong>Web programming</strong></p>

                <p><button type="button" onclick="document.getElementById('insectsss').style.display='block'">Find out</button><p>


                     <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>


                   <h1>Did you know? (Trivia) </h1>


                  <div class="center">
                <p>Whats my favorite motto ? </p>

                </div>

                <p id="insectssss" style="display:none"><strong> Well done is better than well said </strong></p>

                <p><button type="button" onclick="document.getElementById('insectssss').style.display='block'">Find out</button><p>

    
                   


    <body>
  </html>
