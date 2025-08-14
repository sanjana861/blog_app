<?php
require 'config.php';
require 'init.php';
require_login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO posts (title, content, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$title, $content]);
    header("Location: index.php");
    exit;
}
require 'header.php';
?>
<h1>New Post</h1>
<form method="post">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
<?php require 'footer.php'; ?>
