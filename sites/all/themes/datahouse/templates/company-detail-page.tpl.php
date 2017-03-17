<?php

   global $base_url;
   global $user;
   $comp = $variables['result'];

   $directors = $variables['directors'];
   $charges = $variables['charges'];

   $similiar_companies = $variables['result_similiar_comp'];

   $identity = '';
   $identity_num = '';

   if (isset($comp['cin_pvt']))
   {
   	$identity = 'CIN';
   	$identity_num = $comp['cin_pvt'];

   }
   elseif(isset($comp['cin_llp']))
   {
   	$identity = 'LLP Identification Number';
   	$identity_num = $comp['cin_llp'];
   }
   elseif(isset($comp['cin_fcrn']))
   {
   	$identity = 'Foreign Company Registration Number';
   	$identity_num = $comp['cin_fcrn'];
   }
   if($identity != '')
   {
   	$path = $base_url.'/company/';
   	$company_name = trim($comp['name']);	
   	$company_name = preg_replace("/[^a-zA-Z0-9]/", " ", $company_name);
   	$company_name = trim(preg_replace('/-/', ' ', $company_name));
   	$company_name = trim(preg_replace('/\s+/', ' ', $company_name));
   	$company_name = strtoupper($company_name);
   	$company_terms = explode(' ',$company_name);
	//$company_terms = strtolower($company_terms);
   	$url = $base_url.'/company/'.strtolower(implode('-',$company_terms)).'/'.strtolower($identity_num);
	$director_path = $base_url.'/company-director/'.strtolower(implode('-',$company_terms)).'/'.strtolower($identity_num);
   	$charge_path = $base_url.'/company-charges/'.strtolower(implode('-',$company_terms)).'/'.strtolower($identity_num);
	$cin_path = "<a href='".strtolower($url)."' title='cin of $company_name'>".$identity_num."</a>";
	$address_path = $base_url.'/company-address/'.strtolower(implode('-',$company_terms)).'/'.strtolower($identity_num);

   }

   ?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-building"></i> <?php print ucwords($comp['name']); ?></h1>
    <div id="menuPanel" style="z-index: 11;" class="col-xs-12 visible-xs">
        <div class="row header-bottom" style="margin-top:10px">
            <div class="col-xs-12">
                <ul class="list-inline custom-menu">
                    <li class="menu-item"><a id="open-menu" href="javascript:void(0);">Menu &nbsp;<i style="font-size: 12px;" class="fa fa-caret-down"></i></a>
                        <ul class="mobile-dropdown list-unstyled">
                            <li><a href="<?php echo strtolower($url); ?>"><i class="fa fa-building"></i> About Company</a></li>
                            <li><a href="<?php echo $director_path; ?>"><i class="fa fa-user"></i> Directors</a></li>
                            <li><a href="<?php echo $charge_path; ?>"><i class="fa fa-money"></i> Charges</a></li>
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
                            <li class="category-timeline active"> <a href="<?php echo strtolower($url); ?>"><i class="fa fa-building"></i> About Company</a></li>
                            <li class="category-timeline"><a href="<?php echo $director_path; ?>"><i class="fa fa-user"></i> Directors</a></li>
                            <li class="category-timeline"><a href="<?php echo $charge_path; ?>"><i class="fa fa-money"></i> Charges</a></li>
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
                                    <td><b>Incorporated on :</b>
                                        <?php echo $comp['doi'];?>
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
                            <?php print $comp['comp_desc']; ?>
                        </p>
                        <br>
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
                <?php echo $variables['update_btn']; ?>
                    <br>
                    <span>Access all critical documents and information for facts based decision making of <?php echo ucwords($comp['name']); ?> for only &#8377 200.</span>
                    <br>
                    <?php echo $variables['buy_all']; ?>
                    <br>
                    <div id="citiesPanel" class="box box-widget">
                        <?php if(count($similiar_companies) > 0) { ?>
                            <div class="box-header with-border">
                                <h4 class="box-title"><span style="font-weight:bold">Companies starting with" <?php echo ucfirst($variables['startingLetter']);?>" </span></h4></div>
                            <div class="box-body no-padding" style="max-height:296px;overflow-y:auto">
                                <ul class="nav nav-stacked top-cities">
                                    <?php foreach($similiar_companies as $similiar_company) { ?>
                                        <li><a href="<?php echo $base_url . '/company/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace(" /[^a-zA-Z0-9]/ ", " ", $similiar_company->company_name)))) . '/' . strtolower($similiar_company->cin); ?>"><span class="similiar"><?php echo $similiar_company->company_name; ?></span></a></li>
                                        <?php } ?>

                                </ul>
                            </div>
                            <?php } ?>
                    </div>
            </div>
            
            <div id="basic-info" class="box-custom col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;">Basic Information</h2>

                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $identity;?>
                            </td>
                            <td>
                                <?php echo $cin_path;?>
                            </td>
                        </tr>

                        <tr>
                            <td>Status:</td>
                            <td><a href="<?php echo $base_url; ?>/company-status/<?php echo strtolower(str_replace(" ","- ",$comp['status']));?>" title="view all companies of <?php echo $comp['status'];?> status"><?php if(strtolower($comp['status']) == 'active'){ echo "<span style='color:green'>".$comp['status']."</span>"; } else {echo "<span style='color:#c33'>".$comp['status']."</span>";}?></a></td>
                        </tr>
                        <tr>
                            <td>Incorporation Date:</td>
                            <td>
                                <?php echo $comp['doi'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Age of Company:</td>
                            <td>
                                <?php echo $comp['age'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Registration Number: </td>
                            <td>
                                <?php echo $comp['reg_num'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td>
                                <a href="<?php echo $base_url; ?>/companylist/companies-in-<?php echo strtolower(str_replace(" ","- ",$comp['registered_state']));?>" title="view list of companies incorporated in <?php print $comp['registered_state']; ?>">
                                    <?php echo $comp['registered_state'];?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Company Type: </td>
                            <td>
                                <a href="<?php echo $base_url; ?>/company-class/<?php echo strtolower(str_replace(" ","- ",$comp['class']));?>" title="view all companies of <?php echo $comp['class'];?> class">
                                    <?php echo $comp['class'];?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Listing Type: </td>
                            <td>
                                <?php echo $comp['listed'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Industry Category: </td>
                            <td>
                                <?php echo $comp['activity'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Company Nature: </td>
                            <td>
                                <?php echo $comp['comp_cat'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Company Sub Category: </td>
                            <td>
                                <?php echo $comp['comp_sub_cat'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Registering Authority: </td>
                            <td>
                                <?php echo $comp['roc'];?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h2 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;">Annual Compliance Information</h2>

                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <td>Date of Last <a href="<?php echo $base_url; ?>/annual-general-meeting" target="_blank" title="Annual General Meeting">AGM</a>: </td>
                            <td>
                                <?php echo $comp['agm_date'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Latest Balance Sheet:</td>
                            <td>
                                <?php echo $comp['date_of_last_blnc_sheet'];?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div id="capital-info" class="box-custom col-lg-6 col-md-6 col-sm-12 col-xs-12">

                
                <h2 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;">Capital Information</h2>
                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <td>Authorized Capital: </td>
                            <td>
                                <?php echo "&#8377;".$comp['auth_cap'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Paid-up Capital:</td>
                            <td>
                                <?php echo "&#8377;".$comp['paid_up_cap'];?>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <h2 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;">Contact Information</h2>

                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <?php if($comp['website'] != '') { ?>
                                <td><span class='bold'><i class="fa fa-globe"></i> Website :</span>
                                    <a target="_blank" href="<?php echo $comp['website'];?>">
                                        dfgd<?php echo $comp['website'];?>
                                    </a><br>
                                    <span class="tell-us">(incorrect website ?) <a href="javascript:void(0)" data-toggle="modal" data-target="#addwebsite" class="add">Please suggest</a></span>
                                </td>
                                <?php } else { ?>
                                    <td><span class='bold'><i class="fa fa-globe"></i> Website :</span><a href="javascript:void(0)" data-toggle="modal" data-target="#addwebsite" class="add"> Click here to add</a></td>
                                    <?php } ?>

                        </tr>
                        <tr>
                            <?php if($comp['email'] != '') { ?>
                                <td><span class='bold'><i class="fa fa-envelope"></i> Email :</span>
                                    <a href="#">
                                        <?php echo $comp['email'];?>
                                    </a><br>
                                    <span class="tell-us">(incorrect email ?) <a href="javascript:void(0)" data-toggle="modal" data-target="#addemail" class="add">Please suggest</a></span>
                                </td>
                                <?php } else { ?>
                                    <td><span class='bold'><i class="fa fa-envelope"></i> Email :</span><a href="javascript:void(0)" data-toggle="modal" data-target="#addemail" class="add"> Click here to add</a></td>
                                    <?php } ?>
                        </tr>
                        

                    </tbody>
                </table>
                <h2 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;">Address</h2>

                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            
                            <td><?php echo $comp['name'] . ", " . $comp['address']; ?><iframe width="100%" id="map-iframe" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGLxwLmfbHkZgNxBimL6Xso7QH5HRZ-6Q
    &q=<?php print urlencode($comp['name'] . " " . $comp['address']);?>" allowfullscreen></iframe></td>

                        </tr>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
    <h2 class="divider"><i class="fa fa-user"></i> <?php echo "Directors of " . ucwords(strtolower($comp['name'])); ?></h2>
    <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <?php if(count($directors) > 0) { 
               foreach($directors as $director)
               {
               	?>
            <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-user"></i>  <?php if(is_numeric($director->din)) { echo l($director->dir_name,$base_url.'/director/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $director->dir_name)))) . "/".$director->din, array('attributes' => array('class' => array('dir-name')))); } else { echo l($director->dir_name, 'javascript:',  array('external' => TRUE)); } ?></h3>
            <table class="table table-row-header">
                <tbody>
                    <tr>
                        <td><i class="fa fa-certificate" aria-hidden="true"></i><b> DIN/DPIN/PAN :</b>
                            <?php echo $director->din; ?>
                        </td>
                        <td><i class="fa fa-calendar" aria-hidden="true"></i> <b>Appointment Date :</b>
                            <?php echo $director->date_of_appointment; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-tags" aria-hidden="true"></i> <b>Post :</b>
                            <?php echo $director->post; ?>
                        </td>
                        <td><i class="fa fa-envelope" aria-hidden="true"></i> <b>Address :</b>
                            <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $director->dir_address); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
            <?php } } else {
					  ?>
                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <td>No Directors found</td>
                        </tr>
                    </tbody>
                </table>
                <?php

				  } ?>
    </div>

    <h2 class="divider"><i class="fa fa-money"></i> <?php echo "Charges on " . ucwords(strtolower($comp['name'])); ?></h2>
    <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <?php if(count($charges) > 0) { 
               foreach($charges as $charge)
               {
               	?>
            <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-university" aria-hidden="true"></i> <b>Charge Holder :</b> <?php echo $charge->charge_holder; ?></h3>
            <table class="table table-row-header">
                <tbody>
                    <tr>
                        <td><i class="fa fa-calendar"></i> <b>Charge Date :</b>
                            <?php echo $charge->charge_creation_date; ?>
                        </td>
                        <td><i class="fa fa-inr" aria-hidden="true"></i> <b>Charge Amount :</b> &#8377;
                            <?php echo $charge->charge_amount; ?>
                        </td>
                    </tr>
                    <tr>

                        <td colspan="2"><i class="fa fa-envelope" aria-hidden="true"></i> <b>Address :</b>
                            <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $charge->charge_address); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
            <?php } } else {
					  ?>
                <table class="table table-row-header">
                    <tbody>
                        <tr>
                            <td>No Charges found</td>
                        </tr>
                    </tbody>
                </table>
                <?php

				  } ?>
    </div>
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
                    <p class="websitesuccess">Website submitted successfully</p>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
            
            <div class="col-sm-4">
              <input type="text"  id="websitesubmiiter-name" placeholder="Your Name" class="form-control">
            </div>

            
            <div class="col-sm-8">
              <input type="text" id="websitesubmiiter-email" placeholder="Your Email ID" class="form-control">
              <p class="show-submitteremailerror">Please enter valid Email ID</p>
            </div>
          </div>
                        <div class="form-group">
                            
                            <label class="col-sm-2 control-label" for="inputEmail3"><font color="red">*</font>Website</label>
                            
                            <div class="col-sm-10">
                                
                                <input type="text" class="form-control" id="website-box" placeholder="Enter <?php echo ucwords($comp['name']);?> website" />
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
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the company information correct and up-to-date, it is not the primary source. The company registry should always be referred to for information.</div>

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
                    <p class="emailsuccess">Email submitted successfully</p>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
            
                        <div class="col-sm-4">
                          <input type="text"  id="emailsubmiiter-name" placeholder="Your Name" class="form-control">
                        </div>


                        <div class="col-sm-8">
                          <input type="text" id="emailsubmiiter-email" placeholder="Your Email ID" class="form-control">
                          <p class="show-submitteremailerror">Please enter valid Email ID</p>
                        </div>
                      </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputEmail3">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email-box" placeholder="Enter <?php echo ucwords($comp['name']);?> Email ID" />
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
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
