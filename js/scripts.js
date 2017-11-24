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
        var vote = $(this).attr('data-vote');

        //console.log(idArticle);
        //console.log(vote);

        //$.post('/sys/handler.php', {rate: 'sim', id: idArticle, points: vote});

        $.post('/handler.php', {id: idArticle, points: vote, votes: average}, function (itBack) {
            ratings(itBack.average);
            $('.votes span').html(itBack.votes);
        }, 'jSON');
    });
});
