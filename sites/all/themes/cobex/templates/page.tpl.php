
 <!--header-->
<div class="header" id="header">
    <div class="head" >
        <div class="nav-top"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="navbar-brand logo ">
                    <h1 class="animated wow pulse" data-wow-delay=".5s"> <a href="<?php echo $front_page; ?>"><img src="<?php echo $logo; ?>"/></a></h1>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
                <div class="fill">
                    <ul class="nav navbar-nav ">
                        <li ><a href="index.html" class="scroll active" data-hover="Home">Home</a> </li>
                        <li ><a href="#services" class="scroll" data-hover="About">Services</a> </li>
                        <li><a href="#success" class="scroll" data-hover="Gallery">Success</a></li>
                        <li><a href="#testimonials" class="scroll" data-hover="Gallery">Testimonials</a></li>
                        <li><a href="#gallery" class="scroll" data-hover="Gallery">Gallery</a></li>
                        <li><a href="#team" class="scroll" data-hover="Codes">Team </a></li>
                        <li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /.navbar-collapse --> 
        </div>
        
        <!-- start search-->
        
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
        <!----search-scripts---->
        
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->


<!--content-->
<div class="service" id="services">
    <div class="container">
       
        <?php print render($page['content']); ?>
        
    </div>
</div>

</div>


<!--footer-->
<div class="copy">
<p class="footer-grid" >© 2016 Prevailing . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
<ul class="captn2 footer-sc">
<li><a href="#" class="icon1"></a></li>
<li><a href="#" class="icon2"></a></li>
<li><a href="#" class="icon3"></a></li>
</div>
</div>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>


