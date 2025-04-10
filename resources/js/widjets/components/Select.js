import FormWidget from "../core/FormWidget";

export default class Select extends FormWidget {
    selector = '.widget.select'
    name = $(this.element).data('name')
    value = null
    items = []

    items_selector = '.list-box li.selectable'
    preview_selector = '.preview-box .input'
    value_selector = '.preview-box .value'
    list_selector = '.list-box'
    search_selector = '.list-box .search-box input'

    constructor(element) {
        super(element)

        this.items = $(this.element).find(this.items_selector)

        $(this.element).on('click', this.preview_selector, this.previewClickHandler.bind(this))
        $(this.element).on('click', this.items_selector, this.elementClickHandler.bind(this))
        $(this.element).on('input', this.search_selector, this.searchHandler.bind(this))
        $(document).on('click', this.documentClickHandler.bind(this))
    }

    previewClickHandler() {
        $(this.element).find(this.list_selector).toggleClass('open')
    }

    documentClickHandler(e) {
        if ($(this.element).has(e.target).length === 0)
            $(this.element).find(this.list_selector).removeClass('open')
    }

    elementClickHandler(e) {
        this.value = $(e.currentTarget).data('value')
        this.changePreview($(e.currentTarget).find('span').html())
        this.value = $(e.currentTarget).data('value')
        $(this.element).find(this.value_selector).val(this.value)
        $(this.element).find(this.list_selector).removeClass('open')
    }

    searchHandler(e) {
        let search = e.target.value.toLocaleLowerCase().replaceAll(' ', '')

        $(this.element).find('.list-box li').css('display', 'none')

        $.each(this.items, function (i, item) {
            let item_content = $(item).find('span').html()
            if (item_content.toLocaleLowerCase().replaceAll(' ', '').indexOf(search) !== -1){
                $(item).css('display', 'block')
                $(item).parents('.list-box li').css('display', 'list-item')
            }
        })
    }

    changePreview(string) {
        $(this.element).find(this.preview_selector).find('.preview-text').html(string ?? '---  Не выбрано ---')
    }

    serialize(){
        let result = {}
        result[this.name] = this.value
        return result
    }

}
