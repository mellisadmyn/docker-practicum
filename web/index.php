<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Sistem Terdistribusi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;600;700;800&display=swap');

*{
    margin: 0;
    padding: 0;
}

body{
    background: #FFFFFF; /*white color*/
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.wrap{
    width: 950px;
    margin: auto;
}

hr{
    background: #FFFFFF;
    height: 1px;
}

img{
    max-width: 100%;
}

/* header section */
header{
    color: aliceblue;
    float: left;                                                    
    width: 100%;
}

.logo{
    padding: 5px;
    font-size: 15pt;
    font-family: 'Pacifico', cursive;
    background-color: rgba(178, 55, 34, 0.963);
}

.tagline{
    padding: 5px;
    font-size: 15pt;
    background-color: rgba(178, 55, 34, 0.963);
}

/* menu navigation section */
.menu ul{
    list-style: none;
    text-align: center;
    overflow: hidden;                                             
    color: #FFFFFF;
    width: 100%;
    margin: 0;
    background: #A62C13;
}

.menu li{
    display: inline-block;
}

.menu ul li{
    align-items: center;
    margin: 0; 
}

.menu ul a{
    padding: 20px;
    display: block;
    font-weight: 600;
    font-size: 16px;
    color: azure;
    text-decoration: none;
    transition: all 0.5s ease;
}

.menu ul a:hover{
    background: #F0794A;
}

.active{
    background: #F0794A;
}

/* description website section */
.description{
    margin: 5% auto 5%;
    padding-left: 10px;
    padding-right: 15px;
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-desc{
    flex-basis: 150%;
}

.text-desc{
    display: inline-block;
    text-decoration: none;
}

.desc-button{
    text-decoration: none;
    background: transparent;
    font-size: 15px;
    margin: 15px 15px;
    padding: 15px 34px;
    border: 1px solid #A62C13
}

.desc-button:hover{
    color: aliceblue;
    border: 1px solid #A62C13;
    background:#A62C13;
    transition: 1s;
}

/* definition website section */
.definition{
    margin: 5% 0% 5%;
    padding-left: 10px;
    padding-right: 15px;
}

.title-def{
    color: #A62C13;
}

/* benefits website section */
.benefits{
    text-align: right;
    margin: 5% 0% 15%;
    padding-left: 10px;
    padding-right: 15px;
}

.title-ben{
    color: #A62C13;
}

/* different type of first aid section */
.row{
    height: 300px;
    margin: 5%;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    float: left;
}

.deskripsi-col{
    flex-basis: 31%;
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 5px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

.deskripsi-col:hover{
    box-shadow: 0 0 20px 0px #9e7e71;
}

/* different type of first aid section */
.footer{
    padding: 15px 0;
    float: left;
    text-align: center;
}

.footer-desk{
    text-align: center;
    color: aliceblue;
    background-color: rgba(178, 55, 34, 0.963);
    width: 100%;
    height: 30px;
    float: left;
}
   
/* responsive breakpoint section*/
@media screen and (max-width: 960px) {
    .header{
    position: inherit;
    }

    .wrap {
    width: 90%;
    margin: 25px auto;
    }

    .menu ul{
    width: 100%;
    }

    .menu ul{
    float: inherit;
    }

    .menu ul li{
    float: inherit;
    margin: 0;
    }

    .menu ul a{
    padding: 15px;
    font-size: 16px;
    border-top: 1px solid #9e7e71;
    border-bottom: 1px solid #9e7e71;
    }

    .container{
        flex-direction: column;
        float: inherit;
    }

    .row{
        flex-direction: column;
        float: inherit;
    }

    .footer-desk{
        margin-top: 500px;
        float: inherit;
    }
} 
    </style>
</head>
<body>
<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lether - Let's Help Each Other</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>

<body>
    <div class="wrap">
        <!-- start of header section -->
        <header>
            <div class="logo" align="center">
                <h2><strong>L e t h e r </strong></h2>
                <hr width="250">
            </div>
            <div class="tagline" align="center">
                <h4>Let's Help Each Other</h4>
            </div>
        </header>
        <!-- end of header section -->

        <!-- start of menu navigation section -->
        <nav class="menu">
            <ul>
                <li class="active"><a href="#">DASHBOARD</a></li>
                <li><a href="#">COURSE</a></li>
                <li><a href="#">LEADERBOARD</a></li>
                <li><a href="#">FLASHCARD</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
        <!-- end of menu navigation section -->

        <!-- start of description website section -->
        <div class="description" align=center>
            <div class="container">

                <div class="img-desc" align=left>
                    <img src="https://raw.githubusercontent.com/mellisadmyn/WebTechnology/main/4.%20Responsive%20Design%20%26%20CSS%20Preprocessor/Exercise%204/desc.png" (width: 50px)>
                </div>
    
                <div class="text-desc">
                    <h3> Leather is Your Best Source <br> for First Aid Guidance</h3>
                    <br>
                    <p align="justify"> 
                        We can learn about the proper and correct procedures for first aid treatment,
                        tips about first aid, mistakes about first aid that people still often do, and much more.
                    </p><br>
                    <a href="" class="desc-button">Explore Now</a>
                </div>

            </div>
        </div>   
        <!-- end of description website section -->
            
        <!-- start of definition first aid section -->
        <div class="definition">
            <div class="title-def">
                <h2>What is the meaning of First Aid?</h2>
                <br>
            </div>
            <p align="justify"> 
                First aid is the initial assistance given to someone that is injured or has become unwell 
                until further medical assistance arrives. First Aid knowledge is invaluable for both you as 
                the individual and for social community. It can be applied in the home, the workplace, or in 
                public locations. Therefore, the more people with First Aid knowladge are in a community, 
                the safer that community becomes.
            </p>
        </div>
        <!-- end of definition first aid section -->

        <!-- start of benefits first aid section -->
        <div class="benefits">
            <div class="title-ben">
                <h2>Is there any benefits of Learning First Aid?</h2>
                <br>
            </div>
            <p align="justify"> 
                Having First Aid knowladge not only benefits you as an individual but it extends to your family, 
                friends, co-workers and even the community as a whole. As unpleasant as it is to talk about, 
                accidents and emergency situations are not completely preventable or unavoidable. 
                If an accident happens in the workplace, in your home or in a public space, being a helpless witness 
                to an emergency situation can potentially worsen the situation.
            </p>
        </div>
        <!-- start of benefits first aid section -->

        <!-- start of different type of first aid section -->
        <div class="type" align="center">
            <h2>Different Types of First Aid</h2>
            <br>
            <p>There are 3 types of first aid based on the procedure</p>

            <div class="row">
                <div class="deskripsi-col">
                    <br><h3>Basic First Aid</h3><br>
                    <p> 
                        Basic first aid refers to the initial process of assessing and addressing the needs 
                        of someone injured or due to choking, allergic, etc.
                        <br>More...
                    </p><br><br>
                </div>
    
                <div class="deskripsi-col">
                    <br><h3>Intermediate First Aid</h3><br>
                    <p> 
                        Intermediate first aid refers to the initial process of assessing and addressing the needs 
                        of someone due to like a heart attack, etc.
                        <br>More...
                    </p><br><br>
                </div>
    
                <div class="deskripsi-col">
                    <br><h3>Advanced First Aid</h3><br>
                    <p> 
                        Advanced first aid refers to the initial process of assessing and addressing the needs 
                        of someone that more serious injured, etc.
                        <br>More...
                    </p><br><br>
                </div>
            </div>
        </div>
        <!-- end of different type of first aid section -->
            
        <!-- start of footer section -->
        <footer>
            <div class="footer-desk" align="center">
                <h5><b>&#169 Copyright by mellisadmyn</b></h5>
            </div>
        </footer>
        <!-- end of footer section -->
    </div>
</body>
</html>