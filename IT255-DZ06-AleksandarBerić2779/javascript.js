$(document).ready(function() {
    $.ajax({
        url: 'https://api.worldoftanks.eu/wot/account/info/?application_id=demo&account_id=501198490',
        type: 'GET',
        dataType: 'JSON',
        success: function(data) {
            $('body')
                .append("status:" + data.status + ";  ")
                .append("xp:" + data.data[501198490].statistics.all.xp + ";  ")
                .append("battles:" + data.data[501198490].statistics.all.battles + ";  ")
                .append("wins:" + data.data[501198490].statistics.all.wins + ";  ");
        }
    });
});