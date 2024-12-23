<?php
include 'config.php';

// ดึงข้อมูลโพสต์จากฐานข้อมูล
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Web Blog</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="categories">
            <h2>Blog Categories</h2>
            <div class="category-list">
                <div class="category">Business</div>
                <div class="category">Featured Posts</div>
                <div class="category">Gallery</div>
                <div class="category">Lifestyle</div>
                <div class="category">Projects</div>
            </div>
        </section>

        <section class="latest-posts">
            <h2>Latest Posts</h2>
            <div class="post-list">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <article class="post">
                            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                            <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                            <time><?php echo date('F j, Y, g:i a', strtotime($row['created_at'])); ?></time>
                        </article>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No posts available.</p>
                <?php endif; ?>
            </div>
        </section>

        <aside>
            <div class="about-me">
                <h2>About Me</h2>
                <p>This is the place to discover how to have a more meaningful life. A life full of confidence and peace.</p>
            </div>
        </aside>
    </main>

    <footer>
        <p>&copy; 2024 Web Blog. All Rights Reserved.</p>
    </footer>
</body>
</html>
ห