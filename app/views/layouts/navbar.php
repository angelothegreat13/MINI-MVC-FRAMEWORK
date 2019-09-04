<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo SITE_ROOT;?>">ANGELOTHEGREAT MVC</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo SITE_ROOT;?>"><i class="fa fa-home"></i> &nbsp;Home</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=SITE_ROOT;?>tools/first"><i class="fa fa-edit"></i> &nbsp;Tools First Page</a></li>
                        <li><a href="<?=SITE_ROOT;?>tools/second"><i class="fa fa-sign-out"></i> &nbsp;Tools Second Page</a></li>
                        <li><a href="<?=SITE_ROOT;?>tools/third"><i class="fa fa-sign-out"></i> &nbsp;Tools Third Page</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo SITE_ROOT;?>contacts"><i class="fa fa-home"></i> &nbsp;Contacts</a></li>
                <li><a href="<?php echo SITE_ROOT;?>surveys"><i class="fa fa-home"></i> &nbsp;Surveys</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-sign-in"></i> &nbsp;Login</a></li>
                <li><a href="#"><i class="fa fa-sign-in"></i> &nbsp;Register</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>