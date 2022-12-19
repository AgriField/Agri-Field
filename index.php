<!DOCTYPE html>
<html>
<head>
    <meta name="vieport" content="with=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.htlm"><img src="img/agri.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Crops.html">Crops</a></li>
					<li><a href="forum.php">Forum</a></li>
                    <li><a href="Contacts.html">Contacts</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="Tbox">
            <h1>Beginning Agriculture</h1>
            <p>The start of your journey in creating your field of crops</p>
            <a href="Crops.html" class="links">Learn More</a>
        </div>
    </section>


<!------------Course------------->

<section class="course">
    <h1>Types Of Crops</h1>
    <p></p>


<div class="row">
    <div class="course-col">
        <h3>Vegetables</h3>
        <p>You'll need to choose the right vegetables for your garden.
            Some good choices for beginner gardeners include tomatoes, peppers, lettuce, and beans.
            These vegetables are relatively easy to grow and can provide a good introduction to gardening.</p>
    </div>
    <div class="course-col">
        <h3>Flowers</h3>
        <p>Once you've chosen your flowers, it's time to plant them.
            Follow the instructions on the seed packet or plant tag to determine the right spacing and depth for your plants.
            Water them well after planting, and continue to water regularly to keep the soil moist.</p>
    </div>
    <div class="course-col">
        <h3>Herbs</h3>
        <p>Pay attention to your herbs as they grow. Keep an eye out for pests and diseases, and take action if you see any problems. 
            Harvest your herbs when they're ready by snipping off the leaves or stems, and enjoy the fresh, flavorful herbs in your cooking.</p>
    </div>
</div>

</section>


<section class="footer">
    Copyright &copy;2022
    <div class="icons">
        <i class="fa fa-facebook" ><a href=""></a></i>
        <i class="fa fa-twitter" ><a href=""></a></i>
        <i class="fa fa-instagram"><a href=""></a></i>
    </div>
    <p>Designed by AgriField</p>
</section>





<!------------JAVA script for toggle menu ------------>
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu()
    {
        navLinks.style.right = "0";
    }
    function hideMenu()
    {
        navLinks.style.right = "-200px";
    }
</script>


</body>
</html>

