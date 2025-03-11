<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM article");
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Articles</h1>";
    echo "<ul>";
    foreach ($articles as $article) {
        echo "<li><strong>{$article['title']}</strong>: {$article['body']}</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
