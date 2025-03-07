const HEADER = $('header')
const MODUL_BUTTON = HEADER.find('.module-menu-box .preview')
const MODUL_LIST_BOX = HEADER.find('.module-menu-box .list')

MODUL_BUTTON.on('click', function(){
    MODUL_LIST_BOX.toggleClass('open')
})

$('.page').on('click', function(){
    MODUL_LIST_BOX.removeClass('open')
})

$(document).on('click', function(e){
    if (HEADER.has(e.target).length === 0)
        MODUL_LIST_BOX.removeClass('open')
})
