/* Author:

*/
if(savedEvent == 0){
	var URLdateTime = document.URL.split('#');
} else {
	customEvent = savedEvent[0] + ' starts in ';
	var URLdateTime = savedEvent;
}
prepareDate(URLdateTime);
setTimeout("setTimeRemaining()", 1);
$("#newDate").click(animateForm);
