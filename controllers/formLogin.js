// listen event user input
var valueAccount
var inputElement = document.querySelector('input[type="text"]')
inputElement.oninput = function(e) {
    valueAccount = e.target.value
}
var valuePassword
var inputElement = document.querySelector('input[type="password"]')
inputElement.oninput = function(e) {
    valuePassword = e.target.value
}

// add notice when wrong account
var notice = document.querySelector('.notice')

// Check account
function handleLogin () {
    if(valueAccount == "john" && valuePassword == '1234') {
        window.location.href="http://localhost/views/dashboard.php"
    } else {
        notice.innerHTML = 'Wrong username or password'
    }
}
