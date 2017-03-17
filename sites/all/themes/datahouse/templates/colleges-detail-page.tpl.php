<?php

   global $base_url;
   global $user;
   $comp = $variables['result'];
   $emailPath = $base_url . '/sites/default/files/college_emails/';
   $college_name = trim($comp['name']);	
   $college_name = preg_replace("/[^a-zA-Z0-9]/", " ", $college_name);
   $college_name = trim(preg_replace('/-/', ' ', $college_name));
   $college_name = trim(preg_replace('/\s+/', ' ', $college_name));
   $url = $base_url.'/colleges/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp['id'];
   $address_path = $base_url.'/college-address/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp['id'];
   $courses_path = $base_url.'/college-courses/'.strtolower(str_ireplace(' ','-',$college_name)).'/'.$comp['id'];
      
   $types = ''; 
   if(count($variables['types']) > 0) {
	   foreach($variables['types'] as $colType) {
			$types .= "<a href='#'>" . $colType->college_type . "</a>  <i class='fa fa-arrow-right'></i> ";
	   }
    $types = trim($types);
	
   }
   
   
?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-graduation-cap"></i> <?php print ucwords($comp['name']); ?></h1>
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
                            <li class="category-timeline active"> <a href="<?php echo strtolower($url); ?>"><i class="fa fa-graduation-cap"></i> About College</a></li>
                            <li class="category-timeline"><a href="<?php echo $courses_path; ?>"><i class="fa fa-book"></i> Courses</a></li>
                            <li class="category-timeline"><a href="<?php echo $address_path; ?>"><i class="fa fa-map-marker"></i> Address</a></li>
                        </ul>
                    </div>
                </div>

                <div class="box box-widget">
                    <div class="box-header with-border">
                        <h4 class="box-title">Contact Info</h4>
                    </div>
                    <div class="box-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="min-width:30px" valign="top"><i class="fa fa-calendar"></i></td>
                                    <td><b>Foundation Year :</b>
                                        <?php echo $comp['foundation_year'];?>
                                    </td>
                                </tr>
                                
								<tr>
                                    <td valign="top"><i class="fa fa-phone"></i></td>
                                    <td><b>Phone :</b>
                                        <?php echo $comp['phone'];?>
                                    </td>
                                </tr>
								<tr>
                                    <td valign="top"><i class="fa fa-mobile"></i></td>
                                    <td><b>Mobile :</b>
                                        <?php echo $comp['mobile'];?>
                                    </td>
                                </tr>
								<tr>
                                    <td valign="top"><i class="fa fa-globe"></i></td>
                                    <td><b>Website :</b>
                                        <?php echo $comp['website'];?>
                                    </td>
                                </tr>
								<tr>
                                    <td valign="top"><i class="fa fa-envelope"></i></td>
                                    <td><b>Email :</b>
										<?php if($comp['email'] != '') { echo "<img src='".$emailPath."/RG7hejSBa3uo8Ybu6HFexi.png' />"; } else { echo "N/A"; } ?>
                                    </td>
                                </tr>
								<tr>
                                    <td valign="top"><i class="fa fa-location-arrow"></i></td>
                                    <td>
                                        <?php echo $comp['address'];?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="feedPanel" class="col-md-6 col-sm-6 col-xs-12 col-md-12">
                <div class="box box-widget">

                    <div class="box-body">
                        <p>
                            <?php print $comp['college_desc']; ?>
                        </p>
                        
						<b>Types : <?php echo $types;?></b> 
                        <br>

                    </div>
                </div>
                <div id="loadingFeed" class="box box-widget feed hide">
                    <div style="display: block;" class="box-body">
                        <div style="color: color: #B6B7B7;" class="feed-content text-center"><i class="fa fa-refresh fa-spin"></i><span class="feed-title">&nbsp; Loading</span></div>
                    </div>
                </div>
                <div id="endFeed" class="box box-widget feed hide">
                    <div style="display: block;" class="box-body">
                        <div style="color: color: #B6B7B7;" class="feed-content text-center">No more posts</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 right-sidebar hidden-xs">
                <iframe width="100%" id="map-iframe" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGLxwLmfbHkZgNxBimL6Xso7QH5HRZ-6Q
    &q=<?php print urlencode($comp['name'] . " " . $comp['address']);?>" allowfullscreen></iframe>
            </div>
            <div style="clear:both"></div>
			<h2 class=""><i class="fa fa-book"></i> <?php echo "Courses offered by " . ucwords(strtolower($comp['name'])); ?></h2>
            <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12"> 
<table class="table table-row-header">
                <tbody>
				<tr>
				<th>Course</th>	
				<th>Course Type</th>	
				<th>Seats</th>	
				<th>Specialisation</th>	
				<th>Other Info</th>	
				</tr>				
                <?php if(count($variables['courses']) > 0) { 
				
               foreach($variables['courses'] as $course)
               {
               	?>
            
            
                    <tr>
                        <td> <?php echo $course->course_type; ?></td>
                        <td> <?php echo $course->course_name; ?></td>
						<td> <?php echo $course->seats; ?></td>
						<td> <?php echo $course->specialisation; ?></td>
						<td> <?php echo $course->other_info; ?></td>
                    </tr>
                    

                
            
            <?php } } ?>
			</tbody>
			</table>
            </div>
                
            </div>
			
    </div>
    <div style="clear:both"></div>
    
       <!-- Modal -->
    <div class="modal fade" id="addwebsite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                    Enter <?php echo ucwords($comp['name']);?> website
                </h4>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">Website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="website-box" placeholder="Enter website" />
                                <input id="company-box" type="hidden" value="<?php echo ucwords($comp['name']);?>" />
                                <input id="cin-box" type="hidden" value="<?php echo $identity_num;?>" />
                                <p class="show-error">Please enter valid url</p>
                                <p class="show-input-error">Please enter url</p>
                            </div>
                        </div>

                    </form>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="addwebsitebtn" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the college information correct and up-to-date, it is not the primary source. The college website should always be referred to for information.</div>

    <!-- Modal -->
    <div class="modal fade" id="addemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                    Enter <?php echo ucwords($comp['name']);?> email
                </h4>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email-box" placeholder="Enter email" />
                                <input id="company-box" type="hidden" value="<?php echo ucwords($comp['name']);?>" />
                                <input id="cin-box" type="hidden" value="<?php echo $identity_num;?>" />
                                <p class="show-error">Please enter valid email</p>
                                <p class="show-input-error">Please enter email</p>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="addemailbtn" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>