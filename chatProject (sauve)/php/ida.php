<?php
//  Affichage de tous les personne en ligne

session_start();
include_once "conn.php";

$outgoing_msg_id = $_SESSION['unique_id'];


$sql = mysqli_query($con, "SELECT * FROM users");
$output = "";
if (mysqli_num_rows($sql) === 1) {
    $output .= "There is no User available to chat";
} elseif (mysqli_num_rows($sql) > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {
        $kira = mysqli_real_escape_string($con , $row['unique_id']);
        $sql2 = "SELECT * FROM messages where (incoming_msg_id = $kira 
        OR  outgoing_msg_id =  $kira) AND (outgoing_msg_id  = $outgoing_msg_id 
        OR  outgoing_msg_id =  $kira) order by msg_id   DESC LIMIT 1";
        $query2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($query2); 
        if (mysqli_num_rows($query2) > 0) {
            $result = $row2['msg'];
        } else {
            echo "no message available";
        }

        // triming message if word are more  thna 28 
        (strlen($result) > 28) ? $msg = substr($result, 0, 28) : $msg = $result;

        $output .= '
                <a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>' . $row['fname'] . '  ' . $row['lname'] . '</span>
                            <p>'.$result.'</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
        ';
    }
}
echo $output;
