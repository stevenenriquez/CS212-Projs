<!-- Steven Enriquez - Sign Up - Project 4 - saveBook.php -->

<?php

$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_se558", "5189343", "cs212_se558");

if (!$conn) {
    echo "Error: Not able to connect to MySQL." . "<br>";
    exit;
} else {
    echo "Success: A proper connection was made to MySQL." . "<br>";
}

$sql = "INSERT INTO (BookTitle, BookFirstAuthor, BookYear) VALUES (";
$sql = $sql . "'" . $_POST["bTitle"] . "' ,";
$sql = $sql . "'" . $_POST["bFirstAuthor"] . "' ,";
$sql = $sql . "'" . $_POST["bYear"] . "'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo mysqli_affected_rows($conn) . " row(s) were added.<br>";
} else {
    echo "Error executing INSERT.<br>";
    echo "Error message:" . mysqli_error($conn);
}

mysqli_close($conn);