/* Author:

*/
if(document.URL.split('#')[1]){
	var URLdateTime = document.URL.split('#');
} else {
	customEvent = savedEvent[0] + ' in ';
	var URLdateTime = savedEvent;
}
prepareDate(URLdateTime);
setTimeout("setTimeRemaining()", 1);