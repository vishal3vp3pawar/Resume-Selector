

<?php
 
session_start();
 
$conn = mysqli_connect('localhost', 'root', '', 'ssd') or die('ERROR: Cannot Connect='.mysql_error($conn));
#$query = "SELECT parsedfile_path FROM users WHERE userid='$_SESSION['uid']';";
#$file = mysqli_query($conn, $query);
$jhid=$_SESSION['uid'];
$query = "SELECT parsedfile_path FROM users WHERE userid='$jhid';";
$file = mysqli_query($conn, $query);
#$file="Parser/extracted_Resume_Skills/Resume Subhra.txt";
 
$searchfor = 'skills';
#$conn = mysqli_connect('localhost', 'subhra', 'jellybeans4321', 'SSD') or die('ERROR: Cannot Connect='.mysql_error($conn));
// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');
#header("location:applicant-page.php");
 
// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
 $output= implode("\n", $matches[0]);
$que="update users set skills='$output' where userid='$jhid';";
 
mysqli_query($conn,$que) or die("Can't Execute Query...");
 
#{$_SESSION['uid']}
}
