<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yolcu Bilgileri</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="fillinfo.css">
</head>
<body>    
   
<?php
    session_start();
    include 'dbconnect.php';
    $route1_ = $_POST['route1'];
    $route2_ = $_POST['route2']; 
    $_SESSION['route1_'] = $route1_;
    $_SESSION['route2_'] = $route2_;
    $trainNumber = $_SESSION['trainNumber'];
    $trainNumber2 = $_SESSION['trainNumber2'];


    if (isset($_SESSION['email'])) {
        $usermail = $_SESSION['email'];
        }else{
            header("Location: giris.php");
        }
    ?>
    

    <div class="page">
        <div class="navbar">
            <div class="left">
            </div>
            <div class="right">
                <div class="list">
                    <a href="home.php">Anasayfa</a>
                    <a href="hakkimizda.php">Hakkımızda</a>
                    <a href="contact.php">İletişim</a>
                    <a href="user.php">Profilim</a>
                    <a href="signout.php">Çıkış Yap</a>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="contain">
                <div class="c-row">
                    <h3>Yolcu Bilgileri</h3>
                    
                </div>
                <?php if($_SESSION['ticket'] == 'Satış'){ ?>
                <form class ="row" action="selectseats.php" method='post'>
                    <div class="a-row">
                        
        
                        <div class = "d-row">
                            <label for="passType" style="padding-right: 0.4rem">Yolcu Sınıfı</label>
                            <div class="s1">
                                <select name="passType" id="passType" style="height: 156%;width:200%">
                                    <option value="BUSINESS CLASS">BUSINESS CLASS</option>
                                    <option value="ECONOMY CLASS">ECONOMY CLASS</option>
        
                                </select>
                                </div>
                        </div>
        
                        <div class = "d-row">
                            <label for="passNumber" style="padding-right: 0.2rems;" >Yolcu Sayısı</label>
                            <div class="s2">
                                <select name="number" id="number" style="height: 156%;width: 125%">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
        
                                </select>
        
                            </div>
    
                        </div>

</div>
                     <div class="h-row">
                        <div class="d-row" style="justify-content: center;">
                                <input type="submit" value="Devam Et" style="background-color: #E5FFCC;
                            border-radius: 1rem;
                            border-color: green;
                            margin-top: 1rem;
                            width: 6rem;
                            height: 2rem;"/>
                            </div>
</div>
                    </form>
                    <?php } else{ ?>
                        <form class ="row" action="rezervasyon.php" method='post'>
                    <div class="a-row">
                        
        
                        <div class = "d-row">
                            <label for="passType" style="padding-right: 0.4rem">Yolcu Sınıfı</label>
                            <div class="s1">
                                <select name="passType" id="passType" style="height: 156%;width:200%">
                                    <option value="BUSINESS CLASS">BUSINESS CLASS</option>
                                    <option value="ECONOMY CLASS">ECONOMY CLASS</option>
        
                                </select>
                                </div>
                        </div>
        
                        <div class = "d-row">
                            <label for="passNumber" style="padding-right: 0.2rems;" >Yolcu Sayısı</label>
                            <div class="s2">
                                <select name="number" id="number" style="height: 156%;width: 125%">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
        
                                </select>
        
                            </div>
    
                        </div>

</div>
                     <div class="h-row">
                        <div class="d-row" style="justify-content: center;">
                                <input type="submit" value="Rezervasyon Yap" style="background-color: #E5FFCC;
                            border-radius: 1rem;
                            border-color: green;
                            margin-top: 1rem;
                            width: 10rem;
                            height: 2rem;"/>
                            </div>
</div>
                    </form>
                        <?php } ?>
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
