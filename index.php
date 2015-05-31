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
<div class="container">
    <?php if ($this->countModules( 'sidebar1 or sidebar2' )) : ?>
        <?php if ($this->countModules( 'sidebar1' )) : ?>
            <div id="sidebar1" class="col-sm-3">
                <jdoc:include type="modules" name="sidebar1" style="xhtml" />
            </div>
        <?php endif; ?>
        <?php if ($this->countModules( 'sidebar1 and sidebar2' )) : ?>
            <div id="main" class="col-sm-6">
                <jdoc:include type="component" />
            </div>
        <?php else : ?>

            <div id="main" class="col-sm-9">
                <jdoc:include type="component" />
            </div>
        <?php endif; ?>

        <?php if ($this->countModules( 'sidebar2' )) : ?>
            <div id="sidebar2" class="col-sm-3">
                <jdoc:include type="modules" name="sidebar2" style="xhtml" />
            </div>
        <?php endif; ?>

    <?php else : ?>
        <div class="col-sm-12">
            <jdoc:include type="component" />
        </div>
    <?php endif; ?>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/production.min.js"/>
</body>
</html>