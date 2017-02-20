$(document).ready(function () {
    //$('.ui-timepicker-input').timepicker({ 'scrollDefault': 'now' });
    function setKnobTime() {
        var currDate = new Date();
        var hours = currDate.getHours();
        var mins = currDate.getMinutes();
        var day = 1440;
        var timeRemaining = day - (mins + hours * 60);
        var timePassed = day - timeRemaining;
        percentage = ((timePassed / day)*100).toFixed(2);
        $('input.knob').attr("value", percentage).css("display", "none");
        $('span.finalCountdown').text(percentage+"%");
    }
    setKnobTime();
    setInterval(function(){
        setKnobTime();
    }, 5000);
});