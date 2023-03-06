<!DOCTYPE html>
<?php 
include ("koneksi.php");

if(isset($_POST["send"])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$messages = $_POST['messages'];

mysqli_query($koneksi,"INSERT INTO message (fullname,email,messages) VALUES ('$fullname','$email','$messages')");

    if (($_POST) > 0 ){
        echo "<script>alert('Pesan berhasil dikirim!')</script>";
    }else {
        echo "<script>alert('Pesan gagal dikirim:(')''</script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orstyle.css">
    <title>The Originote - Contact Us</title>
</head>
<body>
    <header>
        <a href="#" class="logo">THE ORIGINOTE</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">Menu</label>
        
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Skincare +</a>
                    <ul>
                       <li><a href="moisturizer.html">Moisturizer</a></li> 
                       <li><a href="sunscreen.html">Sunscreen</a></li> 
                       <li><a href="toner.html">Toner</a></li> 
                       <li><a href="">Serum</a></li> 
                    </ul>
                </li>
                <li><a href="#">Eye Care</a></li>
                <li><a href="#">Bundling</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="loginsystem/login_form.php"><ion-icon name="person-circle-outline"></ion-icon></a></li>
            </ul>
        </nav>
    </header> 
    <section class="contact">
        <div class="content">
            <h1>Get In Touch</h1>
            <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Recusandae nulla non adipisci 
                laudantium voluptates ducimus quo, delectus ex 
                mollitia minima dolore doloremque vel veritatis 
                vitae illum sit quisquam, eaque eligendi!</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><ion-icon name="locate-outline"></ion-icon></div>
                    <div class="txt">
                        <h3>Address</h3>
                        <p>Mekar I Street No.24, <br>Pemogan, South Denpasar<br> Bali Indonesia</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><ion-icon name="call-outline"></ion-icon></div>
                    <div class="txt">
                        <h3>Phone</h3>
                        <p>+62 81558122301</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                    <div class="txt">
                        <h3>Email</h3>
                        <p>theoriginote@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="fullname" name="fullname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="messages"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="send" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <ul class="social-icon">
            <li><a href="https://www.instagram.com/theoriginote/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://shopee.co.id/theoriginoteofficial/" target="_blank"><ion-icon name="bag-handle-outline"></ion-icon></a></li>
            <li><a href="https://wa.me/081558753036" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Skincare</a></li>
            <li><a href="#">Eye Care</a></li>
            <li><a href="#">Bundling</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <p> &#169; 2021 The Originote | All Right Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="coba.js"></script>
</body>
</html>