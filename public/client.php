<section class="client client-overview">
	<h2>The Client Project</h2>
	<hr>
	<h3>The Assignments</h3>
	<div class="assignments">
		<div>
			<a href="#client"><h4>The Client</h4></a>
		</div>
		<div>
			<a href="#proposal"><h4>The Proposal</h4></a>
		</div>
		<div>
			<a href="#information-architecture"><h4>Information Architecture</h4></a>
		</div>
		<div>
			<a href="#brand-guide"><h4>The Brand Guide</h4></a>
		</div>
		<div>
			<a href="#wireframes"><h4>The Wireframes</h4></a>
		</div>
		<div>
			<a href="#mockups"><h4>The Mockups</h4></a>
		</div>
		<div>
			<a href="#code"><h4>The Code</h4></a>
		</div>
	</div>
</section>
<section>
	<h2 id="client">The Client</h2>
	<hr>
	<p>Must be a business or organization in need of a website. Can be a real or fictitious business <br>Examples: An non-profit organization like animal shelter, food pantry, unicorn conservatory, or a business like a honey distributor, sandwich shop, bike emporium, etc... Keep in mind that this entire project will be a great piece for a portfolio so keep it work appropriate.</p>
	<h3>The Requirements</h3>
	<p>Name your file: lastnamefirstinitial-theclient<br>You will turn in a word document or pdf with the following information:</p>
	<ul>
		<li>Name of Client</li>
		<li>Client Logo
			<ul>
				<li>Black and white only, no color yet</li>
				<li>You can use free clipart, free icon, or your own artwork</li>
				<li>This <a href="https://www.flaticon.com/">website</a> has a large selection of free icons</li>
			</ul>
		</li>
		<li>Short Description of the client (4-5 sentences):
			<ul>
				<li>Where are they located?</li>
				<li>What do they do?</li>
			</ul>
		</li>
		<li>Target audience of the client:
			<ul>
				<li>Age</li>
				<li>Gender</li>
				<li>Location</li>
				<li>Job</li>
				<li>Interests</li>
			</ul>
		</li>
	</ul>
	<?php
	$doc = \models\document::fromid(43);
	if($doc->exists()){?>
		<a href="<?=$doc->file->url()?>" target="_blank">Example</a>
	<?php }?>
</section>
<section>
	<h2 id="proposal">The Proposal</h2>
	<hr>
	<h3>The Requirements</h3>
	<p>Name your file: lastnamefirstinitial-theproposal<br>You will turn in a word document or pdf with the following information:</p>
	<ul>
		<li>Nice Cover Page
			<ul>
				<li>Client name</li>
				<li>Your Name</li>
				<li>Class Name</li>
			</ul>
		</li>
		<li>Business Overview of the Client</li>
		<li>Goal of the Website</li>
		<li>Website Project Overview
			<ul>
				<li>Website Name</li>
				<li>Website Domain</li>
				<li>Name of Client</li>
				<li>List of individual Web Pages (minimum of 5 web pages)</li>
			</ul>
		</li>
		<li>Statement of work
			<ul>
				<li>Deliverables (These are pieces of the project you will be giving to the Client)
					<ul>
						<li>Information Architecture of the Website</li>
						<li>Wireframes of the Website for Mobile and Desktop</li>
						<li>Design of the website for Mobile and Desktop</li>
						<li>Coding of the Website in HTML5 and CSS3</li>
						<li>Deploy of the Website</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	<p>Make it look nice! Remember your are proposing to design a website for the client (your instructor). They say not to judge a book by its cover, but that isn't true for design. Spelling and grammar are important! Make the client believe you are competent.</p>
	<?php
	$doc = \models\document::fromid(44);
	if($doc->exists()){?>
		<a href="<?=$doc->file->url()?>" target="_blank">Example</a>
	<?php }?>
</section>
<section>
	<h2 id="i nformation-architecture">Information Architecture</h2>
	<hr>
	<p>Name your file: lastnamefirstinitial-informationarchitecture<p>
	<p>Analyze and map out the client's information architecture of their future website. The website needs at least 5 individual web pages. You are going to map out what content will go on each page. When I say content I don't mean full paragraphs, just a few words that sufficiently describe the content, like phone number, our story, etc...</p>
	<p>You can do this digitally or on paper. Insert a image of the architecture analysis. (If you create the information architecture on paper, make sure the photo you take is readable).</p>
	<?php
	$img = \models\image::fromid(176);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Example 1</a>
	<?php }?>

	<?php
	$img = \models\image::fromid(177);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Example 2</a>
	<?php }?>
</section>
<section>
	<h2 id="brand-guide">The Brand Guide</h2>
	<hr>
	<p>The brand guide will be a helpful tool as you move from wireframes to your website mockups. If you reference the guide as you build the mockups it will keep the design consistent from mobile to desktop and page to page.</p>
	<h3>The Requirements</h3>
	<p>Name your file: lastnamefirstinitial-brandguide<p>
	<ul>
		<li>Short statement outlining the mission or purpose of the business and defining its audience.</li>
		<li>Logo</li>
		<li>Color Palette
			<ul>
				<li>Think about primary and secondary colors. Do these colors have a hover color or is the secondary color the hover color, etc... Are your calls to action a particular color?</li>
				<li>Make sure to include either RGB or Hex numbers for the colors you select. Not CMYK that is for print designs.</li>
			</ul>
		</li>
		<li>Typography
			<ul>
				<li>Choose your headline and body fonts (remember that there are limited default fonts that web browsers support, but if you are not satisfied with those <a href="https://fonts.google.com/">Google Fonts</a> has a huge selection that are easy to use for web development</li>
			</ul>
		</li>
		<li>Copy Writing Guidelines
			<ul>
				<li>This is the voice of the text for the brand. Is the voice happy, serious, uplifting, snarky, etc...</li>
			</ul>
		</li>
		<li>Images
			<ul>
				<li>What are the images for the brand like? Soft and warm, black and white. Do they feature people or animals? Are they all nature images?</li>
			</ul>
		</li>
		<li>Icons (optional)
			<ul>
				<li>Does the brand have icons? If so, what do they look like?</li>
			</ul>
		</li>
	</ul>
	<h3>The Tools</h3>
	<p>Design the wireframes in Adobe Illustrator, Adobe Photoshop, Adobe InDesign, or Canva.</p>
	<?php
	$img = \models\image::fromid(178);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Example</a>
	<?php }?>
</section>
<section>
	<h2 id="wireframes">The Wireframes</h2>
	<hr>
	<p>You have now reached the stage before fully designing your clients website, the wireframes. You will use the information architecture and sitemap as reference for your wireframes. The wireframes will have a low level of fidelity. Focus on layout and high-level interactions (navigation and call to action buttons).</p>
	<p>
	<h3>The Requirements</h3>
	<p>Submit your files in a zipped folder with the name: lastnamefirstinitial-wireframes<p>
	<ul>
		<li>One desktop and mobile wireframe per website page. 10 total wireframes</li>
		<li>Gray-scale. Notice the only color in the examples is active links and is not a design color.</li>
		<li>Elements and content will be represented with boxes or lines, with label descriptions</li>
		<li>Utilize arrows and text to describe how interactive elements will function</li>
		<li>No pictures</li>
		<li>No content like paragraphs</li>
	</ul>
	<h3>The Tools</h3>
	<p>Design the wireframes in Adobe Illustrator, Adobe Photoshop, Adobe InDesign, or Canva.</p>
	<?php
	$img = \models\image::fromid(179);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Desktop Example</a>
	<?php }?>
	
	<?php
	$img = \models\image::fromid(180);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Mobile Example</a>
	<?php }?>
</section>
<section>
	<h2 id="mockups">The Mockups</h2>
	<hr>
	<p>You have reached the design phase of the client project. Using the wireframes and brand guide you created, you will build a mockup design for each of the web pages both desktop and mobile.</p>
	<h3>The Requirements</h3>
	<p>Submit your files in a zipped folder with the name: lastnamefirstinitial-mockups<p>
	<ul>
		<li>One desktop and mobile design per website page. 10 total designs</li>
		<li>Full Color</li>
		<li>Copy can be lorem ipsum. It is recommended for call to actions, tag lines, short text to use the actual content.</li>
	</ul>
	<h3>The Recommendations</h3>
	<ul>
		<li>Design interactive elements like buttons, mobile navigation, etc...</li>
		<li>Design the header for mobile and desktop before moving on to main content</li>
		<li>Remember order matters in html. It is really difficult to move an elements out of the order they are listed in html. For instance if you have one column for mobile and three columns for desktop, and you want to move the last element in mobile to the first in desktop it is difficult to accomplish.</li>
	</ul>
	<h3>The Tools</h3>
	<p>Design the wireframes in Adobe Illustrator, Adobe Photoshop, Adobe InDesign, or Canva.</p>
	<?php
	$img = \models\image::fromid(181);
	if($img->exists()){?>
		<a href="<?=$img->url()?>" target="_blank">Example</a>
	<?php }?>
</section>
<section>
	<h2 id="code">The Code</h2>
	<hr>
	<h3>The Requirements</h3>
	<ul>
	<li><a href="/labs/final-project-setup">Setup for the files</a></li>
		<li>Minimum 5 html files</li>
		<li>Minimum 1 CSS file</li>
		<li>All images must load</li>
		<li>Links must function properly</li>
		<li>All of your HTML files must have <strong>NO</strong> validation errors! (If you get any warnings clear them with me before turning it in.)</li>
		<li>All of your CSS must have NO errors (some warnings are fine but look at the warning to make sure its not something you can fix.)</li>
		<li>Must be free of spelling and grammatical errors.</li>
		<li><a href="/labs/adding-a-favicon">Must have a favicon that matches the client's brand</a></li>
		<li>Your site must look good on multiple screen widths</li>
		<li>No front-end frame works allowed. (examples are: Bootstrap, Angular, Meteor)</li>
		<li>Your site must be deployed using GitHub pages (instructions in second part of <a href="/labs/final-project-setup">file setup)</a></li>
	</ul>
	<h3>The Tools</h3>
	<ul>
		<li>Visual Studio Code</li>
		<li>All of your coding knowledge</li>
	</ul>
	<h3>The Grade Rubric</h3>
	<h4>Each web page is worth 4 points. 20 points/5 web pages</h4>
	<em>If you have more than 5 web pages I pick the best ones</em>
	<p>The 4 point breakdown:</p>
	<ul>
		<li>1 pt - Valid HTML</li>
		<li>1 pt - Valid CSS</li>
		<li>1 pt - Images loading and links functioning</li>
		<li>1 pt - Free of spelling and grammatical errors in content.</li>
	</ul>
</section>