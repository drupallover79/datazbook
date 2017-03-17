<?php
global $base_url;
$comp = $variables['results'];
$similiar_companies = $variables['result_similiar_comp'];

$path = $base_url.'/company/';
$company_name = trim($comp[0]->company_name);
$cin = trim($comp[0]->cin);
$company_name = preg_replace("/[^a-zA-Z0-9]/", " ", $company_name);
$company_name = trim(preg_replace('/-/', ' ', $company_name));
$company_name = trim(preg_replace('/\s+/', ' ', $company_name));
$company_name = strtoupper($company_name);
$company_terms = explode(' ',$company_name);

$url = $base_url.'/company/'.strtolower(implode('-',$company_terms)).'/'.strtolower($cin);
$director_path = $base_url.'/company-director/'.strtolower(implode('-',$company_terms)).'/'.strtolower($cin);
$cin_path = "<a href='".strtolower($url)."' title='cin of $company_name'>".$cin."</a>";
$director_path = $base_url.'/company-director/'.strtolower(implode('-',$company_terms)).'/'.strtolower($cin);
$charge_path = $base_url.'/company-charges/'.strtolower(implode('-',$company_terms)).'/'.strtolower($cin);
$address_path = $base_url.'/company-address/'.strtolower(implode('-',$company_terms)).'/'.strtolower($cin);   
?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-user"></i> <?php echo "Directors of " . ucwords(strtolower($comp[0]->company_name)); ?></h1>
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
                            <li class="category-timeline"> <a href="<?php echo strtolower($url); ?>"><i class="fa fa-building"></i> About Company</a></li>
                            <li class="category-timeline active"><a href="<?php echo $director_path; ?>"><i class="fa fa-user"></i> Directors</a></li>
                            <li class="category-timeline"><a href="<?php echo $charge_path; ?>"><i class="fa fa-money"></i> Charges</a></li>
                            <li class="category-timeline"><a href="<?php echo $address_path; ?>"><i class="fa fa-map-marker"></i> Address</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div id="feedPanels" class="col-md-6 col-sm-6 col-xs-12 col-md-12">
                <div class="box box-widget">
                    <div class="box-body">
                        <?php foreach($comp as $dir) { ?>
                            <div class="event-page">
                                <div class="row">

                                    <div class="col-sm-9 col-xs-12 event-desc company-directors-list">
                                        <h2><?php if(is_numeric($dir->din)) { echo l($dir->dir_name,$base_url.'/director/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $dir->dir_name)))) . "/".$dir->din, array('attributes' => array('class' => array('dir-name')))); } else { echo l($dir->dir_name, 'javascript:',  array('external' => TRUE)); } ?></h2>
                                        <div class="event-info-text">
                                            <div class="event-info-middle">
                                                <p><i class="fa fa-tag"></i> &nbsp;
                                                    <?php echo "<b>DIN : </b>" . $dir->din; ?>
                                                </p>
                                                <p><i class="fa fa-calendar"></i> &nbsp;
                                                    <?php echo "<b>Date of Appointment : </b>" . $dir->date_of_appointment; ?>
                                                </p>
                                                <p><i class="fa fa-user"> </i>
                                                    <?php echo "<b>Post : </b>" . $dir->post; ?>
                                                </p>
                                                <p><i class="fa fa-map-marker"> </i>
                                                    <?php echo "<b>Address : </b>" . $dir->dir_address; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
                    <?php if(count($similiar_companies) > 0) { ?>
                        <div class="box-header with-border">
                            <h4 class="box-title"><span style="font-weight:bold">Companies starting with <?php echo strtoupper($variables['startingLetter']);?></span></h4></div>
                        <div class="box-body no-padding" style="max-height:350px;overflow-y:auto">
                            <ul class="nav nav-stacked top-cities">
                                <?php foreach($similiar_companies as $similiar_company) { ?>
                                    <li><a href="<?php echo $base_url . '/company/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace(" /[^a-zA-Z0-9]/ ", " ", $similiar_company->company_name)))) . '/' . strtolower($similiar_company->cin); ?>"><span class="similiar"><?php echo $similiar_company->company_name; ?></span></a></li>
                                    <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <div style="clear:both"></div>

    <!-- Modal -->
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