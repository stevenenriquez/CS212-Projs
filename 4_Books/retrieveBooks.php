<!-- Steven Enriquez - Sign Up - Project 4 - retrieveBooks.php -->

<!DOCTYPE html>

<html>

    <head>

        <title> Proj 4: retrieveBooks </title>

    </head>

    <body>

        <h1>List of all books</h1>

        <table border="1">
            
            <tr>
                <th> Title </th>
                <th> First Author </th>
                <th> Year </th>
            </tr>

            <?php
            $conn = mysqli_connect("tund.cefns.nau.edu", "se558", "5189343", "se558");
            $sql = "SELECT BookTitle, BookFirstAuthor, BookYear FROM se558.book;";
            $result =  mysqli_query($conn, $sql);

            while ($row =  mysqli_fetch_assoc($result)) {
                echo "<tr>";

                echo "<td>";
                echo $row["BookTitle"];
                echo "</td>";

                echo "<td>";
                echo $row["BookFirstAuthor"];
                echo "</td>";

                echo "<td>";
                echo $row["BookYear"];
                echo "</td>";

                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
            
        </table>

        <br><br><br>

        <a href="index.html">Index</a>

    </body>

</html>
