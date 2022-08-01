<?php
   header("content-type:text/html; charset=utf-8");


   session_start();

   session_unset();

   $result = session_destroy();

   setcookie("PHPSESSID", "", time() - 3600); 

   if($result) {
?>
   <script>
         alert("로그아웃 되었습니다.");
         location.replace("index.html");
   </script>
<?php }
?>