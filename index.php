<?php
defined('_JEXEC') or die('Restricted access');
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/production.css" type="text/css" />
</head>
<body>

<!-- Joomla Content -->
<?php if ($this->countModules('toolbar')) : ?>
    <!-- menu -->
    <div id="toolbar" class="navbar-fixed-top navbar-inverse">
        <div class="container">
            <jdoc:include type="modules" name="toolbar" style="xhtml" />
        </div>
    </div>
<?php endif; ?>

<!-- header -->
<div class="header">
    <div class="container">
        <!-- header -->
        <header id="header">
            <div class="row clearfix">
                <jdoc:include type="modules" name="top" style="xhtml" />
                <div class="clear"></div>
            </div>
        </header>
    </div>
</div>

<!-- menu -->
<div id="navigation" class="container">
    <?php if ($this->countModules('menu')) : ?>

        <jdoc:include type="modules" name="menu" style="xhtml" />
    <?php endif; ?>
</div>

<!-- featured hero unit / slider -->
<?php if ($this->countModules('featured')) : ?>
    <div id="featured">
        <jdoc:include type="modules" name="featured" style="xhtml" />
    </div>
<?php endif; ?>


<!-- Joomla Content -->
<div class="container">
    <?php if ($this->countModules('grid-top')) : ?>
        <jdoc:include type="modules" name="grid-top" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules('grid-top2')) : ?>
        <jdoc:include type="modules" name="grid-top2" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules('breadcrumbs')) : ?>
        <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules( 'sidebar1 or sidebar2' )) : ?>
        <?php $sidebarwidth = "col-sm-3"; $contentwidth = "col-sm-9"; ?>
    <?php elseif ($this->countModules( 'sidebar1 and sidebar2' )) : ?>
        <?php $sidebarwidth = "col-sm-3"; $contentwidth = "col-sm-6"; ?>
    <?php else : ?>
        <?php $contentwidth = "col-sm-12"; ?>
    <?php endif; ?>

    <?php if ($this->countModules( 'sidebar1' )) : ?>
        <aside id="sidebar1" class="<?php echo $sidebarwidth; ?>">
            <jdoc:include type="modules" name="sidebar1" style="xhtml" />
        </aside>
    <?php endif; ?>

    <section id="main" class="<?php echo $contentwidth; ?>">
        <?php if ($this->countModules('above-content')) : ?>
            <jdoc:include type="modules" name="above-content" style="xhtml" />
        <?php endif; ?>

        <jdoc:include type="message" />
        <jdoc:include type="component" />

        <?php if ($this->countModules('below-content')) : ?>
            <jdoc:include type="modules" name="below-content" style="xhtml" />
        <?php endif; ?>
    </section>

    <?php if ($this->countModules( 'sidebar2' )) : ?>
        <aside id="sidebar1" class="<?php echo $sidebarwidth; ?>">
            <jdoc:include type="modules" name="sidebar2" style="xhtml" />
        </aside>
    <?php endif; ?>

    <?php if ($this->countModules('grid-bottom')) : ?>
        <jdoc:include type="modules" name="grid-top" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules('grid-bottom2')) : ?>
        <jdoc:include type="modules" name="grid-top2" style="xhtml" />
    <?php endif; ?>

    <?php if ($this->countModules('bottom-menu')) : ?>
        <jdoc:include type="modules" name="grid-top" style="xhtml" />
    <?php endif; ?>

</div>

<div class="wrapper-footer">
    <footer id="footer">
        <div class="container">
            <?php if ($this->countModules('footer')) : ?>
                <jdoc:include type="modules" name="footer" style="xhtml" />
            <?php endif; ?>

        </div>
    </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/production.min.js"/>
</body>
</html>