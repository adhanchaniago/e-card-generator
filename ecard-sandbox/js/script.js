const color = document.querySelector("#myColor")
const card = document.querySelector("#card")
const saveBtn = document.querySelector("#saveCard")

card.style.backgroundColor = localStorage.getItem("bg_color")

color.addEventListener("change", () => {
    card.style.backgroundColor = color.value
    localStorage.setItem("bg_color", color.value)
    card.style.backgroundColor = localStorage.getItem("bg_color")
})

saveBtn.addEventListener('click', saveCard)


function saveCard() {
    // create a FormData object to append to
    const selectedOptions = new FormData

    // get localStorage options
    const bg_color = localStorage.getItem("bg_color")
    // console.log(bg_color)
    selectedOptions.append("bg_color", bg_color)
    // fetch post goes here
    fetch('card-post.php', { method: 'post', body: selectedOptions })
        .then(response => response.text())
        .then(text => console.log(text))
        .catch(err => console.error(err))
}

function getCard() {
    fetch('./inc/process/gallery-builder.inc.php')
        .then(res => res.json())
        .then(data => {
            console.log(data)
        })
}

getCard()
// area for card gallery

