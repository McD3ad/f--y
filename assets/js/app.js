(function ($) {
    var container = $('.section__container'),
        offsetY = summaryHeight = previousOffset = 0,
        sections = [],
        footerNavigation = $('#page-footer nav');
    
    container.each(function () {
        var index = container.index(this),
            height = $(this).outerHeight();
        
        sections.push(previousOffset);

        summaryHeight = height + summaryHeight;
        offsetY = previousOffset;
        previousOffset = height + previousOffset;

        $(this)
            .attr('id', 'section-' + (index + 1))
            .data('offset', offsetY)
            .css({
                'transform': 'translate3d(0, ' + offsetY + 'px, 0)',
                'z-index': index + 1
            });
    });

    window.onload = function () {
        container.animate({
            opacity: 1
        })
    }

    $('main').height(summaryHeight);

    for (var i = 1; i <= container.length; i++) {
        footerNavigation
            .find('ul')    
            .append('<li' + (i == 1 ? ' class="active"' : '') + '><a href="#section-' + i + '" data-offset="' + sections[i-1] + '">' + i + '</a></li>');
    }

    footerNavigation
        .find('a')
        .on('click', function (event) {
            event.preventDefault();

            var offset = $(this).data('offset');
        
            $('body, html').animate({
                scrollTop: offset
            }, 900);

            footerNavigation
                .find('li').removeClass('active');
        
            $(this).parent().addClass('active');
        });
    
    var footerOffset = $('.footer').offset().top;

    $(document).on('scroll', function () {
        var scroll = $(this).scrollTop();

        if (scroll + $(window).height() >= footerOffset) {
            $('#page-footer').addClass('footer__visible');
        } else {
            $('#page-footer').removeClass('footer__visible');
        }

        container.each(function () {
            var index = container.index(this),
                offsetY = $(this).data('offset');

            $(this)
                .data('offset', offsetY)
                .css({
                    'transform': 'translate3d(0, ' + (offsetY - scroll <= 0 ? 0 : offsetY - scroll) + 'px, 0)',
                });
        });
    });
})(jQuery);