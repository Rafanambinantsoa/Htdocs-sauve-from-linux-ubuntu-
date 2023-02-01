<?php 
$url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

?>

<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php 
                include_once "php/conn.php";
                $kim = mysqli_real_escape_string($con ,$url[1] ) ;
                $sql = mysqli_query($con , "SELECT * FROM registration where unique_id = '$kim'");
                if(mysqli_num_rows($sql)> 0 ){
                    $row = mysqli_fetch_assoc($sql);
                
                ?>
                <a href="user.php" class="back-icon"><i class="fas fa-arrow-left "></i></a>
                <img src="<?= URL ?>exp/php/images/<?= $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['nom'].'  '.$row['prenom'] ?></span>
                    <p><?= $row['status'] ?></p>
                    <?php } ?>
                </div>
            </header>

            <div class="chat-box">
                

                


            </div>
            <form action="#" class="typing-area">
                <input type="hidden" name="outgoing_id" value="<?= $_SESSION['unique_id'] ?>">
                <input type="hidden" name="incoming_id" value="<?= $kim?>">
                <input type="text" name="message" class="input-field" placeholder="Enter a Message Here">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>

    </div>
    
<script src="<?= URL ?>exp/javascript/chat.js"></script>
</body>

</html>