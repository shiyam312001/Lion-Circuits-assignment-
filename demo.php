<?php
 $files = $_FILES['fname']['name'];
 $TmpName = $_FILES['fname']['tmp_name'];

 move_uploaded_file($files,$TmpName);

 echo ("file upload successfully");


?>