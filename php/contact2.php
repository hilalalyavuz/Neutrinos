<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
        
</head>
<body> 

<div class="page">
    <div class="navbar">
        <div class="left">
        </div>
        <div class="right">
            <div class="list">
                    <a href="home2.php">Anasayfa</a>
                    <a href="hakkimizda2.php">Hakkımızda</a>
                    <a href="contact2.php">İletişim</a>
                    <a href="user.php">Profilim</a>
                    <a href="signuot.php">Çıkış Yap</a>
            </div>
        </div>
    </div>
    
    <div class="main">
        <div class="contain">
            <div class="head">
                <img src="photos/İletişim.jpg">
            </div>
            <div class="c-form">
                <form class="form">
                    <div class="box1">
                        <div class="b1-1">
                            <label for="fname">İsim</label>
                        </div>
                        <div class="b1-2">
                            <input type="text" id="fname" name="firstname" placeholder="İsminiz">
                        </div>
                    </div>
                    <div class="box1">
                        <div class="b1-1">
                            <label for="lname">Soyisim</label>
                        </div>
                        <div class="b1-2">
                            <input type="text" id="lname" name="lastname" placeholder="Soyisminiz">
                        </div>
                    </div>
                    <div class="box1">
                        <div class="b1-1">
                            <label for="konu">İletişim Konusu</label>
                        </div>
                        <div class="b1-2a">
                            <select id="konu" name="konu">
                                <option value="soru">Soru</option>
                                <option value="öneri">Öneri</option>
                                <option value="şikayet">Şikayet</option>
                              </select>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="b1-1">
                            <label for="message">Mesaj</label>
                        </div>
                        <div class="b1-2">
                            <textarea id="message" name="message" placeholder="Mesajınızı yazınız"></textarea>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="b1-1a">
                            <input type="submit" value="Gönder">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="f-img">
            <img src="photos/new_footer.jpg">
        </div>
        <div class="textt">
            <p>Neutrinos Copyright © 2020. Tüm Hakları Saklıdır.</p>
        </div>
    </div>
    
</div>

</body>
</html>



