<?php 
// include('config.php');
// $batch_id = $_GET['b_i'];
// $sql = "SELECT  * FROM batch_list WHERE id = '$batch_id'";
// $runn = mysqli_query($conn,$sql);
// $rows = mysqli_fetch_all($runn,MYSQLI_ASSOC);
// $fr = $rows[0]['batch_email'];
// $subject = $rows[0]['subject'];
// $cont = $rows[0]['mail_content'];
// $sql = "SELECT  * FROM batch WHERE batch_id = '$batch_id'";
// $run = mysqli_query($conn,$sql);
// $data = mysqli_fetch_all($run,MYSQLI_ASSOC);
// foreach($data as $dat){  
// $email = $dat['email'];
// $to = $email;
// $from = $fr; 
// $fromName = $fr; 


$fr = "tech.legacy.dev@gmail.com";
$to = "kasiemobijanfrancis@gmail.com";
$from = $fr; 
$fromName = $fr; 
$htmlContent = " 
    <body style='text-align:center;background:#CCCCCC;font-family:Candara;border-radius:5px;font-size:20px'> 
          
       <div class='card z-depth-2' style='padding:10px;width:50%;margin:auto;border-radius:5px;background:white;'>
       <br>
    Hey remember you placed an item on your cart, do you want to checkout
      <br>
      <p></p>
           </div> 
           <br><br>
    </body>
";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$mail=mail($to, $subject, $htmlContent, $headers);
if($mail){?>
    <script>
        alert('Bulk mail sent Sucessfully');
    </script>
<?php     
}

 ?>
<body style="background-color:white;text-align:center">
<!--<img src="../panel/updatess.gif"  style="margin-top:10%">-->

<H3 style="text-align:center;color: #DF5C26;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">DO NOT CLOSE THIS WINDOW</H3>
</body>
             