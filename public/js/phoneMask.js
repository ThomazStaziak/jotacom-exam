const phone = document.querySelector('#telefone')

const phoneMask = evt => {
    if (evt.inputType == 'deleteContentBackward')
        return
    if(evt.target.value.length == 1)
        evt.target.value = '(' + evt.target.value 
    if(evt.target.value.length == 3)
        evt.target.value = evt.target.value + ') '
    if(evt.target.value.length == 9)
        evt.target.value = evt.target.value + '-'
}

phone.oninput = phoneMask

