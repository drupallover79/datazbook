var $ = jQuery.noConflict();

$(document).ready(function(){ 
	$('#company_director').on('change', function() {
	var cd_filter = this.value; 
	if(cd_filter == 'company') {
		$('#company_director_box').attr('placeholder','enter company name or cin');
	} else if(cd_filter == 'director') {
		$('#company_director_box').attr('placeholder','enter director name or din');
	} else {
		$('#company_director_box').attr('placeholder','Choose option first');
	}
})

//college university
$('#nontech_type').on('change', function() { 
	var cu_filter = this.value;  
	if(cu_filter == 'college') {
		$('#college_university_box').attr('placeholder','enter college name');
	} else if(cu_filter == 'university') {
		$('#college_university_box').attr('placeholder','enter university name');
	} else {
		$('#college_university_box').attr('placeholder','Choose option first');
	}
});
		var typingTimer;                //timer identifier
		var doneTypingInterval = 175;

		jQuery("#company_director_box").keyup(function() 
		{ 
			clearTimeout(typingTimer);
			typingTimer = setTimeout(doneTyping, doneTypingInterval);
		});	
		//on keydown, clear the countdown 
		jQuery("#company_director_box").on("keydown", function () { 
			if(typingTimer){
					clearTimeout(typingTimer);
					typingTimer = null;
			}
		
		});
		
		/********************College**********************/
		var collegetypingTimer;                //timer identifier
		var donecollegeTypingInterval = 175;

		jQuery("#college_box").keyup(function() 
		{  
			clearTimeout(collegetypingTimer);
			collegetypingTimer = setTimeout(donecollegeTyping, donecollegeTypingInterval);
		});	
		//on keydown, clear the countdown 
		jQuery("#college_box").on("keydown", function () { 
			if(collegetypingTimer){
					clearTimeout(collegetypingTimer);
					collegetypingTimer = null;
			}
		
		});
		
	function donecollegeTyping () { 
    var searchtext = jQuery("#college_box").val();
	var collegetype = $("#college_type").val();
	var college_state = $("#college_state").val();
	
	if(collegetype==0) { 
		$("#college_error").html("Please Select College Type");
	} else {
		$("#college_error").html("");
		jQuery.ajax(
			{
			type: "POST",
			url: "/datahouse/college-search",
			data: "college="+ searchtext +"&collegeType="+collegetype +"&state="+college_state,
			cache: false,
			success: function(html)
					{
						
						jQuery("#collegeresult").html(html).show();
					}
			});
	}
	
	}
	
	jQuery(document).on("click", function(e) { 
		var $clicked = $(e.target);
		if (! $clicked.hasClass("custom-search")){
		
		jQuery("#collegeresult").fadeOut(); 
		}
	});
		
	/*********************College End*******************/
	
	
	jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
	
		
	jQuery("#open-menu").on('click', function() 
	{
		$(".mobile-dropdown").slideToggle("slow");
	});
	
	
	/*jQuery('.left-sidebar .categories-menu > li').on('click', function (event) { 
		event.preventDefault();
		if (!$(this).hasClass('active')) {
			$('.left-sidebar .categories-menu > li.active').removeClass('active');
			$(this).addClass('active');
			
			
		}
	});*/

	jQuery('.add').on("click", function(e) {
		jQuery('.show-error').css({"display": "none"});
		jQuery('.show-input-error').css({"display": "none"});
		jQuery('.show-submitteremailerror').css({"display": "none"});
		
        jQuery("#website-box").val('');
 		jQuery("#email-box").val('');
 		jQuery("#websitesubmiiter-name").val('');
 		jQuery("#websitesubmiiter-email").val('');
 
		});
		
	jQuery('#addwebsitebtn').on("click", function(e) { 
          
          jQuery('.show-error').css({"display": "none"});
          jQuery('.show-submitteremailerror').css({"display": "none"});
		  jQuery('.show-input-error').css({"display": "none"});

         var website = jQuery("#website-box").val();
         var websitesubmitterName = jQuery("#websitesubmiiter-name").val();
         var websitesubmitterEmail = jQuery("#websitesubmiiter-email").val();

		var company = jQuery("#company-box").val();
 
		var cin = jQuery("#cin-box").val();

		if(websitesubmitterEmail !="")
		{
			var re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!re.test(websitesubmitterEmail)) {
                    jQuery('.show-submitteremailerror').css({"display": "block"});	
                    return false;	
			} 
		} 


          if(website !="")
		{
			 var re = /(http(s)?:\\)?([\w-]+\.)+[\w-]+[.com|.in|.org]+(\[\?%&=]*)?/
			if (re.test(website)) {
                    addwebsite(website,company, cin,websitesubmitterName,websitesubmitterEmail);		
			} else { 
				jQuery('.show-error').css({"display": "block"});
			}
		} else {
			jQuery('.show-input-error').css({"display": "block"});
		}
	});
	
	function addwebsite(site,comp,cin_num,submittername,submitteremail) {
		jQuery.ajax(

			{

			type: "POST",

			url: "/datahouse/addcompanywebsite",

			data: "website="+site+"&company="+comp+"&cin="+cin_num+"&subname="+submittername+"&subemail="+submitteremail,

			cache: false,

			success: function(html)

					{
						jQuery(".websitesuccess").addClass('show-success');
						setTimeout(function () { 

							jQuery("#addwebsite .close").click();}, 1000);
						

					}

			});

	}

    	
	jQuery('#addemailbtn').on("click", function(e) { 
          	  
          jQuery('.show-error').css({"display": "none"});
          jQuery('.show-submitteremailerror').css({"display": "none"});
      		var email = jQuery("#email-box").val();
      		var emailsubmitterName = jQuery("#emailsubmiiter-name").val();
     		var emailsubmitterEmail = jQuery("#emailsubmiiter-email").val();

		var company = jQuery("#company-box").val();
 
		var cin = jQuery("#cin-box").val();

		if(emailsubmitterEmail !="")
		{
			var re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!re.test(emailsubmitterEmail)) {
                    jQuery('.show-submitteremailerror').css({"display": "block"});	
                    return false;	
			} 
		} 


          if(email !="")
		{
			 var re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (re.test(email)) {
                    addemail(email,company, cin,emailsubmitterName,emailsubmitterEmail);		
			} else {
				jQuery('.show-error').css({"display": "block"});
			}
		} else {
			jQuery('.show-input-error').css({"display": "block"});
		}
	});

	function addemail(mail,comp,cin_num,sname,smail) {
		jQuery.ajax(

			{

			type: "POST",

			url: "/datahouse/addcompanyemail",

			data: "email="+ mail +"&company="+comp +"&cin="+cin_num +"&sname="+sname +"&semail="+smail,

			cache: false,

			success: function(html)

					{
												
						jQuery(".emailsuccess").addClass('show-success');
						setTimeout(function () { 

							jQuery("#addemail .close").click();}, 1000);

					}

			});

	}

});

function search_college() {
	var stream=$("#stream").val();
	var sub_stream=$("#sub_stream").val();
	var state=$("#state").val();
	var city=$("#city").val();
	var url="";
	if(stream==0)
	{
		$("#stream_error").html("Please select Stream");
	}
	else
	{
		$("#stream_error").html("");
		//url='colleges/stream/'+stream;
		if(sub_stream==0 || sub_stream==null)
		{
			url='colleges/stream/'+stream;
		}
		else
		{
			url='colleges/sub-stream/'+sub_stream;
		}
		
		if(city!=0 && city!=null)
		{
			url+='/city/'+city;
		}
		else if(city==0 && state!=0)
		{
			url+='/state/'+state;
		}	
		
		if(url!="")
		{
			window.location.assign(url);
		}	
	}
}

function search_company_director() {
	var comp_dir=$("#company_director").val();
	var comp_director=$("#company_director_box").val();
	if(comp_dir==0)
	{
		$("#companydirector_error").html("Please select Option");
	} else if(comp_director=='') {
		$("#companydirector_error").html("Please enter some input");
	}
	else
	{
		$("#companydirector_error").html("");
		var filter = jQuery(".filter:checked").val();
		var searchtext = jQuery("#SearchText").val();
		if(searchtext!="" && filter == 'company')
		{
			$(location).attr('href', '/searchcompany/'+searchtext);
		}
		
	}
}

		

//user is "finished typing," do something
	function doneTyping () { 
    var searchtext = jQuery("#company_director_box").val();
	var filter = $("#company_director").val();
	if(searchtext!="")
		{
			jQuery.ajax(
			{
			type: "POST",
			url: "/datahouse/custom-search",
			data: "search="+ searchtext +"&filter="+filter,
			cache: false,
			success: function(html)
					{
						jQuery("#result").html(html).show();
					}
			});
		}
	}
	jQuery(document).on("click", function(e) { 
		var $clicked = $(e.target);
		if (! $clicked.hasClass("custom-search")){
		
		jQuery("#result").fadeOut(); 
		}
	});
	
	
function search_tech() {
	var college_type = $("#college_type").val();
	var college_state = $("#college_state").val();
	var college_name = $("#college_box").val();
	if(college_type==0) {
		$("#college_error").html("Please Select College Type");
	} else if(college_name=='') {
		$("#college_error").html("");
		$('#college_box').attr('placeholder','Please enter college name');
	} else {
		$("#college_error").html("");
		var searchtext = jQuery("#college_box").val();
		if(searchtext!="")
		{
			jQuery.ajax(
			{
				type: "POST",
				url: "/datahouse/college-search",
				data: "college="+ searchtext +"&state="+college_state +"&collegeType="+college_type,
				cache: false,
				success: function(html)
					{  
						jQuery("#collegeresult").html(html).show();
					}
			});
		}
	}
}
function search_nontech() {
	var col_univ=$("#nontech_type").val();
	var sub_stream=$("#sub_stream").val();
	var state=$("#state").val();
	var city=$("#city").val();
	var url="";
	if(col_univ==0)
	{
		$("#college_error").html("Please Select College Type");
	}
	else
	{
		$("#non_tech_error").html("");
		//url='colleges/stream/'+stream;
		if(sub_stream==0 || sub_stream==null)
		{
			url='colleges/stream/'+stream;
		}
		else
		{
			url='colleges/sub-stream/'+sub_stream;
		}
		
		if(city!=0 && city!=null)
		{
			url+='/city/'+city;
		}
		else if(city==0 && state!=0)
		{
			url+='/state/'+state;
		}	
		
		if(url!="")
		{
			window.location.assign(url);
		}	
	}
}