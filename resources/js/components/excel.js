export async function load() {
    //## Обработка формул
    //##################################################
    $('.excel-box tbody td input').each(function () { 
        let parent = $(this)
        let formul = $(this).data('formul')

        if(formul == undefined){
            return
        }

        let childs = []
        formul.match(/[A-Z]{1,99}[0-9]{1,99}/g).forEach(element => {
            childs.push($(`#${element}`))
        });
        
    })


    // /* Автоскролл списка страниц */
    // let container = $('.excel-box .sheets ul')
    // if (container[0]) {
    //     let elem = $('.excel-box .sheets ul .opened ')
    //     var containerOuterWidth = container.outerWidth();
    //     var divisionListWidth = $('.admin-page-box .division-list').outerWidth()
    //     divisionListWidth = divisionListWidth ? divisionListWidth : 0

    //     var itemOuterWidth = elem.outerWidth();
    //     var itemOffsetLeft = elem.offset().left;
    //     var positionCetner = (containerOuterWidth / 2 - itemOuterWidth / 2);
    //     var scrollLeftUpd = itemOffsetLeft - positionCetner - divisionListWidth;
    //     container.animate({
    //         scrollLeft: scrollLeftUpd
    //     }, 0);
    // }

}
