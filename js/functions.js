// function to show/hide password
function showPassword() {
    const passwordField = document.querySelector('#password')
    const showPassword = document.querySelector('#showPassword')
    if (showPassword.innerText == 'Show Password') {
        showPassword.innerText = 'Hide Password'
        passwordField.type = 'text'
    } else if (showPassword.innerText === 'Hide Password') {
        passwordField.type = 'password'
        showPassword.innerText = 'Show Password'
    }
}

// is the user logged in or not?
fetch('helper/is_logged_in.php')
    .then(res => res.json())
    .then(function (res) {
        const login = document.querySelector('#login')
        const logout = document.querySelector('#logout')
        const registerbtn = document.querySelector('#register')
        const mygallery = document.querySelector('#card-gallery-btn')
        const cardEditor = document.querySelector('#card-editor-btn')
        if (res.status == 'yes') {
            login.style.display = 'none'
            logout.style.display = 'inline-block'
            registerbtn.style.display = 'none'
            mygallery.style.display = 'inline-block'
            cardEditor.style.display = 'inline-block'
            logout.addEventListener('click', function (e) {
                e.preventDefault()
                fetch('helper/logout_ajax.php')
                    .then(res => res.json())
                    .then(function (res) {
                        if (res.status == 'success') {
                            login.style.display = 'inline-block'
                            logout.style.display = 'none'
                            // document.querySelector('#message').innerHTML = '<p>You have been logged out</p>'
                            // document.querySelector('h1').innerText = 'Welecome to our Site!'
                            window.location.href = "login.php"
                        }
                    })
            })
        } else {
            //remove links
            login.style.display = 'inline-block'
            logout.style.display = 'none'
            registerbtn.style.display = 'inline-block'
            mygallery.style.display = 'none'
            cardEditor.style.display = 'none'
        }
    })