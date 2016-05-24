/**
 * Created by Samuel Beckingham-Cook on 18/05/2016.
 */

$('.collection').on('click', function() {

    var cid = $(this).data('cid');

    var colItems = $(this).children('.collectionItems');

    if (colItems.is(':visible')) {
        //colitems.slideUp
    } else {
        $('.collectionItems').slideUp();
        colItems.slideToggle();

        $('img[data-cid=' + cid + ']').each(function () {
            $(this).attr('src', $(this).data('src'))
        })
    }
});

interact('.draggable')
    .draggable({
        inertia: true,
        axis: 'x'
    });
