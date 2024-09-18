/**
 * Created by eamonnmaguire on 18/12/14.
 */
function filter_publication_content(filterInputId, listId) {
    var valThis = $(filterInputId).val().toLowerCase();
    $(listId + '>div').each(function () {
        var text = $(this).text().toLowerCase().trim();
        var ok_to_show = true;
        ok_to_show ? (text.indexOf(valThis) != -1) ? $(this).fadeIn(500) : $(this).fadeOut(500) : $(this).fadeOut(200);

    });
}

