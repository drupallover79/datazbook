<?php //echo print_r($variables['similar']); die('sda');?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-building"></i> No Company Found.</h1>
    <div style="clear:both"></div>
    <br>
    <h2 class="divider"> Similar named companies</h2>
    <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <?php if(count($variables['similar']) > 0) { 
               foreach($variables['similar'] as $comp)
               {
               	?>
            <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-building"></i>  <?php echo l($comp->company_name,$base_url.'/company/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $comp->company_name)))) . "/".strtolower($comp->cin), array('attributes' => array('class' => array('dir-name')))); ?></h3>
            <table class="table table-row-header">
                <tbody>
                    <tr>
                        <td><i class="fa fa-certificate" aria-hidden="true"></i><b> CIN :</b>
                            <?php echo $comp->cin; ?>
                        </td>
                        <td><i class="fa fa-calendar" aria-hidden="true"></i> <b>Incorporation Date :</b>
                            <?php echo $comp->registration_date; ?>
                        </td>
                        <td><i class="fa fa-tags" aria-hidden="true"></i> <b>Status :</b>
                            <?php echo $comp->company_status; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><i class="fa fa-envelope" aria-hidden="true"></i> <b>Address :</b>
                            <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $comp->company_address); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
            <?php } } ?>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the company information correct and up-to-date, it is not the primary source. The company registry should always be referred to for information.</div>