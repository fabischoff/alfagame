//               function clique(e) {
//                    var id = getTarget(e).id;
//                    alert(id);
//               }
//
//               function getTarget(e) {
//                    if (e.srcElement)
//                         return e.srcElement;
//                    else
//                         return e.target;
//               }

$(document).ready(function () {
    var numeroAcerto = 0;
    $('button').mousedown(function () {
//                         alert($(this).attr('id'));
        var id = $(this).attr('id');
        id = id + '.mp3';
        //alert(id);   
//                         audio = '<audio src="audio/' + id + '"' +  'hidden="true" autoplay="true"></audio>';

//                         alert (audio);

        $('body').append('<audio src="audio/' + id + '"' + 'hidden="true" autoplay="true"></audio>');
//                         $('body').append('<audio src="audio/' + id + "'hidden="true" autoplay="true"></audio>');

    });


//                    $('a.click').click(function () {
//                         $('embed').remove();
//                         $('body').append('<embed src="audio/a.mp3" autostart="true" hidden="true" loop="false">');
//                    });
    $(".arrastar").draggable({
        cancel: false,
        revert: true

    });


    $(".largar").droppable({
        drop: function (event, ui) {
            $(this)
                    .addClass("ui-state-highlight")
                    .find("p")
                    .html("Dropped!")
                    ;
            var arrastado = ui.draggable;
            var idArrastado = ui.draggable.attr('id');
//                              alert(idArrastado);
            var idDeposito = ($(this).attr('id'));
            var primeiraLetra = idDeposito.substring(0, 1);
//                              alert(primeiraLetra);
            if (idArrastado === primeiraLetra) {
//                                 alert('Você acertou!');
                arrastado.position({of: $(this), my: 'left top', at: 'left top'});
                $('body').append('<audio src="audio/a.mp3" hidden="true" autoplay="true"></audio>');
                $('#robo-ajuda').attr("src", "img/79-celebrate.png");
                //                arrastado.revert.false;
                numeroAcerto++;
                if (numeroAcerto == 5) {
                    $('#myModal').modal(
                            'show'
                            // $('body').append('<audio src="audio/a.mp3" hidden="true" autoplay="true"></audio>')
                            );
                }

                arrastado.revert('false');

            } else {
                alert('Tente novamente!');
                $(this).css('background', '#EDCEA6');
                $('#robo-ajuda').attr("src", "img/46-question.png");

            }
        }
    });

});
