<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)]><!--><html class="blog no-js" lang="en"><!--<![endif]-->

<?php $pagenav = "blog";
	  $path = $_SERVER['DOCUMENT_ROOT'];
?>
<?php
  $urlArr = explode('/', $_SERVER["REQUEST_URI"]);
  $urlArr = (array_filter($urlArr));
  $titlesuffix = '';
  $depth = 0;
  foreach($urlArr as $url){
  	$title_path .= ($depth<1 ? '> ':' | ').ucwords(str_replace(array('_','.php'),array(' ',''), $url));
  	$depth++;
  }
  
  if($urlArr[1])
	$crumb = ' &bull; <a href="/'.$urlArr[1].'">'.strtoupper(str_replace('_',' ', $urlArr[1])).'</a>';
  if($urlArr[2])
	$crumb .= ' &bull; <a href="/'.$urlArr[1].'/'.$urlArr[2].'">'.strtoupper(str_replace('_',' ', $urlArr[2])).'</a>';
  if($urlArr[3]){
	$crumb .= ' &bull; '.strtoupper(str_replace(array('_','.php'),array(' ',''), $urlArr[3]));
  }
?>
<head>
	<meta charset="utf-8" />
	<meta property="fb:app_id" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="cleartype" content="on" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<title><?php global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>
	<meta name="description" content="Calvary Christian Center is an Assemblies of God church in Inverness, Florida. We exist to SHARE the good news of God's word, CARE for the needs of those that God entrusts us with, and PREPARE and equip every believer through discipleship programs.">
	<meta name="keywords" content="church, inverness, florida, calvary, assemblies, god, christ, jesus, youth, outreach, missions">
	
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="copyright" content="Copyright 2012 Calvary Christian Center http://www.InvernessCalvary.com" />
	<meta name="language" content="English" />
	<meta name="revisit-after" content="7 days" />
	<meta name="robots" content="index, follow" />
	<meta name="rating" content="general" />
	<meta name="viewport" content="width=device-width, user-scalable=yes" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
	
    <!--ICONS-->
    <link rel="icon" type="image/x-icon" href="/assets/images/browser/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/browser/apple-touch-icon-114x114-precomposed.png" /><!--iPhone 4/Retina Display-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/browser/apple-touch-icon-72x72-precomposed.png" /><!--iPad Gen1-->
	<link rel="apple-touch-icon-precomposed" href="/assets/images/browser/apple-touch-icon-precomposed.png" /><!--Non-Retina/Android 2.1+-->
	
	<!--GENERAL ASSETS-->
	<link rel="stylesheet" href="/assets/css/style.css" type="text/css" charset="utf-8" />
	<script type="text/javascript" src="/assets/js/lib/modernizr.min.js"></script>
	<script type="text/javascript" src="/assets/js/lib/ie-media-queries.js"></script>
	<script type="text/javascript" src="/assets/js/lib/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/lib/jquery.transition.min.js"></script>
	<script type="text/javascript" src="/assets/js/lib/jquery.hoverIntent.minified.js"></script>
	
	<script type="text/javascript" src="/assets/js/code/docload.js"></script>
	<script type="text/javascript">
		var jPage = '<?php echo $pagenav ?>';
		var jSubOne = '<?php echo ($urlArr[1] ? $urlArr[1] : ""); ?>';
		var jSubTwo = '<?php echo ($urlArr[2] ? $urlArr[2] : ""); ?>';
		var jSubTre = '<?php echo ($urlArr[3] ? $urlArr[3] : ""); ?>';
	</script>
		
	<!-- Load jQuery, SimpleModal and Basic JS files -->
	<script type='text/javascript' src='/assets/js/lib/jquery.simplemodal.js'></script>
	<link type='text/css' href='/assets/css/modal.css' rel='stylesheet' media='screen' />
	
	<script type="text/javascript" src="/assets/js/lib/fullcalendar.js"></script>
	<link rel="stylesheet" href="/assets/css/fullcalendar.css" type="text/css" charset="utf-8" />
	
	<script type="text/javascript" src="/assets/js/lib/jquery-ui-1.8.21.custom.min.js"></script>
	<link rel="stylesheet" href="/assets/css/smoothness/jquery-ui-1.8.21.custom.css" type="text/css" charset="utf-8" />
	
	<script type="text/javascript" src="/assets/js/lib/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="/assets/js/lib/jquery.mousewheel.min.js"></script>
	<link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.css" type="text/css" charset="utf-8" />
	
	<script type="text/javascript" src="/assets/js/code/inner.js"></script>
</head>

<body id="blog" class="inner_page">
	<?php include $path.'/assets/includes/header.php'; ?>
	<div id="outer_wrapper">
		<div id="inner_wrapper">
			<div id="top_logo"></div>
			<nav>
				<ul id="desktop_nav">
				<?php $dom = "nav"; include $path.'/assets/includes/nav.php'; ?>
				</ul>
			</nav>
			<div id="inner_header">
				<div>
					<span style="float: right; width: 2px; height: 170px;"></span>
					<span style="float: right; clear: right; width: 80px; height: 60px;"></span>
					<a target="_blank" href="http://www.youversion.com/bible/john.14.niv">
					<p>John 14:6</p>
					<p>"Jesus answered, 'I am the way and the truth and the life. No one comes to the Father except through me'"</p>
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
				