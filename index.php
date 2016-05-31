<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

// $doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
// $doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
// $doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/bootstrap/js/bootstrap.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/bootstrap/js/bootstrap.min.js', 'text/javascript');
// $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/bootstrap/css/bootstrap.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/bootstrap/css/bootstrap.min.css', $type = 'text/css', $media = 'screen,projection');

?>
<!DOCTYPE html>
<html>

<head>
    <jdoc:include type="head" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <section id="header">
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header icon">
                        <jdoc:include type="modules" name="position-3" style="none" />
                </div>

                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <div class="container">
                    <div class="menu pull-right">
                        <jdoc:include type="modules" name="position-1" style="none" />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cover">
        <div class="container">
            <jdoc:include type="modules" name="position-2" style="none" />
        </div>
    </section>
    <section id="theme-description" class="theme-description-area">
        <div class="container">
            <jdoc:include type="modules" name="position-4" style="none" />
        </div>
    </section>
    <jdoc:include type="modules" name="position-5" style="none" />
    <jdoc:include type="modules" name="position-6" style="none" />
    <jdoc:include type="modules" name="position-10" style="none" />
    
    <footer id="footer">
        <div class="container">
            <p class="pull-left">Copyright 2016, STRICT</p>
            <ul class="smi pull-right list-inline list-unstyled">
                <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="in" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
