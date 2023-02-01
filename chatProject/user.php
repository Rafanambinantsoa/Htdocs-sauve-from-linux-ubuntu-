<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
    header("Location:login.php");
}
?>

<?php  include_once "header.php"?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                require_once "php/conn.php";
                $kim = $_SESSION['unique_id'];
                $sql = mysqli_query($con , "SELECT * FROM users where unique_id = '$kim'");
                if(mysqli_num_rows($sql)> 0 ){
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                    <img src="php/images/<?= $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?= $row['lname'] ?></span>
                        <p><?= $row['status'] ?></p>
                    </div>
                </div>
                <a href="#" class="logout" >Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an User to start a Chat</span>
                <input type="text" placeholder="Enter the name">
                <button><i class="fas fa-search"></i></button>
            </div>

            <div class="users-list">
            </div>
        </section>

    </div>  

    <script src="./javascript/user-search-bar.js"></script>
</body>

</html>