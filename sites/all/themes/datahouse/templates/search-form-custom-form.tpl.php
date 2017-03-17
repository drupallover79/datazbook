<?php global $base_url; 
$collegeTypes = $variables['result_types'];
$collegeStates = $variables['college_states'];
?>
    <div class="container" style="text-align:center; ">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#CompanyDirector"><i class="fa fa-building"></i>&nbsp; Company / <i class="fa fa-user"></i>&nbsp; Directors</a></li>
            <li><a data-toggle="tab" href="#college"><i class="fa fa-graduation-cap"></i>&nbsp; Colleges </a></li>
            <li><a data-toggle="tab" href="#other_institute"><i class="fa fa-graduation-cap"></i>&nbsp; Other Colleges/Universities </a></li>
            <li><a data-toggle="tab" href="#schools"><i class="fa fa-bank"></i> Schools</a></li>
            <li><a data-toggle="tab" href="#banks_india"><i class="fa fa-bank"></i>&nbsp; Banks</a></li>
            <li><a data-toggle="tab" href="#transport"><i class="fa fa-truck"></i>&nbsp; Transport</a></li>
        </ul>

        <div class="tab-content" id="tab-content">
            <div id="CompanyDirector" class="tab-pane fade in active">
                <h2 style="text-align:center;color:white">Search Companies and Their Directors Incorporated Any where in India</h2>
                <div class="row">
                    <div class="col-sm-4" id="small-4">
                        <select class="form-control select2" id="company_director">
                            <option value="0">Select Option</option>
                            <option value="company">Company</option>
                            <option value="director">Director</option>

                        </select>
                        <br/>
                        <span id="companydirector_error"></span>
                    </div>
                    <div class="col-sm-4 col-md-8 col-md-12" id="colss">
                        <div class="form-group comp_dir">
                            <div class="">
                                <input id="company_director_box" type="text" class="form-control" name="q" placeholder="Choose option first">
                                <ul class="form-control" id="result">

                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 ">
                        <button class="btn btn-primary" style="width:200px;padding:10px 12px;" onclick="search_company_director()">Search</button>
                    </div>
                </div>
            </div>
            <div id="college" class="tab-pane fade">
                <h2 style="text-align:center;color:white">Search College Any where in India</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="college_type">
                            <option value="0">Select College Type</option>
                            <?php foreach($collegeTypes as $collegeType) { ?>
								<option value="<?php echo $collegeType->college_type; ?>"><?php echo $collegeType->college_type; ?></option>
							<?php } ?>
                        </select>
                        <br/>
                        <span id="college_error" style="color:white"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="college_state" name="state">
                            <option value="all">All India</option>
                            <?php foreach($collegeStates as $collegeState) { ?>
								<option value="<?php echo $collegeState->state; ?>"><?php echo $collegeState->state; ?></option>
							<?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <div class="form-group">
                            <div class="">
                                <input id="college_box" type="text" class="form-control" name="q" placeholder="Choose option first">
								<ul class="form-control" id="collegeresult">
									
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 ">
                        <button class="btn btn-primary" style="width:200px;padding:10px 12px;" onclick="search_tech()">Search</button>
                    </div>
                </div>
            </div>
            <div id="other_institute" class="tab-pane fade">
                <h2 style="text-align:center;color:white">Search Non Technical College, Univeristy Any where in India</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="nontech_type">
                            <option value="0">Select Type</option>
                            <option value="college">College</option>
                            <option value="university">University</option>
                        </select>
                        <br/>
                        <span id="non_tech_error" style="color:white"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="state" name="state" onchange="get_city(this.value)">
                            <option value="0">All India</option>
                            <option value=''></option>
                            <option value='andaman-and-nicobar-islands'>Andaman And Nicobar Islands</option>
                            <option value='andhra-pradesh'>Andhra Pradesh</option>
                            <option value='arunachal-pradesh'>Arunachal Pradesh</option>
                            <option value='assam'>Assam</option>
                            <option value='bihar'>Bihar</option>
                            <option value='chandigarh'>Chandigarh</option>
                            <option value='chhattisgarh'>Chhattisgarh</option>
                            <option value='dadra-and-nagar-haveli'>Dadra And Nagar Haveli</option>
                            <option value='daman-and-diu'>Daman And Diu</option>
                            <option value='delhi'>Delhi</option>
                            <option value='goa'>Goa</option>
                            <option value='gujarat'>Gujarat</option>
                            <option value='haryana'>Haryana</option>
                            <option value='himachal-pradesh'>Himachal Pradesh</option>
                            <option value='jammu-and-kashmir'>Jammu And Kashmir</option>
                            <option value='jharkhand'>Jharkhand</option>
                            <option value='karnataka'>Karnataka</option>
                            <option value='kerala'>Kerala</option>
                            <option value='madhya-pradesh'>Madhya Pradesh</option>
                            <option value='maharashtra'>Maharashtra</option>
                            <option value='manipur'>Manipur</option>
                            <option value='meghayala'>Meghayala</option>
                            <option value='mizoram'>Mizoram</option>
                            <option value='nagaland'>Nagaland</option>
                            <option value='odisha'>Odisha</option>
                            <option value='puducherry'>Puducherry</option>
                            <option value='punjab'>Punjab</option>
                            <option value='rajasthan'>Rajasthan</option>
                            <option value='sikkim'>Sikkim</option>
                            <option value='tamil-nadu'>Tamil Nadu</option>
                            <option value='telangana'>Telangana</option>
                            <option value='tripura'>Tripura</option>
                            <option value='uttar-pradesh'>Uttar Pradesh</option>
                            <option value='uttarakhand'>Uttarakhand</option>
                            <option value='west-bengal'>West Bengal</option>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <div class="form-group">
                            <div class="">
                                <input id="college_university_box" type="text" class="form-control" name="q" placeholder="Choose option first">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 ">
                        <button class="btn btn-primary" style="width:200px;padding:10px 12px;" onclick="search_nontech()">Search</button>
                    </div>
                </div>
            </div>
            <div id="transport" class="tab-pane fade">
                <h2 style="text-align:center;color:white">Search Transport Services in India</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="topper_year">
                            <option value=0>Select Year</option>
                            <option value="2016">2016</option>
                        </select>
                        <br/>
                        <span style="color:white" id="topper_year_error"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="topper_board">
                            <option value=0>Select Board</option>

                            <option value=2>State Board</option>
                        </select>
                        <br/>
                        <span style="color:white" id="topper_board_error"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="topper_state">
                            <option value=0>Select State</option>
                            <option value="rajasthan">Rajasthan</option>
                        </select>
                        <br/>
                        <span style="color:white" id="transport_error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4 ">
                        <button class="btn btn-primary" style="width:200px;padding:10px 12px;" onclick="search_topper()">Search</button>
                    </div>
                </div>
            </div>
            <div id="schools" class="tab-pane fade">
                <h2 style="text-align:center;color:white">Search School Any where in India</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="school_state" onchange="get_center_city(this.value)">
                            <option value=0>Select State</option>
                            <option value='andamanand-nicobar-islands'>Andamanand Nicobar Islands</option>
                            <option value='andhra-pradesh'>Andhra Pradesh</option>
                            <option value='arunachal-pradesh'>Arunachal Pradesh</option>
                            <option value='assam'>Assam</option>
                            <option value='bihar'>Bihar</option>
                            <option value='chandigarh'>Chandigarh</option>
                            <option value='chhattisgarh'>Chhattisgarh</option>
                            <option value='dadraand-nagar-haveli'>Dadraand Nagar Haveli</option>
                            <option value='delhi'>Delhi</option>
                            <option value='goa'>Goa</option>
                            <option value='gujarat'>Gujarat</option>
                            <option value='haryana'>Haryana</option>
                            <option value='himachal-pradesh'>Himachal Pradesh</option>
                            <option value='jammuand-kashmir'>Jammuand Kashmir</option>
                            <option value='jharkhand'>Jharkhand</option>
                            <option value='karnataka'>Karnataka</option>
                            <option value='kerala'>Kerala</option>
                            <option value='kolkata'>Kolkata</option>
                            <option value='madhya-pradesh'>Madhya Pradesh</option>
                            <option value='maharashtra'>Maharashtra</option>
                            <option value='manipur'>Manipur</option>
                            <option value='meghalaya'>Meghalaya</option>
                            <option value='nagaland'>Nagaland</option>
                            <option value='new-delhi'>New Delhi</option>
                            <option value='orissa'>Orissa</option>
                            <option value='puducherry'>Puducherry</option>
                            <option value='punjab'>Punjab</option>
                            <option value='rajasthan'>Rajasthan</option>
                            <option value='sikkim'>Sikkim</option>
                            <option value='tamil-nadu'>Tamil Nadu</option>
                            <option value='telangana'>Telangana</option>
                            <option value='tripura'>Tripura</option>
                            <option value='uttar-pradesh'>Uttar Pradesh</option>
                            <option value='uttarakhand'>Uttarakhand</option>
                            <option value='west-bengal'>West Bengal</option>
                        </select>
                        <br/>
                        <span style="color:white" id="school_state_error"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="nontech_district">
                            <option value="0">All District</option>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="center_city">
                            <option value=0>Select City</option>
                        </select>
                        <br/>
                        <span style="color:white" id="center_city_error"></span>
                    </div>
                    <div class="col-sm-4 col-md-8 col-md-12" style="margin-bottom:10px">
                        <div class="form-group">
                            <div class="">
                                <input id="school_box" type="text" class="form-control" name="q" placeholder="enter school name">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-bottom:10px">
                        <button class="btn btn-primary btn-block" style="width:200px;padding:10px 12px;" onclick="search_school()">Search</button>
                    </div>
                </div>
            </div>
            <div id="banks_india" class="tab-pane fade">
                <h2 style="text-align:center;color:white">Search Bank Any where in India</h2>
                <div class="row">
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="bank_state" onchange="get_bank_city(this.value)">
                            <option value=0>Select State</option>
                            <option value='andamanand-nicobar-islands'>Andamanand Nicobar Islands</option>
                            <option value='andhra-pradesh'>Andhra Pradesh</option>
                            <option value='arunachal-pradesh'>Arunachal Pradesh</option>
                            <option value='assam'>Assam</option>
                            <option value='bihar'>Bihar</option>
                            <option value='chandigarh'>Chandigarh</option>
                            <option value='chhattisgarh'>Chhattisgarh</option>
                            <option value='dadraand-nagar-haveli'>Dadraand Nagar Haveli</option>
                            <option value='delhi'>Delhi</option>
                            <option value='goa'>Goa</option>
                            <option value='gujarat'>Gujarat</option>
                            <option value='haryana'>Haryana</option>
                            <option value='himachal-pradesh'>Himachal Pradesh</option>
                            <option value='jammuand-kashmir'>Jammuand Kashmir</option>
                            <option value='jharkhand'>Jharkhand</option>
                            <option value='karnataka'>Karnataka</option>
                            <option value='kerala'>Kerala</option>
                            <option value='kolkata'>Kolkata</option>
                            <option value='madhya-pradesh'>Madhya Pradesh</option>
                            <option value='maharashtra'>Maharashtra</option>
                            <option value='manipur'>Manipur</option>
                            <option value='meghalaya'>Meghalaya</option>
                            <option value='nagaland'>Nagaland</option>
                            <option value='new-delhi'>New Delhi</option>
                            <option value='orissa'>Orissa</option>
                            <option value='puducherry'>Puducherry</option>
                            <option value='punjab'>Punjab</option>
                            <option value='rajasthan'>Rajasthan</option>
                            <option value='sikkim'>Sikkim</option>
                            <option value='tamil-nadu'>Tamil Nadu</option>
                            <option value='telangana'>Telangana</option>
                            <option value='tripura'>Tripura</option>
                            <option value='uttar-pradesh'>Uttar Pradesh</option>
                            <option value='uttarakhand'>Uttarakhand</option>
                            <option value='west-bengal'>West Bengal</option>
                        </select>
                        <br/>
                        <span style="color:white" id="school_state_error"></span>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control select2" id="nontech_district">
                            <option value="0">All District</option>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px">
                        <select class="form-control" id="center_city">
                            <option value=0>Select City</option>
                        </select>
                        <br/>
                        <span style="color:white" id="center_city_error"></span>
                    </div>
                    <div class="col-sm-4 col-md-8 col-md-12" style="margin-bottom:10px">
                        <div class="form-group">
                            <div class="">
                                <input id="school_box" type="text" class="form-control" name="q" placeholder="enter bank name">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-bottom:10px">
                        <button class="btn btn-primary btn-block" style="width:200px;padding:10px 12px;" onclick="search_bank()">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>