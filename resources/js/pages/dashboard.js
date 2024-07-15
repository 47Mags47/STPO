export function load() {
    $('#user input:not([name="_token"])').each(function () {
        $(this).on('change', function () {
            let flag = false
            $('#user input:not([name="_token"])').each(function () {
                console.log($(this).val(), $(this).attr('placeholder'));
                if($(this).val() != $(this).attr('placeholder')){
                    flag = true
                }
            })
            //console.log(flag);
            if(flag){
                $(this).parent().parent().find('input[type="submit"]').parent().addClass('open')
            }else{
                $(this).parent().parent().find('input[type="submit"]').parent().removeClass('open')
            }
        })
    })
}
