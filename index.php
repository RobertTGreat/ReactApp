<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Kings</title>

    <link rel="stylesheet" href="CSS/main.css"

</head>
<body>

    <header>

        <ion-icon name="logo-designernews" id="logo"></ion-icon>

        <div class="search-container">
            <form action="/action_page.php" class="form">
            <input type="text" placeholder="Search.." name="search" id="search-input">
            <button type="submit"><span class="material-symbols-outlined" id="search-icon">
            search
            </span></button>
            </form>
        </div>

        <form class="subscribe-form">
            <input type="email" placeholder="example@mail.com" class="subscribe-input">
            <button class="subscribe-btn">Submit</button>
        </form>

        <div id="hamburger-menu" onclick="myFunction()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </div>

    </header>

    <div class="sidebar">

        <a href="index.php"><img src="Images/logo.svg" class="nav-logo"></a>
        <a href="#"><img src=""></a>
        
    </div>


    <?php

        include ("connect.php");

        $statement = $DB->prepare("SELECT * FROM products" ) ;
                    
        $statement->execute();
                    
        $result = $statement->fetchAll();

            if($result){
                foreach ($result as $rs) {
                    echo '
                        <div class="card-grid">
                            <div class="card">
                                <div class="card-img"><img src="Images/id_' . $rs['product_id'] . '.jpg" class="img"></img></div>
                                <div class="card-title">' . $rs['product_title'] . '</div>
                                <div class="card-price">' . $rs['product_brand'] . '</div>
                                <div class="card-subtitle">' . $rs['product_info'] . '</div>
                                <hr class="card-divider">
                                <div class="card-footer">
                                <div class="card-price"><span>£</span>' . $rs['product_price'] . '</div>
                                    <button class="card-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>';
                }
                echo '</table>';
            }else{
                echo "No result Found";
            }
    ?>

</body>
</html>

