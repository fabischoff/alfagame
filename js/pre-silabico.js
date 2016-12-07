

$(document).ready(function () {
    var numeroAcerto = 0;
    $('button').mousedown(function () {
        var id = $(this).attr('id');
        id = id + '.mp3';
        $('body').append('<audio src="audio/' + id + '"' + 'hidden="true" autoplay="true"></audio>');
    });

    $(".arrastar").draggable({
        cancel: false,
        revert: true
    });

    $(".largar").droppable({
        drop: function (event, ui) {
            $(this).addClass("ui-state-highlight").find("p").html("Dropped!");
            var arrastado = ui.draggable;
            var idArrastado = ui.draggable.attr('id');
//                              alert(idArrastado);
            var idDeposito = ($(this).attr('id'));
            var primeiraLetra = idDeposito.substring(0, 1);
//                              alert(primeiraLetra);
            if (idArrastado === primeiraLetra) {
//                                 alert('Você acertou!');
                arrastado.position({of: $(this), my: 'left top', at: 'left top'});
                $('body').append('<audio src="audio/acerto.mp3" hidden="true" autoplay="true"></audio>');
                $('#robo-ajuda').attr("src", "img/79-celebrate.png");
                //                arrastado.revert.false;
                numeroAcerto++;
                if (numeroAcerto === 5) {
                    $('#myModal').modal('show');
                }
                arrastado.revert('false');

            } else {
                //alert('Tente novamente!');
                $('body').append('<audio src="audio/error.mp3" hidden="true" autoplay="true"></audio>');
                $(this).css('background', '#EDCEA6');
                $('#robo-ajuda').attr("src", "img/46-question.png");

            }
        }
    });

});
