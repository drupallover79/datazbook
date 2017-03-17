<?php //echo print_r($variables['similar']); die('sda');?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-building"></i> No Directors found with name <?php echo ucwords(strtolower($variables['fullName']));?>.</h1>
    <div style="clear:both"></div>
    <br>
    <h2 class="divider"> Similar named directors</h2>
    <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <?php if(count($variables['result_similar']) > 0) { 
               foreach($variables['result_similar'] as $comp)
               { 
                $comppany = $comp->company_name;
                $company_name = trim($comp->company_name);	
               	$company_name = preg_replace("/[^a-zA-Z0-9]/", " ", $company_name);
               	$company_name = trim(preg_replace('/-/', ' ', $company_name));
               	$company_name = trim(preg_replace('/\s+/', ' ', $company_name));
               	$company_name = strtoupper($company_name);
               	$company_terms = explode(' ',$company_name);
			   $url = $base_url.'/company/'.strtolower(implode('-',$company_terms)).'/'.strtolower($comp->cin);
			   $cin_path = "<a href='".$url."' title='view $company_name information'>".$comppany."</a>";
               	?>
            <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-user"></i>  <?php echo l($comp->dir_name,$base_url.'/director/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $comp->dir_name)))) . "/".strtolower($comp->din), array('attributes' => array('class' => array('dir-name')))); ?></h3>
			<p>
                        <?php print ucwords(strtolower($comp->dir_name)) . " joined " . ucwords(strtolower($cin_path)) . " on " . $comp->date_of_appointment . " as " . $comp->post . ". Its registered address at MCA is " . $comp->dir_address . "."; ?>
                    </p>
            <table class="table table-row-header">
                <tbody>
                    <tr>
                        <td><i class="fa fa-building" aria-hidden="true"></i><b> Company :</b>
                            <?php echo l($comp->company_name,$base_url.'/company/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $comp->company_name)))) . "/".strtolower($comp->cin), array('attributes' => array('class' => array('dir-name')))); ?>
                        </td>
                        <td><i class="fa fa-certificate" aria-hidden="true"></i><b> DIN :</b>
                            <?php echo $comp->din; ?>
                        </td>

                        <td><i class="fa fa-tags" aria-hidden="true"></i> <b>Post :</b>
                            <?php echo $comp->post; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-calendar" aria-hidden="true"></i> <b>Appointment Date :</b>
                            <?php echo $comp->date_of_appointment; ?>
                        </td>
                        <td colspan="2"><i class="fa fa-envelope" aria-hidden="true"></i> <b>Address :</b>
                            <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $comp->dir_address); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
            <?php } } ?>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the company information correct and up-to-date, it is not the primary source. The company registry should always be referred to for information.</div>