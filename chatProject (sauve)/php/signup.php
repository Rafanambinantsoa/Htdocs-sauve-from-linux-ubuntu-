<?php
session_start();
include_once "conn.php";

$fname = mysqli_real_escape_string($con , $_POST['lname']);
$lname = mysqli_real_escape_string($con , $_POST['fname']);
$email = mysqli_real_escape_string($con , $_POST['email']);
$password = mysqli_real_escape_string($con , $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email , FILTER_VALIDATE_EMAIL)){
        // echo "data dklsjdksldj";
        $sql = mysqli_query($con , "SELECT email FROM  users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql)> 0 ){//if emaila already  exist 
            echo "$email - This Email already exists";

        }
        else{
            //check for upload file
            if(isset($_FILES['image'])){//if file is uploaded
                $img_name = $_FILES['image']['name'];//getting image name
                $img_type = $_FILES['image']['type'];//getting image type
                $tmp_name = $_FILES['image']['tmp_name'];//temporary name  is used  to save file in out folder

                //Lets explode  image and get the last extensionns of an user upload img file
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);//here we get the extensions of an user  uploaded file

                $extentions = ['png' , "jpg" , "jpeg"];
                if(in_array($img_ext , $extentions) === true){
                    $time = time();//this will return an current time;
                    //we need this time because when you uploadind an img to our folder we rename user file with the current time 
                    //so all of the image will have an unique name

                    $new_img_name = $time.$img_name;

                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                        $status = "Active now"; 
                        $random_id = rand(time() , 100000 );//creating a random id

                        //Insertion
                        $sql2 = mysqli_query($con , "INSERT INTO users (unique_id , fname , lname , email , password , img , status ) 
                        values($random_id , '$fname' , '$lname' , '$email' , '$password' , '$new_img_name' , '$status')"); 
                                if($sql2){
                                    $sql3 = mysqli_query($con , "SELECT * FROM users where email = '{$email}'");
                                    if(mysqli_num_rows($sql3)){
                                        $row = mysqli_fetch_assoc($sql3);
                                        $_SESSION['unique_id'] = $row['unique_id'];
                                        echo "success";
                                    }
                                } 
                                else{
                                    echo "Something went wrong";
                                }
                    }
                }
                else{
                    echo "Please  select an IMAGE FILE like Jpg , Jpeg ,PNG";
                }
            }
            else{

            }
        }
    }
    else{
        echo "$email -This is not an Email";
    }
}
else{
    echo "All field are required !!!!!";
}
