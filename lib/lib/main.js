/**
 * Created by tugceakin on 5/3/15.
 */


$(document).ready(function(e) {
    $('.products-table').DataTable();

    $('.save-comment').popover({
        trigger:'hover',
        content:'write a review, create a keyword, invite a friend, and more.',
        placement:'top'
    });

});

