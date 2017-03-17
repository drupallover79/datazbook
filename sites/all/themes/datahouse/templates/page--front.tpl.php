<?php global $base_url; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" itemscope itemtype="http://schema.org/Blog" prefix="og: http://ogp.me/ns#">

<head>
    <title>India's Larget School Directory | Search School, College, Coaching Center, Hostel in any city of INDIA | HindShiksha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="India's no. 1 school directory portal. Search schools, colleges, coaching center, hostels with hindshiksha">
    <meta name="keywords" content="schools, college, hostel, university, coaching center, hindshiksha">
    <meta name="author" content="hindshiksha">
    <meta property="og:title" content="India's Larget School Directory | Search School, College, Coaching Center, Hostel in any city of INDIA | HindShiksha" />
    <meta property="og:url" content="http://hindshiksha.com" />
    <meta property="og:site_name" content="hindshiksha" />
    <meta property="og:description" content="India's no. 1 school directory portal. Search schools, colleges, coaching center, hostels with hindshiksha" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="India's no. 1 school directory portal. Search schools, colleges, coaching center, hostels with hindshiksha" />

    <script data-rocketsrc="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" type="text/rocketscript"></script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=4AtMm1aMp4Z34B" style="display:none" height="1" width="1" alt="" /></noscript>
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="site-logo" class="navbar-brand" href="<?php echo $base_url;?>"><i class="fa fa-home" aria-hidden="true"></i>DATAZ<span class="yellow-color">HOUSE</span>.COM</a>
            </div>
            <?php
	$block = module_invoke('block', 'block_view', 1);
	print render($block['content']);
?>

                <div class="clearfix"> </div>
        </div>

    </nav>

    <div class="banner-bg">
        <?php
	$block = module_invoke('asd', 'block_view', 'search_form');
	print $block['content'];
?>
    </div>
    <section class="green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding-top:15px">
                    <h2 style="text-align:center;">Search By Any Keyword</h2>
                    <form action="result.php" method="GET" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="q" placeholder="Search By Any Keyword">
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-warning" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding-top:15px">
                    <h1 style="text-align:center">Browse College by stream</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/engineering-and-technology">ENGINEERING</a></div>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/management">MANAGEMENT</a></div>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/mca">MCA</a></div>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/architecture-and-town-planning">ARCHITECTURE</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/hotel-management-and-catering">HOTEL MANAGEMENT</a></div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/pharmacy">PHARMACY</a></div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="item"><a style="color:black" href="colleges/stream/applied-arts-and-crafts">ARTS &amp; CRAFT</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="green">
        <div class="container">
            <br/>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#school_1"><i class="fa fa-bank"></i>&nbsp; School</a></li>
                <li><a data-toggle="tab" href="#college_1"><i class="fa fa-graduation-cap"></i>&nbsp;Colleges </a></li>
                <li><a data-toggle="tab" href="#university_1"><i class="fa fa-graduation-cap"></i>&nbsp;University </a></li>
                <li><a data-toggle="tab" href="#coaching_1"><i class="fa fa-graduation-cap"></i>&nbsp;Coaching Center</a></li>
            </ul>
            <div class="tab-content" style="padding-top:20px;">
                <div id="school_1" class="tab-pane fade in active">
                    <div class="container">
                        <div class="col-lg-12" style="padding-top:15px">
                            <h1 style="text-align:center">Browse schools by states</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/andaman-and-nicobar-islands" title="schools in ANDAMAN and NICOBAR ISLANDS">Andaman And Nicobar Islands</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/andhra-pradesh" title="schools in ANDHRA PRADESH">Andhra Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/arunachal-pradesh" title="schools in ARUNACHAL PRADESH">Arunachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/assam" title="schools in ASSAM">Assam</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/bihar" title="schools in BIHAR">Bihar</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/chandigarh" title="schools in CHANDIGARH">Chandigarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/chattisgarh" title="schools in CHATTISGARH">Chattisgarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/dadra-and-nagar-haveli" title="schools in DADRA and NAGAR HAVELI">Dadra And Nagar Haveli</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/daman-and-diu" title="schools in DAMAN and DIU">Daman And Diu</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/delhi" title="schools in DELHI">Delhi</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/goa" title="schools in GOA">Goa</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/gujarat" title="schools in GUJARAT">Gujarat</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/haryana" title="schools in HARYANA">Haryana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/himachal-pradesh" title="schools in HIMACHAL PRADESH">Himachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/jammu-and-kashmir" title="schools in JAMMU and KASHMIR">Jammu And Kashmir</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/jharkhand" title="schools in JHARKHAND">Jharkhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/karnataka" title="schools in KARNATAKA">Karnataka</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/kerala" title="schools in KERALA">Kerala</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/lakshadweep" title="schools in LAKSHADWEEP">Lakshadweep</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/madhya-pradesh" title="schools in MADHYA PRADESH">Madhya Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/maharashtra" title="schools in MAHARASHTRA">Maharashtra</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/manipur" title="schools in MANIPUR">Manipur</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/meghalaya" title="schools in MEGHALAYA">Meghalaya</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/mizoram" title="schools in MIZORAM">Mizoram</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/nagaland" title="schools in NAGALAND">Nagaland</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/odisha" title="schools in ODISHA">Odisha</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/pondicherry" title="schools in PONDICHERRY">Pondicherry</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/punjab" title="schools in PUNJAB">Punjab</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/rajasthan" title="schools in RAJASTHAN">Rajasthan</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/sikkim" title="schools in SIKKIM">Sikkim</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/tamil-nadu" title="schools in TAMIL NADU">Tamil Nadu</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/telangana" title="schools in TELANGANA">Telangana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/tripura" title="schools in TRIPURA">Tripura</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/uttar-pradesh" title="schools in UTTAR PRADESH">Uttar Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/uttarakhand" title="schools in UTTARAKHAND">Uttarakhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="schools/west-bengal" title="schools in WEST BENGAL">West Bengal</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="college_1" class="tab-pane fade ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" style="padding-top:15px">
                                <h2 style="text-align:center">Browse College by State</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/andaman-and-nicobar-islands" title="colleges in Andaman & Nicobar Islands">Andaman & Nicobar Islands</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/andhra-pradesh" title="colleges in Andhra Pradesh">Andhra Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/arunachal-pradesh" title="colleges in Arunachal Pradesh">Arunachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/assam" title="colleges in Assam">Assam</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/bihar" title="colleges in Bihar">Bihar</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/chandigarh" title="colleges in Chandigarh">Chandigarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/chhatisgarh" title="colleges in Chhatisgarh">Chhatisgarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/dadra-and-nagar-haveli" title="colleges in Dadra & Nagar Haveli">Dadra & Nagar Haveli</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/daman-and-diu" title="colleges in Daman & Diu">Daman & Diu</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/delhi" title="colleges in Delhi">Delhi</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/goa" title="colleges in Goa">Goa</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/gujarat" title="colleges in Gujarat">Gujarat</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/haryana" title="colleges in Haryana">Haryana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/himachal-pradesh" title="colleges in Himachal Pradesh">Himachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/jammu-and-kashmir" title="colleges in Jammu and Kashmir">Jammu and Kashmir</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/jharkhand" title="colleges in Jharkhand">Jharkhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/karnataka" title="colleges in Karnataka">Karnataka</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/kerala" title="colleges in Kerala">Kerala</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/lakshadweep" title="colleges in Lakshadweep">Lakshadweep</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/madhya-pradesh" title="colleges in Madhya Pradesh">Madhya Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/maharashtra" title="colleges in Maharashtra">Maharashtra</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/manipur" title="colleges in Manipur">Manipur</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/meghalaya" title="colleges in Meghalaya">Meghalaya</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/mizoram" title="colleges in Mizoram">Mizoram</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/nagaland" title="colleges in Nagaland">Nagaland</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/odisha" title="colleges in Odisha">Odisha</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/puducherry" title="colleges in Puducherry">Puducherry</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/punjab" title="colleges in Punjab">Punjab</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/rajasthan" title="colleges in Rajasthan">Rajasthan</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/sikkim" title="colleges in Sikkim">Sikkim</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/tamil-nadu" title="colleges in Tamil Nadu">Tamil Nadu</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/telangana" title="colleges in Telangana">Telangana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/tripura" title="colleges in Tripura">Tripura</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/uttar-pradesh" title="colleges in Uttar Pradesh">Uttar Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/uttrakhand" title="colleges in Uttrakhand">Uttrakhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="non-technical/college/west-bengal" title="colleges in West Bengal">West Bengal</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="university_1" class="tab-pane fade ">
                    <div class="container">
                        <div class="row" style="padding-top:15px">
                            <div class="col-sm-12">
                                <h2 style="text-align:center">Browse Universities by state</h2>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/andaman-and-nicobar-islands" title="universities in Andaman & Nicobar Islands">Andaman & Nicobar Islands</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/andhra-pradesh" title="universities in Andhra Pradesh">Andhra Pradesh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/arunachal-pradesh" title="universities in Arunachal Pradesh">Arunachal Pradesh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/assam" title="universities in Assam">Assam</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/bihar" title="universities in Bihar">Bihar</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/chandigarh" title="universities in Chandigarh">Chandigarh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/chhatisgarh" title="universities in Chhatisgarh">Chhatisgarh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/dadra-and-nagar-haveli" title="universities in Dadra & Nagar Haveli">Dadra & Nagar Haveli</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/daman-and-diu" title="universities in Daman & Diu">Daman & Diu</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/delhi" title="universities in Delhi">Delhi</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/goa" title="universities in Goa">Goa</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/gujarat" title="universities in Gujarat">Gujarat</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/haryana" title="universities in Haryana">Haryana</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/himachal-pradesh" title="universities in Himachal Pradesh">Himachal Pradesh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/jammu-and-kashmir" title="universities in Jammu and Kashmir">Jammu and Kashmir</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/jharkhand" title="universities in Jharkhand">Jharkhand</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/karnataka" title="universities in Karnataka">Karnataka</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/kerala" title="universities in Kerala">Kerala</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/lakshadweep" title="universities in Lakshadweep">Lakshadweep</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/madhya-pradesh" title="universities in Madhya Pradesh">Madhya Pradesh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/maharashtra" title="universities in Maharashtra">Maharashtra</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/manipur" title="universities in Manipur">Manipur</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/meghalaya" title="universities in Meghalaya">Meghalaya</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/mizoram" title="universities in Mizoram">Mizoram</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/nagaland" title="universities in Nagaland">Nagaland</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/odisha" title="universities in Odisha">Odisha</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/puducherry" title="universities in Puducherry">Puducherry</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/punjab" title="universities in Punjab">Punjab</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/rajasthan" title="universities in Rajasthan">Rajasthan</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/sikkim" title="universities in Sikkim">Sikkim</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/tamil-nadu" title="universities in Tamil Nadu">Tamil Nadu</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/telangana" title="universities in Telangana">Telangana</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/tripura" title="universities in Tripura">Tripura</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/uttar-pradesh" title="universities in Uttar Pradesh">Uttar Pradesh</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/uttrakhand" title="universities in Uttrakhand">Uttrakhand</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="non-technical/university/west-bengal" title="universities in West Bengal">West Bengal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="coaching_1" class="tab-pane fade">
                    <div class="container">
                        <div class="col-lg-12" style="padding-top:15px">
                            <h1 style="text-align:center">Browse Coaching Center by states</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/andamanand-nicobar-islands" title="schools in Andamanand Nicobar Islands">Andamanand Nicobar Islands</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/andhra-pradesh" title="schools in Andhra Pradesh">Andhra Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/arunachal-pradesh" title="schools in Arunachal Pradesh">Arunachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/assam" title="schools in Assam">Assam</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/bihar" title="schools in Bihar">Bihar</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/chandigarh" title="schools in Chandigarh">Chandigarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/chhattisgarh" title="schools in Chhattisgarh">Chhattisgarh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/dadraand-nagar-haveli" title="schools in Dadraand Nagar Haveli">Dadraand Nagar Haveli</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/delhi" title="schools in Delhi">Delhi</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/goa" title="schools in Goa">Goa</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/gujarat" title="schools in Gujarat">Gujarat</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/haryana" title="schools in Haryana">Haryana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/himachal-pradesh" title="schools in Himachal Pradesh">Himachal Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/jammuand-kashmir" title="schools in Jammuand Kashmir">Jammuand Kashmir</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/jharkhand" title="schools in Jharkhand">Jharkhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/karnataka" title="schools in Karnataka">Karnataka</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/kerala" title="schools in Kerala">Kerala</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/kolkata" title="schools in Kolkata">Kolkata</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/madhya-pradesh" title="schools in Madhya Pradesh">Madhya Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/maharashtra" title="schools in Maharashtra">Maharashtra</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/manipur" title="schools in Manipur">Manipur</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/meghalaya" title="schools in Meghalaya">Meghalaya</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/nagaland" title="schools in Nagaland">Nagaland</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/new-delhi" title="schools in New Delhi">New Delhi</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/orissa" title="schools in Orissa">Orissa</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/puducherry" title="schools in Puducherry">Puducherry</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/punjab" title="schools in Punjab">Punjab</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/rajasthan" title="schools in Rajasthan">Rajasthan</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/sikkim" title="schools in Sikkim">Sikkim</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/tamil-nadu" title="schools in Tamil Nadu">Tamil Nadu</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/telangana" title="schools in Telangana">Telangana</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/tripura" title="schools in Tripura">Tripura</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/uttar-pradesh" title="schools in Uttar Pradesh">Uttar Pradesh</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/uttarakhand" title="schools in Uttarakhand">Uttarakhand</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="coaching-centers/state/west-bengal" title="schools in West Bengal">West Bengal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <div class="row" style="padding-top:20px">
                <div class="col-sm-4">
                    <h3 class="widget-title">Latest News</h3>
                    <p style="border-bottom:1px solid #ccc;padding-bottom:5px;margin:15px 0px">
                        <a style="color:#034482" href="blog/post-detail/242/jharkhand-tet-2016-admit-cards-released-at-jac-jharkhand-gov-in" target="_blank">Jharkhand TET 2016: Admit cards released at jac.jharkhand.gov.in</a>
                    </p>
                    <p style="border-bottom:1px solid #ccc;padding-bottom:5px;margin:15px 0px">
                        <a style="color:#034482" href="blog/post-detail/241/dmrc-assistant-manager-admit-card-to-be-released-in-two-days-check-here" target="_blank">DMRC Assistant Manager Admit Card to be released in two days: Check here</a>
                    </p>
                    <p style="border-bottom:1px solid #ccc;padding-bottom:5px;margin:15px 0px">
                        <a style="color:#034482" href="blog/post-detail/240/upsc-ias-mains-to-begin-on-december-18-sample-papers" target="_blank">UPSC IAS (Mains) to begin on December 18: Sample Papers</a>
                    </p>
                    <p style="border-bottom:1px solid #ccc;padding-bottom:5px;margin:15px 0px">
                        <a style="color:#034482" href="blog/post-detail/239/amu-awards-professor-compulsory-retirement-cites-dereliction-of-duty-insubordination" target="_blank">AMU awards professor compulsory retirement, cites ‘dereliction of duty’, ‘insubordination’</a>
                    </p>
                    <p style="border-bottom:1px solid #ccc;padding-bottom:5px;margin:15px 0px">
                        <a style="color:#034482" href="blog/post-detail/238/ssc-combined-graduate-level-tier-1-examination-2016-results-declared-check-ssc-nic-in" target="_blank">SSC Combined Graduate Level (Tier 1) Examination, 2016 results declared; check ssc.nic.in</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3 class="widget-title">Testimonials</h3>
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">

                        <ol class="carousel-indicators">
                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="1" class=""></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="2" class=""></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="3" class=""></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="4" class=""></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                <blockquote>
                                    <p>Home page of website is good there is easy navigation. anybody can find anything related to education easily on this website , all information are managed very well </p>
                                    <br/>
                                    <span style="color:blue">Sanjay jain</span>
                                </blockquote>
                            </div>
                            <div class=" item">
                                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                <blockquote>
                                    <p>Just Gone Through Universities Details on google where found this site. amazing work need some updates but its great to have too much information on indian education keep it up best of luck for your future</p>
                                    <br/>
                                    <span style="color:blue">Ajay Kumawat</span>
                                </blockquote>
                            </div>
                            <div class=" item">
                                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                <blockquote>
                                    <p>Easy to Search Find A lot of Detail having good amount of detail good one</p>
                                    <br/>
                                    <span style="color:blue">Suman Soni</span>
                                </blockquote>
                            </div>
                            <div class=" item">
                                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                <blockquote>
                                    <p>wow great website great to know that there is a option to know that how much schools in my district , you are giving such a big amount of information</p>
                                    <br/>
                                    <span style="color:blue">Rajesh Kumar</span>
                                </blockquote>
                            </div>
                            <div class=" item">
                                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                <blockquote>
                                    <p>you are doing great job by giving all the education related information free of cost. great effort</p>
                                    <br/>
                                    <span style="color:blue">Sudha Sharma</span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3 class="widget-title">Latest Reviews</h3>
                    <div style="float:left;width:100%;border-bottom:1px solid #ccc;padding-bottom:5px;margin-top:2px">

                        <div style="float:left;padding-left:10px">
                            <a href="school/02050803102">GSSS JAHAL</a>
                            <br/>
                            <span id="user_rating_553"></span>
                            <script type="text/rocketscript">
                                $(function () { var user_rating = 5; var that = this; var toolitup = $("#user_rating_553").jRate({ rating: user_rating, strokeColor: 'red', width: 15, height: 15, precision: 1, readOnly: true }); });
                            </script>
                            <br/>
                            <span>
I even traveled to 10th completed.. And here began my journey from childhood to youth.... I mis... </span>
                        </div>
                    </div>
                    <div style="float:left;width:100%;border-bottom:1px solid #ccc;padding-bottom:5px;margin-top:2px">

                        <div style="float:left;padding-left:10px">
                            <a href="school/02050803102">GSSS JAHAL</a>
                            <br/>
                            <span id="user_rating_552"></span>
                            <script type="text/rocketscript">
                                $(function () { var user_rating = 5; var that = this; var toolitup = $("#user_rating_552").jRate({ rating: user_rating, strokeColor: 'red', width: 15, height: 15, precision: 1, readOnly: true }); });
                            </script>
                            <br/>
                            <span>
I even traveled to 10th completed.. And here began my journey from childhood to youth.... I mis... </span>
                        </div>
                    </div>
                    <div style="float:left;width:100%;border-bottom:1px solid #ccc;padding-bottom:5px;margin-top:2px">

                        <div style="float:left;padding-left:10px">
                            <a href="school/08170613409">DESERT PUBLIC SCHOOL BALERA</a>
                            <br/>
                            <span id="user_rating_551"></span>
                            <script type="text/rocketscript">
                                $(function () { var user_rating = 5; var that = this; var toolitup = $("#user_rating_551").jRate({ rating: user_rating, strokeColor: 'red', width: 15, height: 15, precision: 1, readOnly: true }); });
                            </script>
                            <br/>
                            <span>
Thanks... </span>
                        </div>
                    </div>
                    <div style="float:left;width:100%;border-bottom:1px solid #ccc;padding-bottom:5px;margin-top:2px">

                        <div style="float:left;padding-left:10px">
                            <a href="school/24220901909">BLUE DALE ENGLISH SCHOOL</a>
                            <br/>
                            <span id="user_rating_550"></span>
                            <script type="text/rocketscript">
                                $(function () { var user_rating = 4; var that = this; var toolitup = $("#user_rating_550").jRate({ rating: user_rating, strokeColor: 'red', width: 15, height: 15, precision: 1, readOnly: true }); });
                            </script>
                            <br/>
                            <span>
First & best English medium school in vareli... </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container counter">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2">
                <span class="states-counter ">1.4</span> <span style="font-size:3em">M +</span>
                <br/>
                <span class="tag">Schools</span>
            </div>
            <div class="col-sm-2">
                <span class="states-counter ">44</span> <span style="font-size:3em">K +</span>
                <br/>
                <span class="tag">Colleges</span>
            </div>
            <div class="col-sm-2">
                <span class="states-counter ">600</span> <span style="font-size:3em"> +</span>
                <br/>
                <span class="tag">Universities</span>
            </div>
            <div class="col-sm-2">
                <span class="states-counter ">500</span> <span style="font-size:3em"> +</span>
                <br/>
                <span class="tag">Coaching Center</span>
            </div>
            <div class="col-sm-2">
                <span class="states-counter ">1,200</span> <span style="font-size:3em"> +</span>
                <br/>
                <span class="tag">Hostels</span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var HOME_URL = '';
        $(document).ready(function() {
            $(".select2").select2();
            $('.states-counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

        function get_sub_stream(stream_id) {
            $.ajax({
                type: "POST",
                url: "get_sub_stream.php",
                data: {
                    "stream": stream_id
                },
                beforeSend: function() {
                    myApp.showPleaseWait();
                },
                success: function(response) {
                    myApp.hidePleaseWait();
                    $("#sub_stream").html(response);
                }
            });
        }

        function get_city(state) {
            $.ajax({
                type: "POST",
                url: "get_city_by_state.php",
                data: {
                    "state": state
                },
                beforeSend: function() {
                    myApp.showPleaseWait();
                },
                success: function(response) {
                    myApp.hidePleaseWait();
                    $("#city").html(response);
                }
            });
        }
    </script>
    <script type="text/rocketscript">
        function get_school_district(state) { $.ajax({ type : "POST", url : HOME_URL+"get_district.php", data : {state : state}, beforeSend : function(){ myApp.showPleaseWait(); }, success : function(response) { myApp.hidePleaseWait(); $("#school_district").html(response); }, error : function(response) { alert(response.status) } }); } function get_school_area(district) { var state = $("#school_state").val(); $.ajax({ type : "POST", url : HOME_URL+"get_area.php", data : {state : state, district : district}, beforeSend : function() { myApp.showPleaseWait(); }, success : function(response) { myApp.hidePleaseWait(); $("#school_area").html(response); }, error : function(response) { alert(response.status) } }); } function search_school() { var district = $("#school_district").val().toLowerCase(); var area = $("#school_area").val().toLowerCase() //var q= $("#name").val().toLowerCase(); var q=""; if(district!=0 && area!=0) { var url = HOME_URL+"schools-in-"+district+"/"+area+"?q="+q; window.location.assign(url); } else if(district!=0 && area==0) { var url = HOME_URL+"schools-in-"+district+"?q="+q; window.location.assign(url); } else { alert("Please select district"); } } function search_college() { var stream=$("#stream").val(); var sub_stream=$("#sub_stream").val(); var state=$("#state").val(); var city=$("#city").val(); var url=""; if(stream==0) { $("#stream_error").html("Please select Stream"); } else { $("#stream_error").html(""); //url='colleges/stream/'+stream; if(sub_stream==0 || sub_stream==null) { url='colleges/stream/'+stream; } else { url='colleges/sub-stream/'+sub_stream; } if(city!=0 && city!=null) { url+='/city/'+city; } else if(city==0 && state!=0) { url+='/state/'+state; } if(url!="") { window.location.assign(url); } } } //Get Non tech College District function get_nontech_district(state) { $.ajax({ type : "POST", url : "get_nontect_district.php", data : {"state" : state, "slug" : "yes"}, beforeSend : function(){ myApp.showPleaseWait(); }, success: function(response) { myApp.hidePleaseWait(); $("#nontech_district").html(response); } }); } function search_nontech() { var type=$("#nontech_type").val(); if(type==0) { $("#non_tech_error").html("Please select type"); } else { var url="non-technical/"+type; var state=$("#nontech_state").val(); var district=$("#nontech_district").val(); if(state!=0 && state!="") { url+="/"+state; } if(district!=0 && district!="") { url+="/"+district; } window.location.assign(url); } } function search_topper() { var year=$("#topper_year").val(); var board=$("#topper_board").val(); var state=$("#topper_state").val(); var redirect=false; if(year==0) { $("#topper_year_error").html("Please select year"); redirect=false; } else { $("#topper_year_error").html(""); redirect=true; } if(board==0) { $("#topper_board_error").html("Please select board"); redirect=false; } else { $("#topper_board_error").html(""); redirect=true; } if(board==2 && state==0) { $("#topper_state_error").html("Please select state"); redirect=false; } else { $("#topper_board_error").html(""); redirect=true; } if(redirect) { var url=HOME_URL+"toppers/"+state; window.location.assign(url); } } //coaching center function get_center_city(state) { $.ajax({ type : "POST", url : "get_center_city.php", data : {"state" : state, "slug" : "yes"}, beforeSend : function(){ myApp.showPleaseWait(); }, success: function(response) { myApp.hidePleaseWait(); $("#center_city").html(response); } }); } function search_center() { var state=$("#center_state").val(); var city=$("#center_city").val(); var url=""; url='coaching-centers/'+state+'/'+city; if(state==0) { $("#center_state_error").html("Please select state"); } else if(city==0) { $("#center_state_error").html(""); $("#center_city_error").html("Please select city"); } else { window.location.assign(url); } } // hostel function search_hostel() { var state=$("#hostel_state").val(); var district=$("#hostel_district").val(); var city=$("#hostel_city").val(); var url=""; url='hostels/'+state+'/'+city; if(state==0) { $("#hostel_state_error").html("Please select state"); } else if(district==0) { $("#hostel_district_error").html("Please select district"); $("#hostel_state_error").html(""); } else if(city==0) { $("#hostel_district_error").html(""); $("#hostel_state_error").html(""); $("#hostel_city_error").html("Please select city"); } else { window.location.assign(url); } } function get_hostel_district(state) { $.ajax({ type : "POST", url : "get_district.php", data : {"state" : state, "slug" : "yes"}, beforeSend : function(){ myApp.showPleaseWait(); }, success: function(response) { myApp.hidePleaseWait(); $("#hostel_district").html(response); } }); } function get_hostel_city(district) { $.ajax({ type : "POST", url : "get_city.php", data : {"district" : district, "id" : "yes"}, beforeSend : function(){ myApp.showPleaseWait(); }, success: function(response) { myApp.hidePleaseWait(); $("#hostel_city").html(response); } }); }

    </script>
    <section class="white" style="padding-top:10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Subscribe to our Newsletter</h3>
                </div>
            </div>
            <div class="row">
                <form method="POST">
                    <div class="col-sm-offset-1 col-sm-3">
                        <input type="text" class="form-control" name="name" id="subscribe_name" placeholder="Your Name">
                    </div>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" name="email" id="subscribe_email" placeholder="Your Email">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="mobile" id="subscribe_mobile" maxlength=10 placeholder="Your Mobile No.">
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-primary" onclick="subscribe()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 text-center">
                    <ul class="footer-link">
                        <li><a title="About" href="about-us">About</a></li>
                        <li><a title="Disclaimer" href="disclaimer">Disclaimer</a></li>
                        <li><a title="Terms of use" href="terms-of-use">Terms of use</a></li>
                        <li><a title="Privacy Policy" href="privacy-policy">Privacy Policy</a></li>
                        <li><a title="Blog" href="blog" target="_blank">Blog</a></li>
                        <li><a title="Contact Us" href="contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <br/>
            <div class="row text-center">
                <div class="col-sm-12">
                    Copyright &copy; 2015 HindShiksha.com . All Rights Reserved | Design by <a href="">www.hindshiksha.com</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/rocketscript">
    function subscribe() { var name = $.trim($("#subscribe_name").val()); var email = $.trim($("#subscribe_email").val()); var mobile = $.trim($("#subscribe_mobile").val()); if(name!="" && email!="" && mobile!="") { $.ajax({ type : "POST", url : "subscribe.php", data : {"name" : name,"email" : email,"mobile":mobile}, beforeSend :function(){ myApp.showPleaseWait(); }, success : function(response) { myApp.hidePleaseWait(); $("#subscribe_name").val(""); $("#subscribe_email").val(""); $("#subscribe_mobile").val(""); if(response=="1") { alert("Thank you for subscribing us."); } else { alert("Error! Please try again later."); } } }); } else { alert("All fields are required."); } }
</script>
