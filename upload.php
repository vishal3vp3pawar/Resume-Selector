<?php

session_start();

require('config.php');

 $targetfolder = "uploads/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $source_folder = "Resume/" . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 #echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
   
    $userid_file=$_SESSION['uid'];
    $query="update users set file_path='$source_folder' where userid = '$userid_file';";

    $query2="update users set resume_status=1 where userid = '$userid_file';";

   // echo $output;
   //echo "<script>alert('$output');</script>";

    mysqli_query($link,$query) or die("Can't Execute Query...");
    mysqli_query($link,$query2) or die("Can't Execute Query...");

   //  $command = escapeshellcmd('/Parser/parser.py');
   //  $output = shell_exec($command);

   

      echo(exec('python parser.py'));

      sleep(3);

      //////////////////////////////////////////
      $jhid=$_SESSION['uid'];
      //$query = "SELECT parsedfile_path FROM users WHERE userid='$jhid';";

      $query = "SELECT * FROM users WHERE userid='$jhid';";
      $q = mysqli_query($link, $query);
      $row=mysqli_fetch_assoc($q);
      $file_path=$row['parsedfile_path'];
      #echo $query;
      
      

      // function fOpenRequest($url) {
      //    $temp_read = fopen($url, 'r');
      //    $data = stream_get_contents($temp_read);
      //    fclose($url);
      //    return $data;
      // }
      // $contents = fOpenRequest($file);

      #$file = fopen($file, "r") or die("Unable to open file!");

      #echo $file['parsedfile_path'];
      #$file="/"+$file;
      #$file="Parser/extracted_Resume_Skills/Resume Subhra.txt";
      
      $searchfor = 'skills';
      #$conn = mysqli_connect('localhost', 'subhra', 'jellybeans4321', 'SSD') or die('ERROR: Cannot Connect='.mysql_error($conn));
      // the following line prevents the browser from parsing this as HTML.
      header('Content-Type: text/plain');
      #header("location:applicant-page.php");
      
      // get the file contents, assuming the file to be readable (and exist)

      $contents = file_get_contents($file_path);

      // escape special characters in the query
      $pattern = preg_quote($searchfor, '/');
      // finalise the regular expression, matching the whole line
      $pattern = "/^.*$pattern.*\$/m";
      // search, and store all matching occurences in $matches
      if(preg_match_all($pattern, $contents, $matches)){
      $output= implode("\n", $matches[0]);
      $que="update users set skills='$output' where userid='$jhid';";
      
      mysqli_query($link,$que) or die("Can't Execute Query...");}
      //////////////////////////////////////////

    header("location:applicant-page.php");

 }

 else {

 echo "Problem uploading file";

 }

}

// else {

//  echo "You may only upload PDFs, JPEGs or GIF files.<br>";

// }

