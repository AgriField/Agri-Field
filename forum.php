<!DOCTYPE html>

<html>
<head>
    <meta name="vieport" content="with=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="intex.php"><img src="img/agri.png" ></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Crops.html">Crops</a></li>
                    <li><a href="Contacts.html">Contacts</a></li>
                    <li><a href="forum.php">Forum</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>Forum</h1>
    </section>

    <section  class="abou">
   
        <div class="abou-col">
            <center>
    <a href="login-page.php">Login</a>
    <?php 
        session_start();
        if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
            
        ?>
       
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">Logout</a>
        <form action="comment.php" method="post">
            <input type="hidden" id="mname" name="name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>">
            <textarea rows="8" id="comments" name="comment" placeholder="Message" required></textarea>
            <button type="submit">comment</button>
        </form>
        <?php 
    }else{
      
    }
    ?>
   </div>
    </center>
    </section>
    <?php
        include "db_conn.php";
        $result = mysqli_query($conn,"SELECT * FROM comment ORDER BY id DESC");
    ?>
    
    <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
        <table>

        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["comment"]; ?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        <?php
        }
        else{
            echo "No result found";
        }
    ?>

    </section>


<section class="footer">
    Copyright &copy;2022
    <div class="icons">
        <i class="fa fa-facebook" ></i>
        <i class="fa fa-twitter" ></i>
        <i class="fa fa-instagram" ></i>
    </div>
    <p>Made by AgriField</p>
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
