<?php
  $filename = $_FILES['file']['name'];
  $meta = $_POST;
  $destination = dirname(__FILE__) .'/videos/'. $filename;
  move_uploaded_file( $_FILES['file']['tmp_name'] , $destination );
 
  ?>