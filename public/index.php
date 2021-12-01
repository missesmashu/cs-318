<section class="overview">
	<h2>The Class</h2>
	<hr>
	<p>In this course we will investigate the design of static web pages, coding standards, accessibility guidelines, and technologies of client-side Web page design. Hypertext Markup Language (HTML), Cascading Style Sheets (CSS), and techniques for controlling page layout, animations, and user interactions.</p>
	<p>Upon successfully completing this course you will be able to:</p>
	<ul>
		<li>Complete the entire process of creating an original website for a client.</li>
		<li>Become familiar with web design principles and best practices.</li>
		<li>Utilize standard tools for web development.</li>
		<li>Create web pages that are accessible and maintainable.</li>
		<li>Use cascading style sheets to stylize content.</li>
		<li>Publish content on the web for others to consume.</li>
	</ul>
	<a href="/syllabus" class="button">Syllabus</a>
</section>
<section class="client">
	<h2 id="client">The Client Project</h2>
	<hr>
	<p>Description of whole client project here.</p>
	<a href="/client" class="button">Client Details</a>
</section>
<section class="portfolio">
	<h2 id="portfolio">The Portfolio Project</h2>
	<hr>
	<p>For this project you will be designing and creating a website to communicate the essence of "you" to put on display for the world wide-web and most importantly future employers or clients.</p>
	<a href="/portfolio" class="button">Portfolio Details</a>
</section>
<section class="labs">
	<header>
		<h2 id="labs">The Labs</h2>
		<hr>
	</header>
	<?php foreach(\models\lab::query() as $lab){?>
		<a href="<?=$lab->path()?>"><?=$lab->name?></a>
	<?php }?>
</section>