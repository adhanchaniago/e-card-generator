const color = document.querySelector("#myColor")
const card = document.querySelector("#card")
const saveBtn = document.querySelector("#saveCard")
const shareBtn = document.querySelector("#shareCard")
const getBtn = document.querySelector("#getCard")
const savedCards = document.querySelector("#savedCards")
const resultMsg = document.querySelector("#result")


card.style.backgroundColor = localStorage.getItem("bg_color")

color.addEventListener("change", () => {
    card.style.backgroundColor = color.value
    localStorage.setItem("bg_color", color.value)
    card.style.backgroundColor = localStorage.getItem("bg_color")
})

function saveAndShareCard() {
    // create a FormData object to append to
    const selectedOptions = new FormData

    // get localStorage options
    const bg_color = localStorage.getItem("bg_color")
    // console.log(bg_color)
    selectedOptions.append("bg_color", bg_color)
    // fetch post goes here
    fetch('card-post.php', { method: 'post', body: selectedOptions })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            resultMsg.innerHTML = `<p>Link to share: ${data[0].url}</p>`
        })
        .catch(err => console.error(err))
}

function getAllCards() {
    // gets entire card table
    // need to do something similar for the template table
    fetch('./inc/process/gallery-builder.inc.php')
        .then(res => res.json())
        .then(data => {
            console.log(data)
        }).catch(err => console.error(err))
}

// function shareCard() {
//     // may need to change fetch url path - one that queries just for the url col? 
//     fetch('./inc/process/get-card-url.inc.php')
//         .then(res => res.json())
//         .then(data => {
//             console.log(data)
//         }).catch(err => console.log("Couldn't fetch URL: " + err))
// }
saveBtn.addEventListener('click', saveAndShareCard)
getBtn.addEventListener('click', getAllCards)
// shareBtn.addEventListener('click', shareCard)

// generate URL (by function that calls a fetch to get generated URL from DB?)

