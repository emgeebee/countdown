/* Author:

*/
if(savedEvent != 0){
	customEvent = savedEvent[0] + ' in ';
	var URLdateTime = savedEvent;
} else if(document.URL.split('#')[1]){
	var URLdateTime = document.URL.split('#');
}
prepareDate(URLdateTime);
setTimeout("setTimeRemaining()", 1);