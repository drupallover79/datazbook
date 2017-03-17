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

            </div>
        </div>
    </section>

    <div class="container">
        <div id="contentRow" class="row">
            <?php print render($page['content']); ?>
        </div>
    </div>

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
