<?php
    $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Protfolio</title>
</head>
<body>
    <header>
        <a href="index.html" class="header-brand"></a>
        <nav>
            <ul>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="about.html">About me</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="cases.html" class="header-cases">Cases</a>
        </nav>
    </header>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>

                <div class="gallery-container">
                    <?php
                        include_once 'includes/dbh.inc.php';

                        $sql = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "SQL statement failed";
                        }else{
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while($row = mysqli_fetch_assoc($result)){
                                echo    '<a href="#>
                                            <div style="background-image: url(img/gallery/)'.$row["imgFullNameGallery"].');"></div>
                                            <h3>'.$row["titleGallery"].'</h3>
                                            <p>'.$row["descGallery"].'</p>
                                        </a>';
                            }
                        }
                    ?>
                </div>
                <?php
                    if(isset($_SESSION['username'])){
                        echo '<div class="gallery-upload">
                            <h2>Upload</h2>
                            <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/from-data">
                                <input type="text" name="filename" placeholder="File name...">
                                <input type="text" name="filetitle" placeholder="Image title...">
                                <input type="text" name="filedesc" placeholder="Image description...">
                                <input type="file" name="file">
                                <button type="submit" name="submit">UPLOAD</button>
                            </form>
                        </div>';
                    }
                ?>
            </div>
        </section>
    </main>
    <div class="wrapper">
        <footer>
            <ul class="footer-links-main">
                <li><a href="#">Home</a></li>
                <li><a href="#">Cases</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="footer-links-cases">
                <li><p>Latest cases</p></li>
                <li><a href="#">MAKING SHAOLIN - WEB DEVELOPMENT</a></li>
                <li><a href="#">EXCELLENTO - WEB DEVELOPMENT</a></li>
                <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>
                <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
            </ul>
            <div class="footer-sm">
                <a href="#">
                    <img src="img/youtube-symbol.png" class="youtube icon">
                </a>
                <a href="#">
                    <img src="img/twitter-logo-button.png" class="youtube icon">
                </a>
                <a href="#">
                    <img src="img/facebook-logo-button.png" class="youtube icon">
                </a>
            </div>
        </footer>
    </div>
</body>
</html>