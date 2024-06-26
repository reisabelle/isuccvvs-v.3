<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include("db.php");

    $query = "select * from candidates where organization = 'SSC'";
    $result = mysqli_query($con, $query);
    $sscOfficers = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sscOfficers[] = $row;
        }
    }

    $college_variable = urldecode($_GET['variable']);
    $login_code = $_GET['login_code'];
    $loginJSON = json_encode(array("login_code" => $login_code));


    $query1 = "select * from candidates where college = '{$college_variable}' and organization = 'SBO'";
    $result1 = mysqli_query($con, $query1);
    $sboOfficers = array();
    if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) {
            $sboOfficers[] = $row;
        }
    }

    foreach ($sscOfficers as $officer) {
        $combinedOfficers[] = $officer;
    }
    
    foreach ($sboOfficers as $officer) {
        $combinedOfficers[] = $officer;
    }

    $combinedJSON = json_encode($combinedOfficers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="Pictures/isulogo.png" class="isuhead" style="background-color: white; border-radius: 60px;" alt="isulogo">
            <p class="greenbox">STUDENT LEADERS 2025</p>
            <p class="redbox">CANDIDATES</p>
        </div>
        <p id="instruction" class="instruction" style="font-family: sans-serif; font-size: 15px;">*Select the placards of your chosen candidates</p>

    <div class="slideshow-container">
        <!-- Slides with text only -->
        <div class="mySlides" id="presidentslide"><div class="president" id="president"><p class="position-text">SSC PRESIDENT</p></div></div>
        <div class="mySlides" id="vicepresidentslide"><div class="vicepresident" id="vicepresident"><p class="position-text">SSC VICE-PRESIDENT</p></div></div>
        <div class="mySlides" id="secretaryslide"><div class="secretary" id="secretary"><p class="position-text">SSC SECRETARY</p></div></div>
        <div class="mySlides" id="treasurerslide"><div class="treasurer" id="treasurer"><p class="position-text">SSC TREASURER</p></div></div>
        <div class="mySlides" id="auditorslide"><div class="auditor" id="auditor"><p class="position-text">SSC AUDITOR</p></div></div>
        <div class="mySlides" id="accountantslide"><div class="accountant" id="accountant"><p class="position-text">SSC ACCOUNTANT</p></div></div>
       
        <div class="mySlides" id="councilorslide"><div class="councilor" id="councilor"><p class="position-text">SBO COUNCILOR</p></div></div>
        <div class="mySlides" id="sbopresidentslide"><div class="sbopresident" id="sbopresident"><p class="position-text">SBO PRESIDENT</p></div></div>
        <div class="mySlides" id="sbovicepresidentslide"><div class="sbovicepresident" id="sbovicepresident"><p class="position-text">SBO VICE-PRESIDENT</p></div></div>
        <div class="mySlides" id="sbosecretaryslide"><div class="sbosecretary" id="sbosecretary"><p class="position-text">SBO SECRETARY</p></div></div>
        <div class="mySlides" id="sbotreasurerslide"><div class="sbotreasurer" id="sbotreasurer"><p class="position-text">SBO TREASURER</p></div></div>
        <div class="mySlides" id="sboauditorslide"><div class="sboauditor" id="sboauditor"><p class="position-text">SBO AUDITOR</p></div></div>
        <div class="mySlides" id="sboaccountantslide"><div class="sboaccountant" id="sboaccountant"><p class="position-text">SBO ACCOUNTANT</p></div></div>
        <div class="mySlides" id="sbopioslide"><div class="sbopio" id="sbopio"><p class="position-text">SBO PIO</p></div></div>
        <div class="mySlides" id="sbobusinessmanagerslide1"><div class="sbobusinessmanageri" id="sbobusinessmanageri"><p class="position-text">SBO BUSINESS MANAGER I</p></div></div>
        <div class="mySlides" id="sbobusinessmanagerslide2"><div class="sbobusinessmanagerii" id="sbobusinessmanagerii"><p class="position-text">SBO BUSINESS MANAGER II</p></div></div>
        <div class="mySlides" id="sbofirstyearrepslide"><div class="sbofirstyearrep" id="sbofirstyearrep"><p class="position-text">SBO 1ST YEAR REPRESENTATIVE</p></div></div>
        <div class="mySlides" id="sbosecondyearrepslide"><div class="sbosecondyearrep" id="sbosecondyearrep"><p class="position-text">SBO 2ND YEAR REPRESENTATIVE</p></div></div>
        <div class="mySlides" id="sbothirdyearrepslide"><div class="sbothirdyearrep" id="sbothirdyearrep"><p class="position-text">SBO 3RD YEAR REPRESENTATIVE</p></div></div>
        <div class="mySlides" id="sbofourthyearrepslide"><div class="sbofourthyearrep" id="sbofourthyearrep"><p class="position-text">SBO 4TH YEAR REPRESENTATIVE</p></div></div>
        
        <!-- Navigation buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094; Previous</a>
        <a class="next" onclick="plusSlides(1)">Next &#10095;</a>
    </div>
    
    <!-- Dots/circles for slide navigation -->
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
        <span class="dot" onclick="currentSlide(12)"></span>
        <span class="dot" onclick="currentSlide(13)"></span>
        <span class="dot" onclick="currentSlide(14)"></span>
        <span class="dot" onclick="currentSlide(15)"></span>
        <span class="dot" onclick="currentSlide(16)"></span>
        <span class="dot" onclick="currentSlide(17)"></span>
        <span class="dot" onclick="currentSlide(18)"></span>
        <span class="dot" onclick="currentSlide(19)"></span>
        <span class="dot" onclick="currentSlide(20)"></span>
    </div>

    <div class="submitbtncon">
        <div class="submitbtnsize">
            <button class="button-27" id="submitbtn">Submit</button>
        </div>
    </div>

    <!-- JavaScript for slideshow functionality -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>
    <script>
        // fetch natin yung data sa sql sa external js script
        const OfficerstoVote = JSON.parse('<?php echo $combinedJSON; ?>');
        const loginData = JSON.parse('<?php echo json_encode($loginJSON); ?>');
        const login_code = loginData.login_code;
        console.log('Login Code:', login_code);
    </script>
    <script src="test.js"></script>
</body>
</html>