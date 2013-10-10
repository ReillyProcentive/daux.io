<?php
include "header.php";
?>
<body>
	<!-- Hompage -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand pull-left" href="<?php echo $base_url ?>"><?php echo $options['title']; ?></a>
				<p class="navbar-text pull-right">
					Generated by <a href="http://daux.io">Daux.io</a>
				</p>
			</div>
		</div>
	</div>

	<div class="homepage-hero well container-fluid">
		<div class="container">
			<div class="row">
				<div class="text-center span12">
					<?php if ($options['tagline']) { ?>
					<h2><?php echo $options['tagline'];?></h2>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="span10 offset1">
					<?php if ($options['daux_image']) { ?>
					<img class="homepage-image" src="<?php echo $template_path ?>/<?php echo $options['daux_image'];?>" alt="<?php echo $options['title'];?>">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="hero-buttons container-fluid">
		<div class="container">
			<div class="row">
				<div class="text-center span12">
					<?php if ($options['daux_repo']) { ?>
					<a href="https://github.com/<?php echo $options['daux_repo']; ?>" class="btn btn-secondary btn-hero">
						View On GitHub
					</a>
					<?php } ?>
					<?php if (count($options['languages']) > 0) { ?>
					<?php foreach ($options['languages'] as $language_key => $language_name) { ?>
					<a href="<?php echo $base_url . "/" . $language_key . "/"; ?>" class="btn btn-primary btn-hero">
						<?php echo $language_name; ?>
					</a>
					<?php } ?>
					<?php } else { ?>
					<a href="<?php echo $docs_url;?>" class="btn btn-primary btn-hero">
						View Documentation
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="homepage-content container-fluid">
		<div class="container">
			<div class="row">
				<div class="span10 offset1">
					<?php echo $page['html'];?>
				</div>
			</div>
		</div>
	</div>

	<div class="homepage-footer well container-fluid">
		<div class="container">
			<div class="row">
				<div class="span5 offset1">
					<?php if (!empty($options['daux_links'])) { ?>
					<ul class="footer-nav">
						<?php foreach($options['links'] as $name => $url) { ?>
						<li><a href="<?php echo $url;?>" target="_blank"><?php echo $name;?></a></li>
						<?php } ?>
					</ul>
					<?php } ?>
				</div>
				<div class="span5">
					<div class="pull-right">
						<?php if (!empty($options['daux_twitter'])) { ?>
						<?php foreach($options['daux_twitter'] as $handle) { ?>
						<div class="twitter">
							<iframe allowtransparency="true" frameborder="0" scrolling="no" style="width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=<?php echo $handle;?>&amp;show_count=false"></iframe>
						</div>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include "footer.php";
?>