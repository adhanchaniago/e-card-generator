//#region handles

// for editor
const editor = document.querySelector('#editor')
const editorGreeting = document.querySelector('#editor-greeting')
const editorMessage = document.querySelector('#editor-message')

// for event listeners
const cardName = document.querySelector("#card-name")
const greetingHandle = document.querySelectorAll(".greeting-option")
const greetingColor = document.querySelector("[data-color-greet]")
const customGreeting = document.querySelector("[data-custom-greeting]")
const messageColor = document.querySelector("[data-color-msg]")
const bgImage = document.querySelectorAll(".bg-image")
const bgColor = document.querySelector("[data-color]")

// for saving, sharing, displaying cards
const saveAndShareBtn = document.querySelector("#saveAndShare")
const shareURL = document.querySelector("#displayShareURL")


//#endregion handles

//#region editing (local storage) functionality

// add event listeners to option
// greeting
cardName.addEventListener("keyup", () => {
    localStorage.setItem("cardName", cardName.value)
})

greetingHandle.forEach(element => {
    element.addEventListener("click", () => {
        localStorage.setItem("greetingID", element.value)
        localStorage.setItem("greeting", element.text)
        editorGreeting.innerHTML = `<h1>${localStorage.getItem("greeting")}</h1>`
    })
})

// greeting text color
greetingColor.addEventListener("change", () => {
    localStorage.setItem("greetingColor", greetingColor.value)
    editorGreeting.style.color = localStorage.getItem("greetingColor")
})

// custom greeting
customGreeting.addEventListener("keyup", () => {
    localStorage.setItem("customGreeting", customGreeting.value)
    editorMessage.style.backgroundColor = "rgba(115, 115, 115, 0.35)"
    editorMessage.innerHTML = `<p>${localStorage.getItem("customGreeting")}</p>`
})

// custom greeting text color 
messageColor.addEventListener("change", () => {
    localStorage.setItem("messageColor", messageColor.value)
    editorMessage.style.color = localStorage.getItem("messageColor")
})

// background image
bgImage.forEach(element => {
    element.addEventListener("click", () => {
        localStorage.removeItem("bgColor")
        localStorage.setItem("bgImage", element.src)
        editor.style.backgroundImage = `url(${localStorage.getItem('bgImage')})`
    })
})

// background color
bgColor.addEventListener("change", () => {
    localStorage.removeItem("bgImage")
    editor.style.backgroundImage = "none"
    localStorage.setItem("bgColor", bgColor.value)
    editor.style.backgroundColor = localStorage.getItem("bgColor")
})

// display functionality
function displayStoredCard() {
    if (storageItemIsNotNull("greeting")) {
        editorGreeting.innerHTML = `<h1>${localStorage.getItem("greeting")}</h1>`
    }

    if (storageItemIsNotNull("greetingColor")) {
        editorGreeting.style.color = localStorage.getItem("greetingColor")
    } else {
        localStorage.setItem("greetingColor", "#000000")
    }

    if (storageItemIsNotNull("customGreeting")) {
        editorMessage.style.backgroundColor = "rgba(115, 115, 115, 0.35)"
        editorMessage.innerHTML = `<p>${localStorage.getItem("customGreeting")}</p>`
    }

    if (storageItemIsNotNull("messageColor")) {
        editorMessage.style.color = localStorage.getItem("messageColor")
    } else {
        localStorage.setItem("messageColor", "#000000")
    }

    if (storageItemIsNotNull("bgImage")) {
        editor.style.backgroundImage = `url(${localStorage.getItem('bgImage')})`
    }

    if (storageItemIsNotNull("bgColor")) {
        editor.style.backgroundColor = localStorage.getItem("bgColor")
    }
}
//#endregion editing (local storage) functionality

//#region save/share functionality

function saveAndShareCard() {
    // create a form data object to store selected functions
    const selectedOptions = new FormData

    // get all local storage options
    // append all options to form data object
    if (storageItemIsNotNull("cardName")) {
        selectedOptions.append("cardName", localStorage.getItem("cardName"))
    }

    if (storageItemIsNotNull("greetingID")) {
        selectedOptions.append("greetingID", localStorage.getItem("greetingID"))
    }

    if (storageItemIsNotNull("greetingColor")) {
        selectedOptions.append("greetingColor", localStorage.getItem("greetingColor"))
    }

    if (storageItemIsNotNull("customGreeting")) {
        selectedOptions.append("customGreeting", localStorage.getItem("customGreeting"))
    }

    if (storageItemIsNotNull("messageColor")) {
        selectedOptions.append("messageColor", localStorage.getItem("messageColor"))
    }

    if (storageItemIsNotNull("bgImage")) {
        selectedOptions.append("bgImage", localStorage.getItem('bgImage'))
    }

    if (storageItemIsNotNull("bgColor")) {
        selectedOptions.append("bgColor", localStorage.getItem("bgColor"))
    }

    // use fetch to post data to PHP
    fetch('./inc/process/process-card-editor.inc.php', { method: 'post', body: selectedOptions })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            shareURL.innerText = `Copy & Send this Link to Share Your Card: ${data[0].url}`
        })
        .catch(err => console.error(err))
}

//#endregion save/display functionality

// helper functions
function storageItemIsNotNull(item) {
    return localStorage.getItem(`${item}`) !== null
}

// function calls
displayStoredCard()
saveAndShareBtn.addEventListener("click", saveAndShareCard)