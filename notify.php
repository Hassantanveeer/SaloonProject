<?php 
include("db.php");
function sendPushNotification($to='',$data=array()){
    $apiKey='AAAAJRSysc4:APA91bGrh2kXyx8t_LrPnrleNAO_clIKVx79UPb5lTTM0ccxQOIPZO1SpRguQIeTiRpaKHPJI-0to6jzhmGlebFUytKPfNBAnMWlMPy-y95RXMbrNfKsuw03_f5T5G9wMVJ7MtBVFqp3';
    $fields=array('to' => $to, 'notification' => $data );

    $headers = array('Authorization: key='.$apiKey, 'Content-Type: application/json');

    $url = 'https://fcm.googleapis.com/fcm/send';

    $ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, $url );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch);

curl_close($ch);
return json_decode($result,true);
}




if(isset($_POST['pushNotification'])){
    $notification = $_POST['notification'];
    $data = array(
    'body' => $notification
    );

    $query = "SELECT * from users";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)>0){
        while ($row=mysqli_fetch_assoc($query_run)){
            $to=$row['token'];
            sendPushNotification($to,$data);
        }
    
    }
          
        
    echo "<script>alert('Notifcation Sent!');</script>";            
    echo "<script>window.location.href='push.php';</script>";                          
    
}


// $to="c8guWi8uRsOWGcmB-jeR7W:APA91bEYx4LZUgNBNTCGCjxDgkHe84YNaWygxl9tWNfKSM7C-8gdffyeU0O8tnZ9STgSadkDzseYcmb4750Mf45_4tX7gn-EQ5XOwpKG07zhRuiyvWwXnHjCrTIn7eiD8lLPMMSZfl6N";

//sendPushNotification($to,$data);

?>