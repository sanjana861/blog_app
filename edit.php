<?php
require 'config.php';
require 'init.php';
require_login();

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
if (!$post) {
    die("Post not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
    $stmt->execute([$title, $content, $id]);
    header("Location: index.php");
    exit;
}
require 'header.php';
?>
<h1>Edit Post</h1>
<form method="post">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($post['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" required><?= htmlspecialchars($post['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require 'footer.php'; ?>
