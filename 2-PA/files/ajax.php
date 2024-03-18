<?php

    include('database_pdo.php');

    if (isset($_POST['search'])) {

       $name = $_POST['search'];
    //Search query.
        $conn = getConnection();
       $query = "SELECT * FROM modell WHERE name LIKE ? LIMIT 5";
       $stmt->$conn->prepare($query);

       $stmt->execute(array('%$name%'));

       $execQuery = $stmt->get_result();
    //Creating unordered list to display result.
       echo '
    <ul>
       ';
       //Fetching result from database.
       while ($result = MySQLi_fetch_array($execQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
       <li class="list-group-item ms-3" onclick='fill("<?php echo $result['name']; ?>")'>
       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo $result['name']; ?>
       </li></a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>