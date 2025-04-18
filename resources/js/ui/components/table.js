/* HACK Переписать компоненты формы с использованием ООП (методы getValue(), reset() и т.д.) */

$('.table-box').each(function () {
    const BOX = $(this)
    const TABLE = BOX.find('table')
    const FILTER_FORM = BOX.find('.filter-box form')

    const FILTERS = FILTER_FORM.find('.dinamic-box').find('input, select, textarea')
    const SEARCH = FILTER_FORM.find('.static-box .search-box input')
    const PAGNATE_BOX = FILTER_FORM.find('.static-box .paginate')
    const END_PAGINATE_BOX = BOX.find('.end-table-paginate-box')

    function getData(data = null, url = null) {
        url = url ?? FILTER_FORM.attr('action')
        data = data ?? {}

        let method = FILTER_FORM.attr('method')

        openLoadIco()
        $.ajax({
            url: url,
            method: method,
            data: data,
            success: function (data) {
                TABLE.find('tbody').html($(data.tbody).html())
                PAGNATE_BOX.html($(data.paginate).html())
                END_PAGINATE_BOX.html($(data.paginate).html())
                $('.page-content').animate({
                    scrollTop: 0
                }, 'slow')
            },
            complete: function () {
                closeLoadIco()
            }
        })
    }

    // Загрузка данных при инициализации
    getData()

    TABLE
    .on('click', 'th.sortable', function () {
        let th = $(this)
        let sort = $(this).data('sort')
        let asc = $(this).data('sort-asc')

        let data = {
            page: 1,
            sort: sort,
            asc: asc
        }
        getData(data)

        TABLE.find('th.set-sort').removeClass('set-sort')
        th.addClass('set-sort')
        th.data('sort-asc', th.data('sort-asc') === 'asc' ? 'desc' : 'asc')
        th.find('svg').removeClass('fa-chevron-up')
        th.find('svg').removeClass('fa-chevron-down')
        th.find('svg').addClass(th.data('sort-asc') === 'asc' ? 'fa-chevron-up' : 'fa-chevron-down')
    })
    .on('click', 'tr .delete-button', function(e){
        e.preventDefault()
        if(!confirm('Вы уверены?'))
            return

        let url = $(this).attr('href')

        $.ajax({
            url: url,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr("content")},
            success: function(){
                getData()
            },
        })
    })

    FILTER_FORM
        // Переход по страницам
        .on('click', '.static-box .paginate li a', function (e) {
            e.preventDefault()

            let url = new URL($(this).attr('href'))
            let page = url.searchParams.get('page')

            getData({ page: page ?? 1 })
        })

        // Приминение фильтров
        .on('click', '.submit-button', function (e) {
            e.preventDefault()

            FILTERS.each(function () {
                if (!$(this).val())
                    $(this).prop('disabled', true)
            })

            if (FILTERS.serialize())
                getData(FILTERS.serialize())

            FILTERS.prop('disabled', false)
        })

        // Поиск
        .on('click', '.static-box .search-box button', function (e) {
            e.preventDefault()

            if (SEARCH.val())
                getData(SEARCH.serialize())
        })

        /* HACK переделать на контроллер */
        // Сброс
        .on('click', '.reset-button', function (e) {
            e.preventDefault()
            FILTERS.trigger('reset')
            FILTER_FORM.trigger('reset')
            getData({ filter: [null] })
        })

    END_PAGINATE_BOX.on('click', 'li a', function (e) {
        e.preventDefault()

        let url = new URL($(this).attr('href'))
        let page = url.searchParams.get('page')

        getData({ page: page ?? 1 })
    })

})

