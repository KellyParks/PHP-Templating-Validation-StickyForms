<!DOCTYPE html>
<head>
	<title>Blog</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/blog.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
include 'menu.html';
?>
	<main>
    <h1>Blog</h1>
    <article>
		<section id="container">
			<section class="journalEntryTitle">
				<h2>Book Review: Murach's HTML5 and CSS3 (third edition)</h2>
				<p>A solid training manual and reference guide by Anne Boehm and Zak Ruvalcaba</p>
			</section>
			<time datetime="">December 5, 2015</time>
			</section>
			<img src="images/book.png">
			<section id="journalEntry">
			<p>When it comes to programming and front-end web development, I've found that books often provide a depth of understanding that is hard to find in online tutorials and resources. Most people who are serious about their craft actively seek to develop a solid foundation on which to build upon. If you're looking for a book to help you upgrade your HTML and CSS skills to today's standards -- or even if you are learning from scratch -- you should grab a copy of Murach's HTML5 and CSS3 (third edition). It's written for complete beginners, but with all the new features in the newest HTML and CSS, it also makes a valuable reference guide for more experienced web developers.</p>
			<p>This book is surprisingly up-to-date, and contains downloadable exercises to help you learn. In addition to the describing the basics -- the box model, HTML structure, and CSS rules -- it also covers modern topics such as responsive design through media queries, new CSS3 selectors, and affects and HTML5 semantic elements, including the video and audio tags. It includes a bit of jQuery!</p>
			<p>This book is a very solid guide for learning about the new tried-and-tested HTML and CSS features. However, it's not a great resource for developers who are trying to learn about clean and modern design (the webpage examples in the book are very, very basic -- think 1990's style). It also doesn't cover the more "bleeding-edge" aspects of CSS3 -- such as calc() and element() -- which might be more helpful to advanced users.</p>
			<p>All and all, Murach's newest edition of their HTML5 and CSS3 guide provides a solid starting point for building foundational knowledge website structure.</p>
		</section>
		</article>
	</main>
	<?php 
	include 'footer.html';
	?>
</body>
</html>
