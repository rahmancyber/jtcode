</em>
<?php
 $to = "identitaskreatif@gmail.com" ;
 $subject = "From Contact Us";
 $nama = $_REQUEST['nama'] ;
 $email = $_REQUEST['email'] ;
 $phone = $_REQUEST['phone'] ;
 $pesan = $_REQUEST['pesan'];
 $headers = "From: $nama<$email>";
 $message = "$pesan";
 $sent = mail($to, $subject, $message, $headers) ;
 if($sent)
 {
 ?>
 <script type='text/javascript'>
 alert ('Terima kasih telah mengirim e-mail kepada kami...');
 window.location="http://publikasi-rahmancyber.blogspot.com";
 </script>
 <?php
 }
 else
 ?>
 <script type='text/javascript'>
 alert ('Pesan gagal dikirim, silahkan ulangi..!!');
 window.location="http://publikasi-rahmancyber.blogspot.com";
 </script>
 <?php
 ?>