<!DOCTYPE php>
<php lang='en'>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styleX.css">
        <script src="project.js"></script>
        <title>Events | ABELoco </title>
    </head>
    <body>

        <style>
            #newsletter {
                padding: 5px;
            }
            #newsletter form {
                float: left;
                width: 60%;
            }
            #end {
                margin-top: 100px;
                border-top: #c93e34 3px solid;
            }
            
        </style>
        
        <header>
            <div class="container">
                <h1><span class="high">AbelLux</span> INABEL ILOCO Essence </h1>
                <div id="brand">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="History.php">History</a></li>
                            <li class="cur"><a href="Events.php">Events</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <ul class="donate">
                <li style="margin-top: 10px; text-align: right;">  
                    <a href="../Project/signup.php" target="_blank"><button class="button"><span>Donate Now</span></button></a>
                </li> 
            </ul>     
        </header>

        <section id="newsletter">
            <div class="container">
                <h2 style="float: left">Subscribe to Our Newsletter</h2>
                <form action="process.php" style="float: right;">
                    <input type="email" placeholder="Enter email here">
                    <button type="submit" class="button_1">Subscribe</button>
                </form>
            </div>
        </section>
        
        <section id="evt">
            <div class="container">
                <article id="main">
                    <h1>Inabel Illumination Night:</h1>
                    <p><i> Step into a world of enchantment as we transform our workshop into a magical wonderland illuminated by the warm glow of traditional Inabel lanterns.
                         Experience the mesmerizing beauty of Ilocano weaving as artisans showcase their craft under the shimmering light. 
                         Enjoy live music, storytelling sessions, and delicious local delicacies, creating an unforgettable evening of celebration and illumination.</i></p>
                    <img src="https://chaplaincy.tufts.edu/wp-content/uploads/Screen-Shot-2021-08-09-at-11.25.19-AM.jpg" height="360" width="640" style="display: block; margin: 0 auto;">
                    <h1>Inabel Fusion Fashion Show:</h1>
                    <p> <i>Prepare to be dazzled as fashion meets tradition in our one-of-a-kind Inabel Fusion Fashion Show. 
                        Witness top designers and emerging talents reinterpret classic Inabel textiles into stunning contemporary couture pieces.
                         From elegant gowns to avant-garde creations, experience the endless possibilities of Inabel weaving on the runway. 
                        Join us for an evening of style, creativity, and cultural fusion that pushes the boundaries of fashion and celebrates the timeless elegance of Ilocano heritage.</i> </p>
                    <img src="https://www.rappler.com/tachyon/r3-assets/D46C8F58978849B8B3F648BB21061F98/img/ED9140730BF1493788BB7F97824C2017/Inabel-Fashion-Show-March-04-2018-107.jpg?resize=1400%2C933&zoom=1" height="360" width="640" style="display: block; margin: 0 auto;">                    
                    <h1>Weave & Wander Retreat:</h1>
                    <p> <i> Embark on a journey of self-discovery and cultural immersion with our Weave & Wander Retreat. 
                        Escape the hustle and bustle of city life as you retreat to the serene countryside surrounded by lush landscapes and the gentle rhythm of weaving looms.
                         Immerse yourself in daily weaving workshops led by master artisans, where you'll learn ancient techniques passed down through generations.
                          Between weaving sessions, explore the picturesque countryside, savor farm-to-table cuisine, and connect with fellow retreaters in a supportive and nurturing environment.
                         Whether you're a seasoned weaver or a novice enthusiast, join us for a transformative experience that celebrates the artistry, tradition, and beauty of Inabel weaving.</i> </p>
                    <img src="https://static1.squarespace.com/static/56efc0017da24f436cb93bed/t/61d4707ab3aebc678e4f7887/1641312378509/AdobePhotoshopExpress_2021-04-18_08-55-13-0400.jpeg?format=1500w" height="360" width="640" style="display: block; margin: 0 auto;">
                    <h1>Market Days and Trade Fairs:</h1>
                    <p> <i> Inabel products may be sold or showcased at local markets, trade fairs, or artisanal events. These events not only provide opportunities for weavers to market their products but also allow visitors to purchase authentic Inabel textiles and support local artisans.</i> </p>
                    <img src="https://i0.wp.com/tutubi.ph/wp-content/uploads/2024/02/369274593_254606064109096_1795735267855458375_n.jpg?resize=696%2C808&ssl=1" height="360" width="640" style="display: block; margin: 0 auto;">
                    <h1>Inabel Weaving Competitions: </h1>
                    <p> <i>These competitions can encourage innovation, excellence, and creativity within the weaving community, while also raising awareness about the importance of preserving this traditional craft. </i> </p>
                    <img src="https://cdn.shopify.com/s/files/1/1772/3895/files/DSC04883.jpg?v=1554865283" height="360" width="640" style="display: block; margin: 0 auto;">
                
                </article>
            </div>
        </section>

<?php
    require "foot.php"
?>