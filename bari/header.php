<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <title>Arubari: A Bliss</title>
</head>

<body>
    <header> 
        <a href="index.php" class="logo">Arubari<span>.</span>com</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>   
        <ul class="navigation">
                <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
                <li><a href="explore.php" onclick="toggleMenu();">Explore</a></li>
                <li><a href="gmap.php" onclick="toggleMenu();">Location</a></li>
                <li><a href="about.php" onclick="toggleMenu();">About</a></li>
                <li><a href="contact.php" onclick="toggleMenu();">Contact</a></li>
                <li><a href="view.php" onclick="toggleMenu();">View Details</a></li>
            </ul>  
    </header>
    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY>0);
        });

        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }


    </script>
    </body>
</html>