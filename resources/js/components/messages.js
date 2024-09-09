export function load() {
    let box = $('.server-message-box')
    let messages_box = box.find('.message-box ul')
    let errors_box = box.find('.errors-box ul')

    box.addClass('open')
    setTimeout(() => {
        if (messages_box) { messages_box.html('') }
        if (errors_box) { errors_box.html('') }
        box.removeClass('open')

        console.log(errors_box);
        
    }, 5 * 1000);

}