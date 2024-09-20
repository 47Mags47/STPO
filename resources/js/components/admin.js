export async function load() {
    //## Список подразделений
    //##################################################
    let active_division = $('.admin-page-box .division-list .active')
    if (active_division.length) {
        $('.admin-page-box .division-list .active')[0].scrollIntoView()
    }
}
