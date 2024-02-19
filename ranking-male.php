<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\ranking-male.css?<?php echo time(); ?>">
    <title>Male Ranking</title>

</head>

<body>
    <div id="sidebar">
        <div class="upper-logo">
            <figure class="logo">
                <img src="images/infor.png" alt="logo">
            </figure>
            <div class="name">
                <div class="informatics">Informatics</div>
                <div class="college">COLLEGE</div>
            </div>
        </div>

        <div class="nav-links">
            <div class="dropdown">
                <a onclick="myFunction()" class="dropbtn"><i class="fa-regular fa-user"></i>Candidates <i class="fa-solid fa-angle-down"></i></a></a>
                <div id="myDropdown" class="dropdown-content">
                    <a href="male-candidates.php">Mr.</a>
                    <a href="female-candidates.php">Ms.</a>
                </div>
            </div>

            <div class="dropdown">
                <a onclick="myFunction2()" class="dropbtn"><i class="fa-solid fa-square-poll-vertical"></i>votes/rankings <i class="fa-solid fa-angle-down"></i></a></a>

                <div id="myDropdown2" class="dropdown-content2">
                    <a href="ranking-male.php">Mr.</a>
                    <a href="ranking-female.php">Ms.</a>
                </div>
            </div>

            <a href="summary.php"> <i class="fa-solid fa-square-poll-vertical"></i>summary</a>
        </div>
    </div>

    <div id="main">
        <div class="page-title" id="title">Male Rankings</div>

        <div class="box">
            <div class="rank details">
                <div class="rank call-number"><h1>MR. #1</h1></div>
                <div class="rank circle-image-holder">
                    <img src="images\Kyle.png" alt="Circle Image">
                </div>
                <div class="rank progress">
                    <div class="progress-done" data-done="10"></div>
                </div> 
            </div>
            <div class="rank details">
                <div class="rank call-number"><h1>MR. #2</h1></div>
                <div class="rank circle-image-holder">
                    <img src="images\Kyle.png" alt="Circle Image">
                </div>
                <div class="rank progress">
                    <div class="progress-done2" data-done="50"></div>
                </div> 
            </div>
            <div class="rank details">
                <div class="rank call-number"><h1>MR. #3</h1></div>
                <div class="rank circle-image-holder">
                    <img src="images\Kyle.png" alt="Circle Image">
                </div>
                <div class="rank progress">
                    <div class="progress-done3" data-done="70"></div>
                </div> 
            </div>
            <div class="rank details">
                <div class="rank call-number"><h1>MR. #4</h1></div>
                <div class="rank circle-image-holder">
                    <img src="images\Kyle.png" alt="Circle Image">
                </div>
                <div class="rank progress">
                    <div class="progress-done4" data-done="90"></div>
                </div> 
            </div>

            <div class="rank details">
                <div class="rank call-number"><h1>MR. #5</h1></div>
                <div class="rank circle-image-holder">
                    <img src="images\Kyle.png" alt="Circle Image">
                </div>
                <div class="rank progress">
                    <div class="progress-done5" data-done="40"></div>
                </div> 
            </div>
        </div>
    </div>
    <script src="script.js">
    </script>
    <script src="male-bar.js"></script>
</body>

</html>
