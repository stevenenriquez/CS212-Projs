<!-- Steven Enriquez - Sign Up - Project 4 - deleteBook.php -->

<?php

$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_se558", "5189343", "cs212_se558");
 
if (!$conn) {
    echo "Error: Not able to connect to MySQL." . "<br>";
    exit;
} else {
    echo "Success: A proper connection was made to MySQL." . "<br>";
}

$sql = "DELETE FROM cs212_se558.book WHERE BookTitle ='";
$sql = $sql . $_POST["bTitle"] . "' ;" ;

$result =  mysqli_query($conn, $sql);

if ($result) {
    echo mysqli_affected_rows($conn) .  " row(s) were deleted.<br>";
} else {
    echo "Error executing DELETE.<br>";
    echo "Error message:".mysqli_error($conn);
}

mysqli_close($conn);
