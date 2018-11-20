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
 * @ingroup templates
 */
?>
<header id="banner">
  <div class="banner-logo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <a href="https://thesource.nrel.gov/"><div class="logo"></div></a>
        </div>
        <button type="button" class="navbar-toggle searchbar-toggle collapsed" data-toggle="collapse" data-target="#searchbar-collapse">
          <i class="fa fa-search"></i><span class="sr-only">Toggle Search</span>
        </button>
        <div class="col-sm-6">
          <div class="navbar-collapse collapse" id="searchbar-collapse">
            <form method="get" class="searchbar-form form-inline ThunderstoneForm" id="ThunderstoneSearchForm" action="https://search3.nrel.gov/texis/search/">
              <div class="form-group">
                <label for="search" class="sr-only">Search theSOURCE</label>
                <input TYPE="hidden" NAME="pr" value="metasource">
                <input type="text"   id="query" name="query" maxlength="2047" placeholder="Search theSOURCE" class="form-control">
                <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
            <div class="hidden-sm hidden-md hidden-lg">
              <form action="https://thesource.nrel.gov/phonebook/index.php" method="post" class="searchbar-form form-inline" >
                <div class="form-group">
                  <label for="search" class="sr-only">Search Employee Directory</label>
                  <input id="emp-search" type="text" placeholder="Search Employee Directory" name="zzsearch" class="form-control">
                  <input name="attribute" type="hidden" value="name">
                  <input name="criterion" type="hidden" value="contains">
                  <button type="submit" class="btn btn-default">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--startindex-->
<!-- == END GLOBAL BANNER == -->
<!-- SOURCE GLOBAL TOP NAV -->
<!-- == TOP NAVIGATION == -->
<!--stopindex-->
<div id="topnav" class="navbar-wrapper corporate-topnav">
  <nav class="<?php print $navbar_classes; ?>">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown" data-topnav="organizations">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organizations </a>
              <ul class="dropdown-menu">
                <li><a href="https://thesource.nrel.gov/communications/">Communications &amp; Public Affairs</a></li>
                <li><a href="https://thesource.nrel.gov/director/">Director</a></li>
                <li><a href="https://thesource.nrel.gov/eshq/index.html">Environment, Safety, Health &amp; Quality</a></li>
                <li><a href="https://thesource.nrel.gov/general-counsel/">General Counsel</a></li>
                <li><a href="https://thesource.nrel.gov/hr/">Human Resources</a></li>
                <li><a href="https://thesource.nrel.gov/its/index.html">Information Technology Services</a></li>
                <li><a href="https://thesource.nrel.gov/internal-audit/">Internal Audit</a></li>
                <li><a href="https://thesource.nrel.gov/ipid/index.html">Institutional Planning, Integration, &amp; Development</a></li>
                <li><a href="https://sp2013.nrel.gov/sites/ocfo">Office of the CFO</a></li>
                <li><a href="https://thesource.nrel.gov/ombuds/">Ombuds</a></li>
                <li><a href="https://thesource.nrel.gov/procurement/index.html">Procurement</a></li>
                <li><a href="https://thesource.nrel.gov/science-technology/index.html">Science &amp; Technology</a></li>
                <li><a href="https://thesource.nrel.gov/security/">Security &amp; Emergency Preparedness</a></li>
                <li><a href="https://thesource.nrel.gov/site-operations/index.html">Site Operations</a></li>
                <li><a href="https://thesource.nrel.gov/techtransfer/">Technology Transfer</a></li>
              </ul>
            </li>
            <li class="dropdown" data-topnav="tools">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business Tools </a>
              <ul class="dropdown-menu">
                <li><a href="https://myaccess.nrel.gov/workday">Workday</a></li>
                <li><a href="https://sp2013.nrel.gov/sites/ocfo/OracleReimplementation/Pages/Charge%20Code%20Look-up%20Tool.aspx">Charge Code Look-up</a></li>
                <li><a href="https://myaccess.nrel.gov/travelexpense">Concur</a></li>
                <li><a href="https://sp2013.nrel.gov/sites/BD/Pages/Home.aspx">Business and Program Development Portal</a></li>
                <li><a href="https://epp.nrel.gov/">Enterprise Project Planning (EPP)</a></li>
                <li><a href="https://passagepoint.nrel.gov/pp/wi1/">Expected Visitor's Notification</a></li>
                <li><a href="https://nrel.service-now.com/sp">IT Service Portal</a></li>
                <li><a href="https://nrel.plateau.com/learning/user/login.jsp">Learning Gateway</a></li>
                <li><a href="https://nquire.nrel.gov/">NQuIRE</a></li>
                <li><a href="https://pricingtool.nrel.gov/">OCFO Pricing Tool (CDW)</a></li>
                <li><a href="https://erp.nrel.gov/">Oracle EBS</a></li>
                <li><a href="https://sp2013.nrel.gov/Pages/Home.aspx">ThePOINT</a></li>
                <li><a href="https://thesource.nrel.gov/business-tools/index.html">See All</a></li>
              </ul>
            </li>
            <li>
            <a href="https://thesource.nrel.gov/src-index/index.html">A-Z Index</a></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <div class="navbar-collapse collapse hidden-xs"><form class="searchbar-form form-inline" action="https://thesource.nrel.gov/phonebook/index.php" method="post">
              <div class="form-group"><label class="sr-only" for="emp-search-mobile">Search Employee Directory</label> <input id="emp-search-mobile" class="form-control" type="text" placeholder="Search Employee Directory" name="zzsearch" /> <input type="hidden" value="name" name="attribute" /> <input type="hidden" value="contains" name="criterion" /> <button class="btn btn-default">Search</button></div>
            </form></div>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--startindex-->
<!-- == END TOP NAVIGATION == -->
<!-- SUBSITE BANNER -->
<!--stopindex-->
<div class="banner-site">
  <div class="container">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
  </div>
</div>
<!--startindex-->
<div class="container main-container <?php print $container_class; ?>" id="content">
  <header role="banner" id="page-header">
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->
  <div class="row">
    <!--stopindex-->
    <div class="hidden-sm hidden-md hidden-lg">
      <div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <div class="container"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false"><span class="icon-bar-holder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span><span class="navbar-toggle-label">menu</span></button><div class="collapse navbar-collapse" id="collapsemenu">
                <nav class="sidenav">
                  <?php print render($page['sidebar_first']); ?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 hidden-xs">
      <nav class="sidenav">
        <?php print render($page['sidebar_first']); ?>
      </nav>
    </div>
    <!--startindex-->
    <!-- ===== BEGIN CONTENT ============================================== -->
    <section class="col-sm-9 col-md-9">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
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
      <?php print render($page['content']); ?>
    </section>
  </div>
  <!--container-->
  <!-- == GLOBAL FOOTER == -->
  <!--stopindex-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php print render($page['footer']); ?>
          <div class="last-updated">
            <?php print t('Last Updated:') . ' ' . $last_updated; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>