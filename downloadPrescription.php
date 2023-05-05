<?php
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename= myfile.txt');
      header('Content-Length: ' . filesize("myfile.txt"));
      readfile("myfile.txt");
?>