// handle option account
let listenAvatar = document.getElementById('avatar')
let showOption = document.getElementById('optionAccount')
let check = 0
listenAvatar.onclick = function () {
    check += 1
    if (check % 2 != 0) {
        showOption.style.display = 'block'
    } else {
        showOption.style.display = 'none'
    }
}





