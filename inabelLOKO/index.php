<?php
    session_start();
    require "head.php";
?>
    <body>

        <header>
            <div class="container">
                <h1><span class="high">AbelLux</span> INABEL ILOCO Essence</h1>
                <div id="brand">
                    <nav>
                        <ul>
                            <li class="cur"><a href="index.php">Home</a></li>
                            <li><a href="History.php">History</a></li>
                            <li><a href="Events.php">Events</a></li>
                        </ul>
                    </nav>
                </div>
                <?php
                    if (isset($_SESSION['user_email'])) {

                        
                        "<div class='dropdown'>
                            <label id='profile'>Profile</label>
                            <button id='profile' class='dropbtn'>▼</button>
                            <div class='dropdown-content'>
                                <a href='../include./logout.inc.php'>Logout</a>
                        </div>";
                    }

                    else {
                        
                        "<div class='profile'>
                            <a href='../Project/signup.html' target='_blank'><button class='button-sign'><span>Signup</span></button></a>
                        </div>";
                    }
                ?>
            </div>
            <ul class="donate">
                <li style="margin-top: 10px; text-align: right;">  
                    <a href="signup.php" target="_blank"><button class="button"><span>Donate Now</span></button></a>
                </li> 
            </ul>     
        </header>
        
        <section id="showcase">
            <div class="container">
                <h1>WELCOME TO,<br> INABEL ILOCO</h1>
                <h3>where every thread weaves a story of heritage and beauty!</h3>
                <p>inviting you to embark on a journey of discovery through our exquisite collection and exclusive<br> glimpses behind the artistry of Ilocano weaving.</p>
            </div>
        </section>
        
        <section id="newsletter">
            <div class="container">
            <?php

                if (isset($_SESSION['user_email'])) {
                    echo    "<h2 style='float: left'>You have subscribed to our newsletter!</h2>";
                }
                else {
                    echo    "<h2 style='float: left'>Subscribe to Our Newsletter</h2>
                            <form action='process.php' style='float: right;'>
                                <input type='email' placeholder='Enter email here'>
                                <button type='submit' class='button_1'><a href='signup.php'>Subscribe</a></button>
                            </form>";
                }
            ?>
            </div>
        </section>

        <section id="events">
            <h1>Events:</h1>
            <div class="container">
                    <div class="event">
                        <a href="Events.php"><img src="https://cdn.shopify.com/s/files/1/0281/8729/5828/files/Leshemi_7_Process_Weaving_LESHEMI-80_15x10_300_1024x1024.jpg?v=1596651748"></a>
                        <p> Witness the mastery of Inabel artisans as they demonstrate their skills in a live showcase event. <br> Engage with the artisans, learn about their craft, and perhaps even try your hand at weaving! </p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://media.philstar.com/photos/2023/09/03/cathedral-fashion-earl-dc-bracamonte_2023-09-03_17-54-57.jpg"></a>
                        <p>Enjoy traditional music and dance performances, savor authentic Ilocano cuisine, <br> and browse a diverse array of Inabel products from local artisans. </p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://asia361.com/wp-content/uploads/2023/12/Pinili-Inabel-Center-1.jpg"></a>
                        <p>  Delve deeper into the rich history and traditions of <br> Inabel weaving through our series of heritage workshops. </p>
                    </div>
                    
            </div>
            <div class="container">
            
                  
                    <div class="event">
                        <a href="Events.php"><img src="  https://scontent.fcrk2-1.fna.fbcdn.net/v/t39.30808-6/344269277_651883166775268_6924769394657662428_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGe5HjFrOME3OR9yhQCncozXCK7JhQWfoxcIrsmFBZ-jFYsDgga-fgHupDQeOBKEW-dn3bPr_2m2cEYfUWVRy9o&_nc_ohc=HZEi-F0nuAcAX8Kw-uH&_nc_ht=scontent.fcrk2-1.fna&oh=00_AfCeCRak2oHFpsQhYuaCx9nzNNbvPV0MdMtNIljd6CsR3Q&oe=660E064F"></a>
                        <p> Cultural exchange programs that facilitate interactions between Inabel weaving <br> communities and other indigenous weaving groups locally or internationally.  </p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://climate.gov.ph/images/news/1601971551_oct-8jpg.jpg"></a>
                        <p>   A symposium or conference focused on sustainable practices and innovations in Inabel weaving. <br> Topics may include eco-friendly dyeing methods, fair trade practices, and community-based initiatives for socio-economic empowerment of Inabel weavers. </p>
                    </div>
                    <div class="event">
                        <a href="Events.php"><img src="https://greattravelmagazine.files.wordpress.com/2023/08/365522557_1913523522362311_2142205251343471024_n-1.jpg?w=1024"></a>
                        <p>These trails can include visits to weaving communities, ancestral houses with notable textile collections,  <br> museums featuring Inabel artifacts, and sites of significance in the development of the craft. </p>
                    </div>
            </div>
        </section>    
      
        <section id="gallery">
            <div class="container">
            <h3>Memories...</h3>
            <hr>
            <h6><strong>Capture your cherished moments with Inabel Iloco and become a part of our vibrant community.</strong></h6>
                <p style="margin-bottom: 25px; margin-left: 10px;">Share your selfies and photos showcasing your favorite Inabel products, experiences, or moments of cultural immersion on Twitter using the <b>#WeaveWondersWithInabel. <hr> </b> <br><br> <mark> Let's celebrate the artistry and heritage of Inabel together! 📸✨ Join the movement today.  </mark> <i> <br> #InabelIloco <br> #IlocanoWeaving <br>  #Culture <br> #Artistry <br> #InabelEleganceUnveiled </i></p>
                <div class="row">
                    <div class="column">
                        <img src="https://images.saymedia-content.com/.image/t_share/MjAzNTY2Nzk2MjA3MzAyNTg3/inabel-and-the-fabric-of-time.jpg" style="width: 100%;">
                        <img src="https://cdn.shopify.com/s/files/1/1772/3895/files/DSC04883.jpg?v=1554865283" style="width: 100%;">
                        <img src="https://www.rappler.com/tachyon/r3-assets/D46C8F58978849B8B3F648BB21061F98/img/ED9140730BF1493788BB7F97824C2017/Inabel-Fashion-Show-March-04-2018-107.jpg" style="width: 100%;">
                        <img src="https://i.pinimg.com/736x/0c/a3/12/0ca3128d068db2f24d5fc0123cf4143e.jpg" style="width: 100%;">
                        <img src="" style="width: 150%;">
                    </div>
                    <div class="column">
                        <img src="https://cdn.shopify.com/s/files/1/0051/1718/2001/files/unnamed_480x480.png?v=1619574935" style="width: 100%;">
                        <img src="https://images.msha.ke/f08daa33-6b76-40d2-b942-ee83e0ad44d3?auto=format%2Ccompress&cs=tinysrgb&q=30&w=828" style="width: 100%;">
                        <img src="https://www.rappler.com/tachyon/r3-assets/D46C8F58978849B8B3F648BB21061F98/img/136EEEA11FEE482495795EB6C1490C7D/Inabel-Fashion-Show-March-04-2018-111.jpg" style="width: 100%;">

                    </div>
                    <div class="column">
                        <div class="contain">
                            <div class="img_twitter">
                                <a href="https://twitter.com/?lang=en" target="_blank"><img src="https://assets.rappler.co/D46C8F58978849B8B3F648BB21061F98/img/22697D870A6D420EBD0C5539386191AB/Inabel-Fashion-Show-March-04-2018-083.jpg" style="width: 200%;"></a>
                                <div class="top-left" style="color:rgb(255, 255, 255)">Follow us on Twitter >></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php

            require "foot.php"
        ?>