function popupgdprfunc() {
  var popup = document.getElementById("gdprPopup");
  popup.classList.toggle("show");
}
var cookiedays = "7";
var cookiedomain= ".a-raven.corsica";
	function createCookie(cookiename,cookievalue,cookiedays,cookiedomain) {
		if (cookiedays) {
			var date = new Date();
			date.setTime(date.getTime()+(cookiedays*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		} else var expires = "";
		document.cookie = cookiename+"="+cookievalue+expires+"; path=/; secure=true; domain="+cookiedomain;
	}
	function eraseCookie(cookiename) {
    createCookie(name,"",-1);
	}
document.querySelectorAll('.gdprswitch').forEach(item => {
	var switchID = item.id;
	addEventListener('change', function(){
		if (event.srcElement.id == switchID) {
			switch(event.srcElement.id) {
			  case 'gganalyticswitch':
			    var cookiename = "arc-gganalytics";
			    break;
			  case 'gtmswitch':
			    var cookiename = "arc-gtm";
		 	    break;
			  case 'sesslogswitch':
			    var cookiename = "arc-sesslog";
			    break;
			  case 'sfb1switch':
			    var cookiename = "arc-sfb1";
			    break;
			  default:
			  	var cookiename = "arc-none";
			}
			var dynamicVarName = event.srcElement.id;
			window[dynamicVarName] = event.srcElement;
			// var checkbox = event.srcElement;
    		if (window[event.srcElement.id].checked) {
    		  var cookievalue = "1";
    		  eraseCookie(cookiename);
    		  createCookie(cookiename,cookievalue,cookiedays,cookiedomain);
    		} else {
    		  var cookievalue = "0";
    		  eraseCookie(cookiename);
    		  createCookie(cookiename,cookievalue,cookiedays,cookiedomain);
    		}


		}
  });
});
