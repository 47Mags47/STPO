export function load() {
    let container = $('.content .sheets ul')
    let elem = $('.content .sheets li[opened="1"]')
    var containerOuterWidth = container.outerWidth();

    var itemOuterWidth = elem.outerWidth();
    var itemOffsetLeft = elem.offset().left;
    var containerScrollLeft = $('.content .sheets ul').scrollLeft();
    var positionCetner = (containerOuterWidth / 2 - itemOuterWidth / 2);
    var scrollLeftUpd = containerScrollLeft + itemOffsetLeft - positionCetner;

    console.log(elem);

    $('.content .sheets ul').animate({
        scrollLeft: scrollLeftUpd
    }, 800);
}
