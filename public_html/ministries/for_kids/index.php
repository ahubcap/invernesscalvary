<?php $pagenav = "ministries";
	  $path = $_SERVER['DOCUMENT_ROOT'];
?>

<?php include $path.'/assets/includes/htmlhead.php'; ?>
	<body id="ministries" class="inner_page">
	<?php include $path.'/assets/includes/header.php'; ?>
	<div id="outer_wrapper">
		<div id="inner_wrapper">
			<div id="top_logo"></div>
			<nav>
				<ul id="home_nav">
				<?php $dom = "nav"; include $path.'/assets/includes/nav.php'; ?>
				</ul>
			</nav>
			<div id="inner_header">
				<div>
					<span style="float: right; width: 2px; height: 170px;"></span>
					<span style="float: right; clear: right; width: 80px; height: 60px;"></span>
					<a target="_blank" href="http://www.youversion.com/bible/isa.54.niv">
					<p>Isaiah 54:13</p>
					<p>"All your children shall be taught by the Lord, and great shall be the peace of your children."</p>
					</a>
				</div>
			</div>
			<div id="mid_blocks">
				<p id="breadcrumb"><a href="/">HOME</a> <?php echo $crumb; ?><span id="hashcrumb"></span></p>
				<div id="side_nav">
					<?php $dom = "side"; include $path.'/assets/includes/nav.php'; ?>				
					<img id="imagemap_image" style="position:absolute; top:0; width:306px; height:600px;" src="/assets/images/blank.png" usemap="#side_nav_map_04" />
				</div>
				<div id="content">
					<h1>MINISTRIES FOR KIDS</h1>
					<p>
					We love kids, and we love pointing them to Jesus. In this crazy world Jesus is the only person who will never change and always be there for our kids.
					Our children's ministry has designed programs to engage and educate children of every age. We are staffed with caring, trained, adult leaders 
					and volunteers. You can trust that your children will learn the truth of God's word while having fun in a nurturing environment.
					</p>
					<p>
					If you would like to join our dedicated staff and serve with any age group, please click the "serve" button on the right. 
					If you would like to support this ministry in other ways, you could make a donation by clicking the "give to ministry" button on the right.					
					</p>
					
					<img style="width: 460px; height: 2px; margin-left: 6px;" src="/assets/images/right_divider.png" />
					
					<div id="hash01" class="hashhide">
						<h2>Nursery (0-2 years old) &middot; <span style="font-size: 14px;">Sunday 8:30am & 10:30am</span></h2>
						<p>Our nurseries are safe environments staffed with loving, caring volunteers. Babies in our infant 
						nursery enjoy lots of cuddling and attention. Walkers up to age 2&frac12; have fun exploring toys and books 
						with our caretakers. We would love to have your little ones come and stay with us while you enjoy our 
						service.</p>
						<p><em>You can find us in the Educational Building, Room 1.</em></p>
						<p>We would also like to extend you an invitation to have your newborn dedicated to God. There is no 
						greater moment when parents sense that their child is a gift from God. In these joyful moments, our 
						pastors have the privilege of sharing how parents can express their full appreciation to God through 
						baby dedication. While some Christian ministers baptize babies, dedicating a child acknowledges God's 
						sovereignty not only over the child, but also over Mom and Dad.</p>
						<p><a href="/contact/#dedication">Sign up</a> for the next service when we provide baby dedication.</p>
						<p>We also provide baby changing stations in our bathrooms for your convenience and a nursing mothers 
						room so you can still enjoy the service with you newborn.</p>
					</div>
					
					<div id="hash02" class="hashhide">
						<h2>Wee-Church (3-4 years old) &middot; <span style="font-size: 14px;">Sunday 8:30am & 10:30am</span></h2>
						<p>Wee-Church teaches your little ones that God made them, God loves them and Jesus wants to be their 
						friend. We emphasize these teachings through Bible lessons and stories designed especially for your 
						pre-schooler. Your children will be given adequate amounts of time for play, learning, organized 
						activities and snack.</p>
						<p><em>You can find us in the Educational Building, Rooms 8 & 9.</em></p>
					</div>
					
					<div id="hash03" class="hashhide">
						<h2>Calvary Kids (5-11 years old) &middot; <span style="font-size: 14px;">Sunday 8:30am & 10:30am</span></h2>
						<div class="floating-logo-right"><img src="/assets/images/calvarykids.png" alt="" /></div>
						<p>Church has never been so fun!  Our strategy is simple: Say it Big and Say it often! Each week is different, as we endeavor to open the Bible up to our students in exciting and engaging ways.  Kids will experience the truth of God’s Word, and have an opportunity to apply it and dig deeper if they’d like.  
We understand every child is different, and we strive to meet each child where they are, especially those with special needs. We, employ multiple teaching strategies, to keep things fun and to enable us to teach the squirmiest and toughest of students.</p>
<p>Calvary Kids is not just for kids, but it’s for the whole family!  We believe what happens in the home is more important than what happens at the Church, therefore our services are meant to be a catalyst to encourage a families’ walk with Christ.  We partner with you as parents, by sending home strategic materials that will keep you in the loop, and keep you plugged into the lessons your children are learning.</p>
<p>Can’t wait to see you this Sunday!</p>
					</div>
					
					<div id="hash04" class="hashhide">
						<h2>Life Group Kids</h2>
						<div class="floating-logo-right" style="margin-bottom: 5px;"><img src="/assets/images/life-groups-kids.png" alt="" /></div>
						<p>All kids are welcome in our Life Group.  Each week as parents gather in Life Groups, to discuss the latest sermon, our kids will partake in a similar type group at the home where the Life Groups meet.  We have specific activities for each age.  </p>
						<div class="clear"></div>
					</div>
					
				<?	/*<div id="hash05" class="hashhide">
						<h2>Agape Daycare & Preschool</h2>
						<p>Within our church, Agape Daycare & Preschool exists to love, nurture and educate children in a secure Christian environment. 
						We are passionate about their academic, spiritual and social skills developing at age-appropriate levels. Our qualified and trained 
						staff will work hand-in-hand with your child to encourage and develop those skills. We believe God has great things for your child 
						and these early years are foundational for their sense of wonder and worth.</p>
						<p>Agape is open Weekdays, 6:30am to 6:00pm and we offer Preschool classes for infants through pre-kindergarten. We also have before 
						and aftercare programs for IPS, HES & PEG.</p>
						<p><em>Summer Programs run from June 7 through July 30.</p></em>
						<p><em>If you would like more information, please <a href="mailto:contact@invernesscalvary.com">email</a> or call at (352) 637-5100 ext.116</p></em>
					</div> */	?>
					<p>
					If you would like <a href="/contact/#general">more information</a> regarding any of our Calvary Kids age groups and programs we would love to help.
					</p>
				
				</div>

				<?php include $path.'/assets/includes/right.php'; ?>
				<?php include $path.'/assets/includes/imagemap.php'; ?>
			</div>
			<div style="clear:both;height:0;"></div>
	<?php include $path.'/assets/includes/footer.php'; ?>
