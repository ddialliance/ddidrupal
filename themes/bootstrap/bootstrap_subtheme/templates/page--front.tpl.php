<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php //print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
       <!-- <h1 class="page-header"><?php print $title; ?></h1> -->
       <!-- <p style="font-size: 1.4em;">A metadata specification for the social and behavioral sciences</p> -->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php 
      	//print render($page['content']);
       ?>
       
       
       
       
       
       
       
<div class="row">
<div class="col-md-12">	
  	<div class="well">
  		<h1>Document, Discover and Interoperate</h1>
  		<p style="font-size: 1.2em;color: #433B2A;">Documenting data with DDI facilitates interpretation and understanding -- both by humans and computers. The freely available international DDI standard describes data that result from observational methods in the social, behavioral, economic, and health sciences. Use DDI to <strong>D</strong>ocument, <strong>D</strong>iscover, and <strong>I</strong>nteroperate!</p>
  	</div>
</div>
</div>       
       
       
       
       
       
       
       
       
       
              
<div class="row">

<div class="col-md-3 button-box">
<a class="ddi-orange-btn ddi-btn" href="/explore-documentation">
<span class="fade-out"><i class="fa fa-download fa-5x"></i><br /><span class="ddi-btn-lg">Specification</span></span>
<span class="fade-in">Explore<br /> Specification</span>
</a>
</div>
  		
<div class="col-md-3 button-box">
<a class="ddi-red-btn ddi-btn" href="/resources/tools">
<span class="fade-out"><i class="fa fa-wrench fa-5x"></i><br /><span class="ddi-btn-lg">Tools</span></span>
<span class="fade-in">Browse the entire<br /> list of tools</span>
</a>
</div>

<div class="col-md-3 button-box">
<a class="ddi-green-btn ddi-btn" href="/training">
<span class="fade-out"><i class="fa fa-graduation-cap fa-5x"></i><br /><span class="ddi-btn-lg">Learn</span></span>
<span class="fade-in">Learn How<br />to Use DDI</span>
</a>
</div>	
 
<div class="col-md-3 button-box">	
<a class="ddi-blue-btn ddi-btn" href="/community">
<span class="fade-out"><i class="fa fa-users fa-5x"></i><br /><span class="ddi-btn-lg">Contribute</span></span>
<span class="fade-in">Join the<br />DDI Community</span>
</a>
</div>	
  		
</div>
       
       
       
       
       
       
       
       
       
       
       
       
       
       

<div class="row">
<div class="col-md-12">	
  	<div class="well">
  		<h2 style="text-align: center;">Why Use DDI?</h2>
  		<ul class="checklist">
  		<li><i class="fa fa-check"></i> Generate interactive codebooks</li>
  		<li><i class="fa fa-check"></i> Implement data catalogs</li>
		<li><i class="fa fa-check"></i> Build question banks</li>
		</ul>
		
		<ul class="checklist">
		<li><i class="fa fa-check"></i> Create concordance mappings</li>
		<li><i class="fa fa-check"></i> Harmonize and compare data</li>
		<li><i class="fa fa-check"></i> Manage longitudinal data sets
  		</ul>
  		<div style="clear: both;"></div>
  	
  		<!--
  		<p>DDI can help with many types of tasks, including development of interactive codebooks, searchable data catalogs for discovery, question banks, concordances, harmonization and comparison projects, longitudinal data management systems, and more.</p>-->
  		<p class="more-link">
  		<a href="/benefits-of-ddi" style="text-align: center;" class="btn">Find Out More!</a>
  		</p>
  		<!-- <hr style="margin-bottom: 0;border-top: 2px solid #007682;"/> -->
  	</div>
</div>
</div>        
       
       
       
       
       
       
       
       
       


  









  
<div class="row">
<div class="col-md-6">
<div class="well">
  <h2 style="text-align: center;">Featured DDI Adopters </h2>
  <?php print views_embed_view('ddi_projects_new','block_1'); ?>
  <br />
  <br />
  <p class="more-link"><a href="/ddi-adopters" class="btn">View more adopters</a></p>
</div>
</div>
  	
  	 
  	 
<div class="col-md-6">	 
<div class="well">
  <h2 style="text-align: center;">What's New</h2>
  <?php print views_embed_view('Announcements','announcements_frontpage'); ?>
</div>
</div>	 
  	 
  		</div>
  		
<!--  
<div class="row">  



<div class="col-md-12">	 
<div class="well">
  <h2>Publications</h2>
	<div class="ddi-news-title"><a href="#"><strong></strong></a></div>
</div>
</div>	 
  	 
</div>
-->  		
  		
      
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
