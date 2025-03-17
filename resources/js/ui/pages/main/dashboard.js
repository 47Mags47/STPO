$('#them').on('change', function(){
    localStorage.setItem('them', $(this).val())
    location.reload()
})