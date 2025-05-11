
<form method="POST" enctype="multipart/form-data" action="form.php?ref=homepage">
    <input type="text" name="name" placeholder="Name"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
    <textarea name="comment" placeholder="Your message..."></textarea><br/>
    <input type="submit" value="Submit" />
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Use $_POST, not $_GET for name (your form uses POST)
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['comment']);
    $ref = $_GET['ref'] ?? 'unknown'; // GET parameter

    // ✅ Validate
    if (empty($name) || empty($email) || empty($message)) {
        echo "<br/>❌ All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br/>❌ Invalid email format!";
    } else {
        echo "<br/>✅ Success!<br/>";
        echo "📩 Name: $name<br/>";
        echo "📧 Email: $email<br/>";
        echo "💬 Message: $message<br/>";
        echo "🔗 Source: $ref";
    }
}
?>
