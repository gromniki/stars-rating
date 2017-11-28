$(function () {
    var average = $('.ratingAverage').attr('data-average');

    function ratings(average) {
        average = (Number(average) * 20);
        $('.bg').css('width', 0);
        $('.stars__wrapper .bg').animate({width: average + '%'}, 500);
    }

    ratings(average);

    $('.star').on('mouseover', function () {
        var indexActual = $('.star').index(this);
        for (var i = 0; i <= indexActual; i++) {
            $('.star:eq(' + i + ')').addClass('full');
        }
    });
    $('.star').on('mouseout', function () {
        $('.star').removeClass('full');
    });

    $('.star').on('click', function () {
        var idArticle = $('.article').attr('data-id');
        var points = $(this).attr('data-vote');
        var votes = $('.votes').attr('data-votes');

        //console.log(idArticle);
        //console.log(vote);

        $.ajax({
            type: 'post',
            url: '/handler.php',
            datatype: 'json',
            data: {
                id: idArticle,
                points: points,
                votes: votes
            }
        })
            .done(function (data) {
                //console.log('Успешно отправили данные');

                //$('.votes span').html(ratings(average));
                //console.log(data);

                console.log($('.votes span').html(data));

            })
            .fail(function () {
                console.log('Ошибка отправки данных');
            });
    });
});
