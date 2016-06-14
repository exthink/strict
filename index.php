<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/bootstrap/js/bootstrap.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/bootstrap/js/bootstrap.min.js', 'text/javascript');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/bootstrap/css/bootstrap.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/bootstrap/css/bootstrap.min.css', $type = 'text/css', $media = 'screen,projection');

?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <jdoc:include type="modules" name="position-10" style="none" />
    <!-- <div id="main_wrapper">
        <div id="mystickydiv"> -->
    <section class="header">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header icon">
                        <jdoc:include type="modules" name="position-3" style="none" />
                </div>
                  
                        <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="nav-collapse collapse navbar-responsive-collapse nav navbar-nav menu pull-right">
                            <div class="container">
                            <!-- <div class="nav navbar-nav menu pull-right " > -->
                                <jdoc:include type="modules" name="position-1" style="none" />
                            <!-- </div> -->
                        </div>
                    </div>
            </div>
        </div>
    </section>
     </div>
    <jdoc:include type="modules" name="position-4" style="none" />
    <section>
        <div class="container">
            <jdoc:include type="modules" name="position-2" style="none" />
            <jdoc:include type="modules" name="position-5" style="none" />
        </div>
    </section>
    <section class="content">
        <div class="container">
            
            <jdoc:include type="message" />
            <jdoc:include type="component" />

        </div>
    </section>
    <jdoc:include type="modules" name="position-6" style="none" />
    <jdoc:include type="modules" name="position-14" style="none" />
    <jdoc:include type="modules" name="footer" style="none" />
    
</div>
</body>

</html>
