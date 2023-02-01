<?php

session_start();
include_once "conn.php";
$outgoing = mysqli_real_escape_string($con , $_POST['outgoing_id']);
$incoming = mysqli_real_escape_string($con , $_POST['incoming_id']);

$output="";

$sql = "SELECT * FROM messages LEFT JOIN users on users.unique_id = messages.incoming_msg_id
                                    where (incoming_msg_id = $incoming AND outgoing_msg_id = $outgoing ) OR 
                                    (incoming_msg_id = $outgoing  AND outgoing_msg_id = $incoming) ORDER BY msg_id ASC  ";

$query = mysqli_query($con , $sql);

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        if($row['outgoing_msg_id'] === $outgoing){
            //he is a msg sender
            $output.='
                <div class="chat outgoing">
                    <div class="details">
                        <p>'.$row['msg'].'</p>
                    </div>
                </div>';
        }
        else{//he is a msg receiver
            $output.='
                <div class="chat incoming">
                <img src="php/images/'.$row['img'].'" alt="">
                    <div class="details">
                        <p>'.$row['msg'].'</p>
                    </div>
                </div>
            ';
        }

    }
    echo $output;
}