<div id="mainPageContainer">

  <!--Masthead-->
  <div id="mastHead">
    <div id="mhWrapper" class="wrapper">
      <div id="mhContainer">
        
        <div id="mhLeft">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>

        <div id="mhRight">
          <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </div>

      </div><div id="mhContainerWrapper"></div>
    </div>
  </div>

  <!--Title-->
  <div id="titleWrapper" class="wrapper">
    <div id="titleContainer">
      <div id="tcLeft"><?php print $title; ?></div>
      <div id="tcRight"></div>
    </div>
  </div>

  <!--Content-->
  <div id="contentWrapper" class="wrapper">
    <div id="contentContainer">
      
      <div id="ccBreadcrumb">
        <div id="ccbTriangle"></div>
        <div id="ccbText"><?php print "$breadcrumb" ?></div>
      </div>

      <div id="ccContent<?php $page['leftSidebar'] ? print 'Double' : print 'Single' ?>">
        <div id="ccLeft"><?php print render($page['leftSidebar']); ?></div>
        <div id="ccRight">
          <?php if ($messages): ?>
            <div id="messages"><div class="messagesClearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>

    </div>

    <div id="contentTriangle"></div>
  </div>

  <!--Primary footer-->
  <div id="footer"><div id="footerWrapper" class="wrapper">
    <div id="footerContainer">
      <div id="footerLeft"><?php print render($page['footerLeft']); ?></div>
      <div id="footerCenter"><?php print render($page['footerCenter']); ?></div>
      <div id="footerRight"><?php print render($page['footerRight']); ?></div>
    </div>
  </div></div>

  <!--Credits-->
  <div id="credits"><div id="creditsWrapper" class="wrapper">
    <div id="creditsContainer">
      <div id="creditsLeft"><?php print render($page['creditsLeft']); ?></div>
      <div id="creditsRight"><?php print render($page['creditsRight']); ?></div>
    </div>
  </div></div>

</div>