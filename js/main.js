$(document).ready(function () {
    $('#myModal').modal('show');

    $('#ouvirNovamento').click(function () {
        alert('teste');
        $('body').append('<audio src="audio/a.mp3" hidden="true" autoplay="true"></audio>');
    });
});