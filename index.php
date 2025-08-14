<?php
require 'config.php';
require 'init.php';
require 'header.php';

$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
echo '<h1>Posts</h1>';
while ($row = $stmt->fetch()) {
    echo '<div class="card mb-3"><div class="card-body">';
    echo '<h5 class="card-title">'.htmlspecialchars($row['title']).'</h5>';
    echo '<p class="card-text">'.nl2br(htmlspecialchars($row['content'])).'</p>';
    echo '<small class="text-muted">Posted on '.$row['created_at'].'</small><br>';
    if (is_logged_in()) {
        echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-sm btn-primary mt-2">Edit</a> ';
        echo '<a href="delete.php?id='.$row['id'].'" class="btn btn-sm btn-danger mt-2" onclick="return confirm(\'Delete this post?\')">Delete</a>';

    echo '</div></div>';
}
}
require 'footer.php';
?>
