<?php
if(isset($_POST['btn'])){

    require_once 'example.php';// example.php function file k initialise korlo

    $example = new Example();// object create. why???
    $example->wordCharacterCount($_POST);
}

?>



<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td> <input type="text" name="given-string" size="50"></td>
        </tr>
        <tr>
            <th>Total Number of word </th>
            <td> <input type="text" name="total-word"></td>
        </tr>
        <tr>
            <th>total Number of charecter </th>
            <td> <input type="text" name="total-character"></td>
        </tr>
        <tr>
            <th></th>
            <td> <input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>