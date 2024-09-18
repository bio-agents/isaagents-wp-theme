$(function () {

    var read_button = function (class_names) {
        var r = {
            selected: false,
            type: 0
        };

        for (var i = 0; i < class_names.length; i++) {
            if (class_names[i].indexOf('selected') == 0) {
                r.selected = true;
            }
        }

        return r;
    };

    var $preferences = {
        duration: 400,
        easing: 'easeOutCirc',
        adjustHeight: false,
        useScaling: 'false'
    };

    var $list = $('#agent-list li');

    var $controls = $('ul.splitter ul');

    $controls.each(function () {

        var $control = jQuery(this);
        var $buttons = $control.find('span');

        $buttons.bind('click', function () {

            var $button = $(this);
            var $button_container = $button.parent();
            var button_properties = read_button($button_container.attr('class').split(' '));
            var selected = button_properties.selected;

            if (!selected) {

                if (selectedButton != undefined) {
                    selectedButton.removeClass('selected');
                } else {
                    // we just need to remove the first one.
                    $buttons.parent().removeClass('selected');
                }

                $button_container.addClass('selected');
                selectedButton = $button_container;

                var sorting_kind = $button_container.find('span').attr('data-value');

                $($list).each(function () {

                    if (sorting_kind == 'all') {
                        $(this).fadeIn();
                    } else {
                        if($(this).hasClass(sorting_kind)) {
                            $(this).fadeIn();
                        } else {
                            $(this).fadeOut();
                        }
                    }

                });
            }
        });

    });

})
;

var selectedButton;