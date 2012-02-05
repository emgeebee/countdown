var customEvent = "D-Day in ";
var noDateErrorMessage = 'Please append a date and time to the URL, using the format http://www.d-day.in/#yyyy-mm-dd-hh-mm-ss or create a custom event';
var wrongDateFormat =  'This date is not valid. Please append a date and time to the URL, using the format http://www.d-day.in/#yyyy-mm-dd-hh-mm-ss or create a custom event';

var error = 0;
var errorString = "";
var endDate;
var savedEvent = 0;

var prepareDate = function(URLdateTime){
	if(!URLdateTime[1]){
		errorString = noDateErrorMessage;
			error = 1;
	} else {
		var dateTimeArray = URLdateTime[1].split('-');
		if(checkValidYear(dateTimeArray[0]) && checkValidMonth(dateTimeArray[1]) && checkValidDay(dateTimeArray[2]) && checkValidHour(dateTimeArray[3]) && checkValidMinute(dateTimeArray[4]) && checkValidSecond(dateTimeArray[5])){
			var endDateYear = dateTimeArray[0];
			var endDateMonth = parseInt(dateTimeArray[1]) - 1;
			var endDateDay = dateTimeArray[2];
			var endDateHour = dateTimeArray[3];
			var endDateMin = dateTimeArray[4];
			var endDateSec = dateTimeArray[5];
		} else {
			errorString = wrongDateFormat;
			error = 1;}
	}
	endDate = new Date(endDateYear,endDateMonth,endDateDay,endDateHour,endDateMin,endDateSec);
	$('#eventText').text(customEvent);
}

var setTimeRemaining = function(){
	var htmlString = "";
	var titleString = "";
	var date = new Date();
	var timeleft = endDate - date;
	var cumTime = 0;
	var daysLeft = formatDigits(Math.floor((timeleft - cumTime)/ (24 * 3600000)), 2);
	cumTime += daysLeft * 24 * 3600000;
	var hoursLeft = formatDigits(Math.floor((timeleft - cumTime)/ 3600000), 2);
	cumTime += hoursLeft * 3600000;
	var minsLeft = formatDigits(Math.floor((timeleft - cumTime)/ 60000), 2);
	cumTime += minsLeft * 60000;
	var secondsLeft = formatDigits(Math.floor((timeleft - cumTime)/ 1000),2);
	cumTime += secondsLeft * 1000;
	var milisecondsLeft = formatDigits(Math.floor(timeleft - cumTime), 3);

	if(error == 1){
		htmlString = errorString;
	} else {
		if(daysLeft != 0){
			htmlString =  daysLeft + " days, and " + hoursLeft + ':' + minsLeft + ':' + secondsLeft + ':' + milisecondsLeft;
			titleString = daysLeft + " days, " + hoursLeft + ':' + minsLeft + ':' + secondsLeft;
		} else {
			htmlString =  hoursLeft + ':' + minsLeft + ':' + secondsLeft + ':' + milisecondsLeft;
			titleString = hoursLeft + ':' + minsLeft + ':' + secondsLeft;
		}
		document.title = titleString;
	}
	$('#clock').text(htmlString);
	if(error == 0){
		setTimeout("setTimeRemaining()", 1);
	}
}

var checkValidSecond = function(sec){
	return checkValidMinute(sec);
}
var checkValidMinute = function(min){
	var minNumber = parseInt(min);
	if(minNumber > 60 || minNumber < 0 || isNaN(minNumber)){
		console.log('bad min/sec');
		return false;
	}
	return true
}

var checkValidHour = function(hour){
	var hourNumber = parseInt(hour);
	if(!hourNumber || hourNumber > 24 || hourNumber < 0 || isNaN(hourNumber)){
		console.log('bad hour');
		return false;
	}
	return true
}

var checkValidDay = function(day){
	var dayNumber = parseInt(day);
	if(!dayNumber || dayNumber > 31 || dayNumber < 0 || isNaN(dayNumber)){
		console.log('bad day');
		return false;
	}
	return true
}

var checkValidMonth = function(month){
	var monthNumber = parseInt(month);
	if(!monthNumber || monthNumber > 12 || monthNumber < 0 || isNaN(monthNumber)){
		console.log('bad month');
		return false;
	}
	return true
}

var checkValidYear = function(year){
	var yearNumber = parseInt(year);
	if(!yearNumber || isNaN(yearNumber)){
		console.log('bad year');
		return false;
	}
	return true
}

var formatDigits = function(number, digits){
	var num = number + "";
	while (num.length < digits) {
		num = "0" + num;
	}
	return num;
}

var validateForm = function(){
	if($('#dateName').val() == "" || $('#datepicker').val() == ""){
		alert('Please enter data for all fields.');
		return false
	}
}