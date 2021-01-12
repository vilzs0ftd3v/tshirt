<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blankknalb</title>
</head>
<style>
    body {
        background-color: rgb(44, 44, 44);
        color: rgb(255, 255, 255);
        
        font-family: "Courier New", Monospace;
        
        margin: 0;
    }

    div#parallax{
        background-image:url("public/images/bg.png");
        background-repeat: no-repeat;
        height:500px;
        background-attachment: fixed;
        background-position:top ;
        background-size: cover;
        
    }


    /* to fix the width in case of padding and other style involve */
    * {
        box-sizing: border-box;
    }

    /* for div with class row.*/
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    /* for colto be floated.*/

    [class*="col-"] {
        float: left;
        padding: 15px;
    }

    /* picture to be centered.*/
    #profile {
        display: block;
        text-align: center;
        opacity: 50%;
    }

    /* picture if hover increases opacity.*/
    #profile:hover {
        display: block;
        text-align: center;
        margin: auto;
        opacity: 100%;
    }

/* For mobile phones: */
    @media only screen and (max-width: 599px) {

        
        [class*="col-"] {
            width: 100%;
        }

        img#profileImage{
            border-radius: 50%;
            border: 2px solid rgb(184, 179, 179);
            width: 110px;
            height: 70x;
            margin-top: -40px;
        }

        header h3 {
            display: block;
            font-size: 20px;
            text-align: center;
           
        }

        div#preamble {
            margin-top: -50px;
            font-size: 13px;
            text-align: justify;
            padding:30px;
        }

        h1.title{
        display: block;
        text-align:center;
        font-size: 20px;
    }

    }
/* For tablets: */
    @media only screen and (min-width: 600px) {

        
        .col-s-1 {
            width: 8.33%;
        }

        .col-s-2 {
            width: 16.66%;
        }

        .col-s-3 {
            width: 25%;
        }

        .col-s-4 {
            width: 33.33%;
        }

        .col-s-5 {
            width: 41.66%;
        }

        .col-s-6 {
            width: 50%;
        }

        .col-s-7 {
            width: 58.33%;
        }

        .col-s-8 {
            width: 66.66%;
        }

        .col-s-9 {
            width: 75%;
        }

        .col-s-10 {
            width: 83.33%;
        }

        .col-s-11 {
            width: 91.66%;
        }

        .col-s-12 {
            width: 100%;
        }

        img#profileImage {
            border-radius: 50%;
            border: 2px solid rgb(184, 179, 179);
            width: 160px;
            height: 120x;
        }

        header h3 {
            display: block;
            font-size: 30px;
            text-align: center;
           
        }

        div#preamble {

            font-size: 16px;
            text-align: justify;
        }

        img#tshirt{
        width:250px;
        height:150px;
        
    }

    }
/* For desktop: */
    @media only screen and (min-width: 768px) {

        
        .col-md-1 {
            width: 8.33%;
        }

        .col-md-2 {
            width: 16.66%;
        }

        .col-md-3 {
            width: 25%;
        }

        .col-md-4 {
            width: 33.33%;
        }

        .col-md-5 {
            width: 41.66%;
        }

        .col-md-6 {
            width: 50%;
        }

        .col-md-7 {
            width: 58.33%;
        }

        .col-md-8 {
            width: 66.66%;
        }

        .col-md-9 {
            width: 75%;
        }

        .col-md-10 {
            width: 83.33%;
        }

        .col-md-11 {
            width: 91.66%;
        }

        .col-md-12 {
            width: 100%;
        }

        img#profileImage{
            border-radius: 50%;
            border: 2px solid rgb(184, 179, 179);
            width: 210px;
            height: 170x;
            margin-top: -10px;
        }

        header h3 {
            display: block;
            font-size: 50px;
            text-align: center;
            margin-top: 0px;
        }

        div#preamble {

            font-size: 20px;
            text-align: justify;
        }

        
    }
/* For design of tshirt style: */
    img#tshirt{
            width: 100%;
            height: 80%;
            opacity: 50%;
        }
/* For design of tshirt style: */
        div#tshirt-block{

          display: block;
          text-align:center;
          
      }
/* menu */
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        width: 100%;
        bottom: 0;
        position: fixed;
    }

    ul li {
        float: left;
    }

    li a {
        display: block;
        color: rgb(233, 223, 223);
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .active {
        background-color: #818181;
    }


    li a:hover:not(.active) {
        background-color: #111;
    }

/* title of each page */

    h1.title{
        display: block;
        text-align:center;
    }


    img#tshirt:hover{
            
            opacity: 100%;
        }

</style>

<body>

    <!-- navigation-->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>


    <!-- header-->
    
    <div id = "parallax">
        <br><br><br>
    <header id = "home">
        <h3>Blankknalb</h3>
    </header>

    <!-- profile-->

    <div class="row">
        <div class="col-md-2 col-s-1"></div>
        <div class="col-md-8 col-s-10" id="profile">
            <img src="public/images/dp1.png" id = "profileImage">
        </div>
        <div class="col-md-2 col-s-1"></div>
    </div>

    <div class="row" >
        <div class="col-md-2 col-s-1"></div>
        <div class="col-md-8 col-s-10" id="preamble">
            <!-- Hi, I'm John and willing to help by sharing my skills in building business solutions and design through desktop, web and mobile platform. -->
            <p style= "text-align:center;">Designer ^^</p>
        </div>
        <div class="col-md-2 col-s-1"></div>
    </div>
</div>
    <br><br><br>
    <h1 class = "title" id = "project">T-shirt Designs</h1>

    <div class="row" id = "firstrow">
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/faith_sm.PNG" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/grab_sm.PNG" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/invictus_sm.PNG" id = "tshirt"></div>
    </div>

    <div class="row" id = "firstrow">
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/block_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/books_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/detox_sm.png" id = "tshirt"></div>
    </div>

    <div class="row" id = "firstrow">
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/job_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/share_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/vision_sm.PNG" id = "tshirt"></div>
    </div>
    <div class="row" id = "firstrow">
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/water_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/worm_sm.png" id = "tshirt"></div>
        <div class="col-md-4 col-s-4" id="tshirt-block"><img src="public/images/look_sm.png" id = "tshirt"></div>
    </div>

    
    <br><br><br>

    <h1 class = "title" id = "contact">Contact</h1>

    <div class="row">
        <div class="col-md-4 col-s-4" id="tshirt-block" style="border:1px solid rgb(36, 35, 35);"><p>email:</p><p> vilzs0ftd3v@gmail.com</p></div>
        <div class="col-md-4 col-s-4" id="tshirt-block" style="border:1px solid rgb(36, 35, 35);"><p>contact No:</p><p> +639951819053</p></div>
        <div class="col-md-4 col-s-4" id="tshirt-block" style="border:1px solid rgb(36, 35, 35);"   ><p>facebook:</p><p> fb.me/rey.jan.52459</p></div>
    </div>

    <div class="row">
        <div class="col-md-6 col-s-6" id="tshirt-block" style="border:1px solid rgb(36, 35, 35);">
            <p style="display: block;text-align: left; ">
                EDUCATION 2012-2016 - Bachelor of Science in Information Technology, SCC
            </p> 
        </div>
        <div class="col-md-6 col-s-6" id="tshirt-block" style="border:1px solid rgb(36, 35, 35);">
            <p  style="display: block;text-align: left;">
                Academic Achievements: - 2012 – 2014: Academic Honors (1st – 3rd yr.): Class Honors Recognition 
            </p>
        </div>
        
    </div>
    

    

    <br><br>

    <p style="display: block;text-align: center;">
        Do not stop doing, trying, learning, fighting, or experimenting until the miracle happens.
    </p>

     
 

    <br><br><br><br><br><br><br><br>


    <footer style="display: block;text-align: center;">
        &copy; blankknalb 2021
    </footer>

    <br><br><br>
</html>
