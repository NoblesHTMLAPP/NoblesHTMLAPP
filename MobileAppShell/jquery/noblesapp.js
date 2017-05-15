var weekdays = new Array(7);
weekdays[0]=  "Sunday";
weekdays[1] = "Monday";
weekdays[2] = "Tuesday";
weekdays[3] = "Wednesday";
weekdays[4] = "Thursday";
weekdays[5] = "Friday";
weekdays[6] = "Saturday";

var weekdays_abbr = new Array(7);
weekdays_abbr[0]=  "S";
weekdays_abbr[1] = "M";
weekdays_abbr[2] = "T";
weekdays_abbr[3] = "W";
weekdays_abbr[4] = "Th";
weekdays_abbr[5] = "F";
weekdays_abbr[6] = "S";

var months_abbr = new Array(12);
months_abbr[0]=  "Jan";
months_abbr[1] = "Feb";
months_abbr[2] = "Mar";
months_abbr[3] = "Apr";
months_abbr[4] = "May";
months_abbr[5] = "Jun";
months_abbr[6] = "Jul";
months_abbr[7] = "Aug";
months_abbr[8] = "Sep";
months_abbr[9] = "Oct";
months_abbr[10] = "Nov";
months_abbr[11] = "Dec";

var isMobile = { 
Android: function() { return navigator.userAgent.match(/Android/i); }, 
BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); }, 
iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, 
Opera: function() { return navigator.userAgent.match(/Opera Mini/i); }, 
Windows: function() { return navigator.userAgent.match(/IEMobile/i); }, 
any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };


$(document).on("pageinit", "#main_page", function() {
});

$(document).on('click', '#submit', function(e) {
 });




$(window).load(function() {
 $(window).bind('resize',function(event){
	 window.scrollTo(0,0);
	 //winhigh = $.mobile.getScreenHeight(); //Get available screen height, not including any browser chrome
	 winhigh = $(window).height(); //Get available screen height, not including any browser chrome
	 headhigh = $('[data-role="header"]').first().outerHeight(); //Get height of first page's header
	 foothigh = $('[data-role="footer"]').first().outerHeight(); //Get height of first page's header
	 winhigh = winhigh - headhigh - 30; //Subtract 30 for the top and bottom 15-pixel margins around the content area
	 winwide = $(document).width(); //Get width of document
	 winwide = winwide - 30; //Subtract 30 for the right and left 15-pixel margins around the content area
	
	 $('div#main_content_refresh').css('width',winwide + 'px').css('height',winhigh + 'px'); //Change div to maximum visible area
 });

 $(window).bind('orientationchange',function(event){
 //Eliminate white-space on orientationchange: http://stackoverflow.com/questions/6448465/jquery-mobile-device-scaling
 if (window.orientation == 90 || window.orientation == -90 || window.orientation == 270) {
 $('meta[name="viewport"]').attr('content', 'height=device-width,width=device-height,initial-scale=1.0,maximum-scale=1.0');
 } else {
 $('meta[name="viewport"]').attr('content', 'height=device-height,width=device-width,initial-scale=1.0,maximum-scale=1.0');
 };
 $(window).trigger('resize');
 window.scrollTo(0,0);
 }).trigger('orientationchange');
});




$(document).ready(
function()
{	
	$("#loadingScreen").dialog({
		autoOpen: false,	// set this to false so we can manually open it
		dialogClass: "loadingScreenWindow",
		closeOnEscape: false,
		draggable: false,
		width: 100,
		height: 120,
		minHeight: 64, 
		modal: true,
		buttons: {},
		resizable: false,
		open: function() {
			// scrollbar fix for IE
			$('body').css('overflow','hidden');
		},
		close: function() {
			// reset overflow
			$('body').css('overflow','auto');
		}
	}); // end of dialog
	
	document.onreadystatechange = function () {
	  if (document.readyState == "complete") {
			$("#loadingScreen").dialog('close');
	  }
	  if (document.readyState == "loading") {
			$("#loadingScreen").dialog('open');
	  }
	}
	
	// User clicks on the logout button on the main
	$("#refreshButton").click(function(){
		window.location.href = "index.php";
		$("#main_content").refresh();
		return false;
	});

	// User clicks on the submit button in the login page
	$("li.studentName").click(function(){
		
		// Changes by Mrs. Smith on 1/18/17 
		// When the user clicks on a name in the list, you get the data-value attribute of that item.
		// When you set up the list, that is where you put the student id.
		var data = $(this).data("value");
		alert(data);
		
		
		
		
	});


	


}
);