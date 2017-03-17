<?php
global $base_url;
$comp = $variables['results'];
$similiar_companies = $variables['result_similiar_comp'];
$path = $base_url.'/colleges/';

$college_name = trim($comp[0]->college_name);	
$college_name = preg_replace("/[^a-zA-Z0-9]/", " ", $college_name);
$college_name = trim(preg_replace('/-/', ' ', $college_name));
$college_name = trim(preg_replace('/\s+/', ' ', $college_name));
$college_name = strtoupper($college_name);
$college_terms = explode(' ',$college_name);

	$url = $base_url.'/colleges/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp[0]->id;
   $address_path = $base_url.'/college-address/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp[0]->id;
   $courses_path = $base_url.'/college-courses/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp[0]->id;
?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-map-marker"></i> <?php echo "Address of " . ucwords(strtolower($comp[0]->college_name)); ?></h1>
    <div id="menuPanel" style="z-index: 11;" class="col-xs-12 visible-xs">
        <div class="row header-bottom" style="margin-top:10px">
            <div class="col-xs-12">
                <ul class="list-inline custom-menu">
                    <li class="menu-item"><a id="open-menu" href="javascript:void(0);">Menu &nbsp;<i style="font-size: 12px;" class="fa fa-caret-down"></i></a>
                        <ul class="mobile-dropdown list-unstyled">
                            <li><a href="<?php echo strtolower($url); ?>"><i class="fa fa-graduation-cap"></i> About College</a></li>
                            <li><a href="<?php echo $courses_path; ?>"><i class="fa fa-book"></i> Courses</a></li>
                            <li><a href="<?php echo $address_path; ?>"><i class="fa fa-map-marker"></i> Address</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row main-content">
            <div class="col-md-3 col-sm-3 left-sidebar hidden-xs">
                <div class="box box-widget">
                    <div class="box-body no-padding">
                        <ul class="nav nav-stacked categories-menu">
                            <li class="category-timeline"> <a href="<?php echo strtolower($url); ?>"><i class="fa fa-graduation-cap"></i> About College</a></li>
                            <li class="category-timeline "><a href="<?php echo $courses_path; ?>"><i class="fa fa-book"></i> Courses</a></li>
                            <li class="category-timeline active"><a href="<?php echo $address_path; ?>"><i class="fa fa-map-marker"></i> Address</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div id="feedPanel" class="col-md-6 col-sm-6 col-xs-12 col-md-12">
                <div class="box box-widget">

                    <div class="box-body">
                        <p>
                            <i class="fa fa-map-marker"></i>
                            <?php echo $comp[0]->address; ?>
                        </p>
                        <br>
                        <p>
                            <iframe width="100%" id="map-iframe" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGLxwLmfbHkZgNxBimL6Xso7QH5HRZ-6Q
    &q=<?php print urlencode($comp[0]->college_name . " " . $comp[0]->address);?>" allowfullscreen></iframe>
                        </p>
                        <br>
                        <br>

                    </div>
                </div>
                
                
            </div>
            <div class="col-md-3 col-sm-3 right-sidebar hidden-xs">

                <div id="citiesPanel" class="box box-widget">
                    <?php if(count($similiar_companies) > 0) { ?>
                        <div class="box-header with-border">
                            <h4 class="box-title"><span style="font-weight:bold">Colleges starting with "<?php echo strtoupper($variables['startingLetter']);?>"</span></h4></div>
                        <div class="box-body no-padding" style="max-height:350px;overflow-y:auto">
                            <ul class="nav nav-stacked top-cities">
                                <?php foreach($similiar_companies as $similiar_company) { ?>
                                    <li><a href="<?php echo $base_url . '/company/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace(" /[^a-zA-Z0-9]/ ", " ", $similiar_company->college_name)))) . '/' . $similiar_company->id; ?>"><span class="similiar"><?php echo $similiar_company->college_name; ?></span></a></li>
                                    <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <div style="clear:both"></div>

   
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the college information correct and up-to-date, it is not the primary source. The college website should always be referred to for information.</div>

   