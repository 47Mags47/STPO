const BOX = $('.table-box')
const TABLE = BOX.find('table')
const FILTER_FORM = BOX.find('.filter-box form')
const PAGNATE_BOX = FILTER_FORM.find('.static-box .paginate')

function findRow(id){
    return TABLE.find(`#appeal_${id}`)
}

/* HACK проверить работу скрипта, исправить */
Echo.channel(`appeals.chanel`)
    .listen('.accept', (response) => {
        findRow(response.id).find('#status').html(
            `Принята<br>${response.accepted_by}`
        )
        findRow(response.id).find('#options').html('')
    })
    .listen('.close', (response) => {
        findRow(response.id).find('#status').html(
            `Закрыта<br>${response.closed_by}`
        )
        findRow(response.id).find('#options').html('')
    })
    .listen('.restore', (response) => {
        findRow(response.id).find('#status').html(
            `Возобновлена<br>${response.restored_by}`
        )
    })
/* HACK добавить обновление таблицы при создании обращений */
