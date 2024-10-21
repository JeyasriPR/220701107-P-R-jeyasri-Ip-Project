<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}

// Initialize students array
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

// Add a student
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty(trim($_POST['student_name']))) {
    $student_name = trim($_POST['student_name']);
    $_SESSION['students'][] = $student_name;
}

// Delete a student
if (isset($_GET['delete'])) {
    $student_id = intval($_GET['delete']);
    unset($_SESSION['students'][$student_id]);
    $_SESSION['students'] = array_values($_SESSION['students']); // Reindex array
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Manage Students</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Student Management</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <span class="navbar-text">
                    Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                </span>
                <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Manage Students</h2>
        <form method="POST" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
            </div>
            <button type="submit" class="btn btn-primary ml-2">Add Student</button>
        </form>

        <h3 class="mt-4">Students List</h3>
        <ul class="list-group">
            <?php foreach ($_SESSION['students'] as $index => $student): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo htmlspecialchars($student); ?>
                    <a href="?delete=<?php echo $index; ?>" class="btn btn-danger btn-sm">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
