require('./axios-master/lib/axios')
require('./jquery')

const audiofile = document.getElementById('audiofile').value
const description = document.getElementById('descrip').value

function send_data(){
    const data_string = 'audiofile=' + audiofile + '&descrip=' + description
    $.$.ajax({
        type: "POST",
        url: "home.php",
        data: data_string,
        cache : false,
        success: function (response) {
            $('#msg').html(response)
        }
    });
    return false;
}