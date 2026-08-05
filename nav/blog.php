<?php
session_start();

include "connection.php";

/* -----------------------------
   Latest Featured Blog
------------------------------*/

$featuredQuery = mysqli_query($connection,"
SELECT *
FROM blogs
WHERE status='Publish'
ORDER BY id DESC
LIMIT 1
");

$featured = mysqli_fetch_assoc($featuredQuery);

/* -----------------------------
   Latest Blogs
------------------------------*/

$blogQuery = mysqli_query($connection,"
SELECT *
FROM blogs
WHERE status='Publish'
ORDER BY id DESC
LIMIT 9
");

/* -----------------------------
   Categories
------------------------------*/

$categoryQuery = mysqli_query($connection,"
SELECT category,
COUNT(*) total
FROM blogs
WHERE status='Publish'
GROUP BY category
ORDER BY total DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>VitalNess | Health Blog</title>

<meta
name="description"
content="Premium Health, Nutrition, Fitness & Wellness Blogs">

<link
rel="preconnect"
href="https://fonts.googleapis.com">

<link
rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link
rel="stylesheet"
href="src/blog.css">

</head>
<body>



    <section class="hero">

<div class="hero-overlay"></div>

<div class="hero-content">

<span class="hero-badge">

🔥 Trusted By 50,000+ Readers

</span>

<h1>

Health Tips

<span>Powered</span>

By Experts

</h1>

<p>

Daily blogs about Fitness,
Nutrition,
Workout,
Mental Wellness,
Weight Loss &
Healthy Lifestyle.

</p>

<div class="hero-buttons">

<a href="#blogs"
class="primary-btn">

Explore Blogs

</a>

<a href="#featured"
class="secondary-btn">

Latest Article

</a>

</div>

<div class="hero-stats">

<div>

<h2>500+</h2>

<span>Articles</span>

</div>

<div>

<h2>50K+</h2>

<span>Readers</span>

</div>

<div>

<h2>98%</h2>

<span>Satisfaction</span>

</div>

</div>

</div>

<div class="hero-image">

<img
src="<?= !empty($featured['image']) ? 'uploads/blog-images/'.$featured['image'] : 'assets/default-blog.jpg'; ?>">

<div class="floating-card">

<i class="fa-solid fa-heart-pulse"></i>

Healthy Living

</div>

</div>

</section>
<section
class="featured"
id="featured">

<div class="featured-image">

<img
src="<?= !empty($featured['image']) ? 'uploads/blog-images/'.$featured['image'] : 'assets/default-blog.jpg'; ?>">

<span>

Latest

</span>

</div>

<div class="featured-content">

<div class="category">

<?= htmlspecialchars($featured['category']) ?>

</div>

<h2>

<?= htmlspecialchars($featured['title']) ?>

</h2>

<p>

<?= htmlspecialchars($featured['short_description']) ?>

</p>

<div class="meta">

<span>

<i class="fa fa-user"></i>

<?= htmlspecialchars($featured['author']) ?>

</span>

<span>

<i class="fa fa-calendar"></i>

<?= date("d M Y",
strtotime($featured['created_at'])) ?>

</span>

</div>

<a
href="single-blog.php?id=<?= $featured['id'] ?>"
class="primary-btn">

Read Article

</a>

</div>

</section>



<?php

$where = "status='Publish'";

if(isset($_GET['search']) && $_GET['search']!="")
{

$search = mysqli_real_escape_string($connection,$_GET['search']);

$where .= " AND (

title LIKE '%$search%'

OR

category LIKE '%$search%'

OR

short_description LIKE '%$search%'

)";

}

$blogQuery = mysqli_query($connection,"
SELECT *
FROM blogs
WHERE $where
ORDER BY id DESC
");

?><section class="categories">

<div class="section-heading">

<span>

Explore

</span>

<h2>

Browse Categories

</h2>

</div>

<div class="category-grid">

<a href="blog.php" class="category-card">

All

</a>

<?php

while($cat=mysqli_fetch_assoc($categoryQuery))

{

?>

<a

href="blog.php?category=<?= urlencode($cat['category']) ?>"

class="category-card">

<?= $cat['category']; ?>

<span>

<?= $cat['total']; ?>

</span>

</a>

<?php

}

?>

</div>

</section><?php

$latestPosts = mysqli_query($connection,"
SELECT *
FROM blogs
WHERE status='Publish'
ORDER BY id DESC
LIMIT 5
");

?>

<aside class="sidebar">

<div class="sidebar-widget">

<h3>

Latest Posts

</h3>

<?php

while($row=mysqli_fetch_assoc($latestPosts))

{

?>

<a

class="latest-post"

href="single-blog.php?id=<?= $row['id']; ?>">

<img

src="uploads/blog-images/<?= $row['image']; ?>">

<div>

<h4>

<?= $row['title']; ?>

</h4>

<p>

<?= date("d M Y",strtotime($row['created_at'])) ?>

</p>

</div>

</a>

<?php

}

?>

</div>

</aside>
<section class="search-section">

<div class="container">

<form action="" method="GET" class="search-box">

<div class="search-input">

<i class="fa-solid fa-magnifying-glass"></i>

<input
type="text"
name="search"
placeholder="Search Health Articles..."
value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">

</div>

<button type="submit">

Search

</button>

</form>

</div>

</section>



<section
class="trending-section"
id="blogs">

<div class="section-heading">

<span>

Latest Articles

</span>

<h2>

Trending Blogs

</h2>

</div>

<div class="trending-grid">

<?php
while($blog=mysqli_fetch_assoc($blogQuery))
{
?>

<div class="blog-card">

<div class="blog-image">

<img
src="uploads/blog-images/<?= $blog['image']; ?>">

<span>

<?= $blog['category']; ?>

</span>

</div>

<div class="blog-content">

<div class="meta">

<i class="fa fa-calendar"></i>

<?= date("d M Y",
strtotime($blog['created_at'])) ?>

</div>

<h3>

<?= $blog['title']; ?>

</h3>

<p>

<?= substr(strip_tags($blog['short_description']),0,120); ?>

...

</p>

<a
href="single-blog.php?id=<?= $blog['id']; ?>">

Read More

<i class="fa-solid fa-arrow-right"></i>

</a>

</div>

</div>

<?php
}
?>

</div>

</section><section class="ai-section">

<div class="ai-box">

<div class="left">

<span>

🤖 AI Powered

</span>

<h2>

Meet Vital AI

</h2>

<p>

Ask anything about

Workout

Diet

BMI

Nutrition

Calories

Weight Loss

Recovery

</p>

<a href="assistant.php">

Start Chat

</a>

</div>

<div class="right">

<img

src="assets/ai.png">

</div>

</div>

</section><section class="popular-tags">

<h2>

Trending Topics

</h2>

<div class="tags">

<?php

$tags=mysqli_query($connection,"
SELECT DISTINCT category
FROM blogs
");

while($tag=mysqli_fetch_assoc($tags))

{

?>

<a href="blog.php?category=<?= urlencode($tag['category']); ?>">

#<?= $tag['category']; ?>

</a>

<?php

}

?>

</div>

</section><section class="newsletter">

<div class="newsletter-box">

<h2>

Join 50,000+

Healthy Readers

</h2>

<p>

Weekly Fitness Tips

Nutrition Guides

Workout Plans

Expert Advice

</p>

<form>

<input
type="email"
placeholder="Enter Email">

<button>

Subscribe

</button>

</form>

</div>

</section>
    
</body>
</html>