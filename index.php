<?php
$experince = array(
    array('year'=> '2010 - 2012','place'=> 'Premier Aquatics, INC', 'position'=> 'HR Specialist'),
    array('year'=> '2012 - 2014','place'=> 'Global Medical LLC', 'position'=> 'Service Technician'),
    array('year'=> '2011 - present','place'=> 'Tax From US LLC', 'position'=> 'Founder'),
    array('year'=> '2015 - present','place'=> 'Schroedinger\'s Cat Lab', 'position'=> 'Cheaf Manager'),
);
$education = array(
    'study1'=>array('year'=> '1994 - 2004', 'place'=> 'Skadovsk\'s School #3'),
    'study2'=>array('year'=> '2004 - 2010', 'place'=> 'National Avition University', 'diplom'=>array('Bachelor of Engineering', 'Master of Science')),
    'study3'=>array('year'=> '2010 - 2012', 'place'=> 'North VA Community College', 'diplom'=>array('Associate Degree Biblical Studies')),
    'study4'=> array('year'=> '2012 - 2014', 'place'=> 'Fairfax County Fire And Rescue Academy', 'diplom'=>array('Emergency Medical Technician - Basic Life Support')),
);
$martialStatus = 'Married';

$skills = array('Front-End Dev.','Java Script', 'Back-End Dev.', 'Web Design');

?>



<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <title >Roman Moisiuk</title>
</head>
<body id="a">
<div class="main">
    <div class="header">
        Hackmates
    </div>

    <div class="picture">
        <img id="profile_pic" alt="Profile Picture">
    </div>
    <div class="main_container">
        <div class="col">
            <a id="folowers-link" href=""></a></div>
        <div class="col">
            <a href="#">Folowing</a></div>
        <div class="col">
            <a href="photos.html">Photos</a></div>
        <div class="col">
            <a href="#">Spots</a></div>
    </div>
    <div>
        <h1></h1>
    </div>
    <div class="icon1">
        <img src="pictures/home-icon.png" alt="Home Icon">
        <span id="address"></span>
    </div>
    <div class="icon2">
        <img src="pictures/phone.png" alt="Phone Icon">
        <span id="phone"></span>
    </div>
    <div class="icon3">
        <a href="https://www.facebook.com/roman.moisiuk">
            <img src="Pictures/facebook.jpg" alt="Facebook Icon"></a>
    </div>
    <div class="navigation">
        <div><a href="index.html">Home</a></div>
        <div><a href="about_me.html">About Me</a></div>
        <div><a href="photos.html">My Pictures</a></div>
        <div><a href="#">My Friends</a></div>
        <div><a href="#">My News</a></div>
    </div>
    <div id='data'>
        <div class="article">
            <ul>
                <li><strong>Martial Status</strong>
                    <ul>
                        <li>
                            <?php
                            echo $martialStatus;
                            ?>
                        </li>
                    </ul>
                </li>
                <li><strong>Education</strong>
                    <?php
                        echo ("<ul>");

                    $keys =array_keys($education);

                        $lenght = count($keys);



                        for($i = 0; $i < $lenght; $i++){
                            echo '<li>'.$education[$keys[$i]]['year']. ' - '.$education[$keys[$i]]['place'];
                            if(isset($education[$keys[$i]]['diplom'])){
                             echo '<ul>';
                                $lenghtDiploma = count ($education[$keys[$i]]['diplom']);
                                for($j = 0; $j < $lenghtDiploma; $j++){
                                    echo '<li>'.$education[$keys[$i]]['diplom'][$j].'</li>';
                                }
                                echo'</ul>';
                            }
                            echo'</li>';
                        }
                        echo ("</ul>");
                    ?>

                </li>
                <li> <strong>Expirence</strong>
                    <?php
                    echo("<ul>");
                    $lenght = count($experince);

                    for($i = $lenght -1; $i >= 0; $i--){
                        echo '<li>'.$experince[$i]['year'].' - '
                                   .$experince[$i]['place'].' - <strong>'
                                   .$experince[$i]['position'].'</strong></li>';
                    }
                    echo("</ul>");
                    ?>

                </li>
                <li> <strong>Skills</strong>
                    <?php
                    echo("<ul>");
                    $lenght = count($skills);

                    for($i = 0; $i < $lenght; $i++){
                        echo '<li>'.$skills[$i].'</li>';
                    }
                    echo("</ul>");

                    ?>

                </li>


            </ul>

        </div>

        <div id='commentList'>
            <h3>Комментарии</h3>
        </div>

        <div class="comment">
            <form>
                <textarea id="text_area"></textarea> <br>
                Full Name: <br>
                <input id="UserName"> <br>
                Email Address: <br>
                <input id="Email" type="email"> <br>
                <input id="send_btn" type="button" value="Send">



            </form>
        </div>
    </div>
</div>

<script src="script.js"></script>



</body>

</html>
