<?php //echo print_r($variables['similar']); die('sda');?>
    <h1 class="visible-xs-block visible-lg-block visible-sm-block visible-md-block"><i class="fa fa-graduation-cap"></i> No College Found.</h1>
    <div style="clear:both"></div>
    <br>
    <h2 class="divider"> Similar name colleges</h2>
    <div id="basic-info" class="box-custom col-lg-12 col-md-6 col-sm-12 col-xs-12">
        <?php if(count($variables['similar']) > 0) { 
               foreach($variables['similar'] as $comp)
               {
               	?>
            <h3 style="color:#11b6d2;border-bottom: 2px solid #11b6d2;"><i class="fa fa-graduation-cap"></i>  <?php echo l($comp->college_name,$base_url.'/colleges/' . strtolower(trim(preg_replace('/\s+/', '-', preg_replace("/[^a-zA-Z0-9]/", " ", $comp->college_name)))) . "/".strtolower($comp->id), array('attributes' => array('class' => array('dir-name')))); ?></h3>
            <table class="table table-row-header">
                <tbody>
                    <tr>
                        <td><i class="fa fa-globe" aria-hidden="true"></i><b> State :</b>
                            <?php echo $comp->state; ?>
                        </td>
                        <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> <b>University :</b>
                            <?php echo $comp->university; ?>
                        </td>
                        <td><i class="fa fa-tags" aria-hidden="true"></i> <b>Website :</b>
                            <?php echo $comp->website; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><i class="fa fa-map-marker" aria-hidden="true"></i> <b>Address :</b>
                            <?php echo preg_replace('/[^(\x20-\x7F)]*/','', $comp->address); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
            <?php } } ?>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 edg-cont"> <span class="redcolor">*</span> While we strive to keep the company information correct and up-to-date, it is not the primary source. The company registry should always be referred to for information.</div>