<?php
   global $base_url;
   $director = $variables['results'];
   $directorships = count($director);
   $showCompany = 'company';
   if($directorships > 1) {
        $showCompany = 'companies';
   }

   $director_name = trim($director[0]->dir_name);	
   $director_name = preg_replace("/[^a-zA-Z0-9]/", " ", $director_name);
   $director_name = trim(preg_replace('/-/', ' ', $director_name));
   $director_name = trim(preg_replace('/\s+/', ' ', $director_name));
   $director_name = strtoupper($director_name);
   $director_terms = explode(' ',$director_name);
   $url = $base_url.'/director/'.strtolower(implode('-',$director_terms)).'/'.$director[0]->din;
   $din_path = "<a href='".$url."' title='din of $director_name'>".$director[0]->din."</a>";
?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-user"></i> <?php print ucwords($director_name); ?></h1>
    <div id="menuPanel" style="z-index: 11;" class="col-xs-12 visible-xs">
        <div class="row header-bottom" style="margin-top:10px">
            <div class="col-xs-12">
                <ul class="list-inline custom-menu">
                    <li class="menu-item"><a id="open-menu" href="javascript:void(0);">Menu &nbsp;<i style="font-size: 12px;" class="fa fa-caret-down"></i></a>
                        <ul class="mobile-dropdown list-unstyled">
                            <li><a href="<?php echo strtolower($url); ?>"><i class="fa fa-building"></i> About</a></li>

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
                            <li class="category-timeline active"> <a href="<?php echo strtolower($url); ?>"><i class="fa fa-building"></i> About</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div id="feedPanel" class="col-md-6 col-sm-6 col-xs-12 col-md-12">
                <div class="box box-widget">

                    <div class="box-body">
                        <p>
                            <?php echo ucwords(strtolower($director[0]->dir_name))." is a registered director with Ministry of Corporate Affairs(MCA). Their <b>Director Identification Number(DIN)</b> is ".$din_path.".<br><br> ".ucwords(strtolower($director[0]->dir_name))."'s registered address at MCA is ".$director[0]->dir_address.". ".ucwords(strtolower($director[0]->dir_name))." has directorship in ". count($director) ." ".$showCompany.".";?>
                        </p>
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

                <div id="citiesPanel" class="box box-widget">
                    <?php if(count($result_similar) > 0) { ?>
                        <div class="box-header with-border">
                            <h4 class="box-title"><span style="font-weight:bold">Related Directors </span></h4></div>
                        <div class="box-body no-padding" style="max-height:350px;overflow-y:auto">
                            <ul class="nav nav-stacked top-cities">
                                <?php foreach($result_similar as $similiar_director) { ?>
                                    <li><a href="<?php echo $base_url . '/director/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace(" /[^a-zA-Z0-9]/ ", " ", $similiar_director->dir_name)))) . '/' . strtolower($similiar_director->din); ?>"><span class="similiar"><i class="fa fa-user"></i> <?php echo ucwords(strtolower($similiar_director->dir_name)); ?></span></a></li>
                                    <?php } ?>

                            </ul>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <h2 class="divider"><i class="fa fa-male"></i> Directorships of <?php echo ucwords(strtolower($director[0]->dir_name));?></h2>
            <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
                <?php if(count($director) > 0) { 
               foreach($director as $dir)
               {
               	$comppany = $dir->company_name;
               	$company_name = trim($comppany);	
               	$company_name = preg_replace("/[^a-zA-Z0-9]/", " ", $company_name);
               	$company_name = trim(preg_replace('/-/', ' ', $company_name));
               	$company_name = trim(preg_replace('/\s+/', ' ', $company_name));
               	$company_name = strtoupper($company_name);
               	$company_terms = explode(' ',$company_name);
               	$url = $base_url.'/company/'.strtolower(implode('-',$company_terms)).'/'.strtolower($dir->cin);
               	$cin_path = "<a href='".$url."' title='view $company_name information'>".$comppany."</a>";
               	?>
                    <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-building"></i><?php echo $cin_path; ?></h3>
                    <p>
                        <?php print ucwords(strtolower($director_name)) . " joined " . ucwords(strtolower($cin_path)) . " on " . $dir->date_of_appointment . " as " . $dir->post . ". Its registered address at MCA is " . $dir->dir_address . "."; ?>
                    </p>
                    <table class="table table-row-header">
                        <tbody>
                            <tr>
                                <td><i class="fa fa-certificate" aria-hidden="true"></i><b> CIN :</b>
                                    <?php echo $dir->cin; ?>
                                </td>
                                <td><i class="fa fa-calendar" aria-hidden="true"></i> <b>Appointment Date :</b>
                                    <?php echo $dir->date_of_appointment; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-tags" aria-hidden="true"></i> <b>Post :</b>
                                    <?php echo $dir->post; ?>
                                </td>
                                <td><i class="fa fa-envelope" aria-hidden="true"></i> <b>Address :</b>
                                    <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $dir->dir_address); ?>
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