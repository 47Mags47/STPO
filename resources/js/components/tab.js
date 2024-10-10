export function load() {
    $('.tab-box .meny li:not(.others)').on('click', function () {
        const clicked = $(this)
        const slide = $(this).parent().parent().find('.slide-box')
        let index = $(this).index()

        $('.tab-box .meny li.open').removeClass('open')
        clicked.addClass('open')

        slide[0].style.transform = `translateX(${-100 * index}%)`
        
    })
}