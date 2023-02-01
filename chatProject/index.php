
<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>A realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt" ></div>

                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input name="fname" type="text" placeholder=" First name" required>
                    </div>

                    <div class="field input">
                        <label for="">Last  Name</label>
                        <input name="lname" type="text" placeholder=" First name" required>
                    </div>
                </div>

                    <div class="field input">
                        <label for="">Email Adress</label>
                        <input name="email" type="text" placeholder=" Email" required>
                    </div>

                    <div class="field input">
                        <label for="">Password</label>
                        <input name="password" type="password" placeholder="Password" required>
                        <i class="fas fa-eye"></i>

                    </div>

                    <div class="field image">
                        <label for="">Select an Image</label>
                        <input name="image" type="file" required>
                    </div>

                    <div class="field submit">
                        <input type="submit" value=" Continue to Chat ">
                    </div>
                    <div class="link">Already signup ?<a href="login.php">Login now</a></div>
                </div>
            </form>
        </section>
    </div>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</body>

</html>