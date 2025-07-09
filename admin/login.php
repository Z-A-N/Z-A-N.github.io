<h2>Login Admin</h2>
<form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials (this is just a placeholder, implement your own logic)
    if ($username === 'admin' && $password === 'password') {
        session_start();
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin/dashboard.php');
        exit;
    } else {
        echo '<p style="color: red;">Invalid username or password.</p>';
    }
}