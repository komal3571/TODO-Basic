<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Todo List</h1>
    </header>
    <div class="todo-container">
        <ul id="todoList">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "todo_db";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM todos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["todo_item"] . "</li>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>
