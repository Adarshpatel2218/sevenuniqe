setTimeout(function () {
    var messageContainer = document.getElementById('message-container');
    var errorContainer = document.getElementById('error-container');

    function fadeOut(element) {
        var opacity = 1;
        var interval = setInterval(function () {
            if (opacity <= 0) {
                clearInterval(interval);
                element.style.display = 'none';
            } else {
                element.style.opacity = opacity;
                opacity -= 0.01; // Adjust the decrement value for the desired speed
            }
        }, 5); // Adjust the interval value for the desired duration
    }

    if (messageContainer) {
        fadeOut(messageContainer);
    }

    if (errorContainer) {
        fadeOut(errorContainer);
    }
}, 5000); // 2 seconds in milliseconds


$(document).ready(function () {
    $('table .dropdown-menu').parent().on('show.bs.dropdown', function () {
        var parentResponsiveTable = $(this).parents('.table-responsive');
        var parentTarget = $(parentResponsiveTable).first().hasClass('table-responsive') ? $(parentResponsiveTable) : $(window);
        var parentTop = $(parentResponsiveTable).first().hasClass('table-responsive') ? $(parentResponsiveTable).offset().top : 0;
        var parentLeft = $(parentResponsiveTable).first().hasClass('table-responsive') ? $(parentResponsiveTable).offset().left : 0;

        var dropdownMenu = $(this).children('.dropdown-menu').first();

        if (!$(this).hasClass('dropdown') && !$(this).hasClass('dropup')) {
            $(this).addClass('dropdown');
        }
        $(this).attr('olddrop', $(this).hasClass('dropup') ? 'dropup' : 'dropdown');
        $(this).children('.dropdown-menu').each(function () {
            $(this).attr('olddrop-pull', $(this).hasClass('dropdown-menu-right') ? 'dropdown-menu-right' : '');
        });

        if ($(this).hasClass('dropdown')) {
            if ($(this).offset().top + $(this).height() + $(dropdownMenu).height() + 10 >= parentTop + $(parentTarget).height()) {
                $(this).removeClass('dropdown');
                $(this).addClass('dropup');
            }
        } else if ($(this).hasClass('dropup')) {
            if ($(this).offset().top - $(dropdownMenu).height() - 10 <= parentTop) {
                $(this).removeClass('dropup');
                $(this).addClass('dropdown');
            }
        }

        if ($(this).offset().left + $(dropdownMenu).width() >= parentLeft + $(parentTarget).width()) {
            $(this).children('.dropdown-menu').addClass('dropdown-menu-right');
        }
    });

    $('.dropdown-menu').parent().on('hide.bs.dropdown', function () {
        if ($(this).attr('olddrop') != '') {
            $(this).removeClass('dropup dropdown');
            $(this).addClass($(this).attr('olddrop'));
            $(this).attr('olddrop', '');
        }

        $(this).children('.dropdown-menu').each(function () {
            $(this).removeClass('dropdown-menu-right');
            $(this).addClass($(this).attr('olddrop-pull'));
        });
    });
});


// Side toogle js
jQuery(document).on('click', '.sidebar_togger', function () {
	jQuery(this).parents('.page-wrapper').toggleClass('collapsed');
	if (jQuery(this).parents('.page-wrapper').hasClass('collapsed')) {
		jQuery(this).parents('.page-wrapper').removeClass('sidebar_open');
	} else {
		jQuery(this).parents('.page-wrapper').addClass('sidebar_open');
	}
});

jQuery(document).on('click', '.mobile-toggler-btn', function () {
	jQuery('.sidebar-left').toggleClass('open');
	if (jQuery('.sidebar-left').hasClass('open')) {
		console.log('true');
		jQuery('.sidebar-left').removeClass('closed');
	} else {
		console.log('false');
		jQuery('.sidebar-left').addClass('closed');
	}
})

jQuery(document).on('click', '.mob-close-sidebar', function () {
	jQuery('.mobile-toggler-btn').trigger('click');
})




// end