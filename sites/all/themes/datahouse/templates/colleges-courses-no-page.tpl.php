<?php

   global $base_url;
   global $user;
   $CollegeName = $variables['name'];
   $CollegeId = $variables['college_id'];
   
   $college_name = trim($CollegeName);	
   $college_name = preg_replace("/[^a-zA-Z0-9]/", " ", $college_name);
   $college_name = trim(preg_replace('/-/', ' ', $college_name));
   $college_name = trim(preg_replace('/\s+/', ' ', $college_name));
   $url = $base_url.'/colleges/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$CollegeId;
   $address_path = $base_url.'/college-address/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$CollegeId;
   $courses_path = $base_url.'/college-courses/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$CollegeId;
   
?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-book"></i> <?php echo "No courses found of " . ucwords($college_name); ?></h1>
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
                            <li class="category-timeline active"><a href="<?php echo $courses_path; ?>"><i class="fa fa-book"></i> Courses</a></li>
                            <li class="category-timeline"><a href="<?php echo $address_path; ?>"><i class="fa fa-map-marker"></i> Address</a></li>
                        </ul>
                    </div>
                </div>

                
            </div>
            
            <div id="feedPanel" class="box-custom col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <table class="table table-row-header">
                <tbody>
				<tr>
				<th>Course</th>	
				<th>Course Type</th>	
				<th>Seats</th>	
				<th>Specialisation</th>	
				<th>Other Info</th>	
				</tr>				
                
            
            
                    <tr>
                        <td colspan="5"> No Courses Found</td>
                        
                    </tr>
                    

                
            
            
			</tbody>
			</table>
                
                
            </div>
            
            <div style="clear:both"></div>
	
                
            </div>
			
    </div>
    <div style="clear:both"></div>
    
       <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the college information correct and up-to-date, it is not the primary source. The college website should always be referred to for information.</div>

    