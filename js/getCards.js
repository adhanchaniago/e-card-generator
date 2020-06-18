const cardURL = document.querySelector("#cardURL")

function getAllCards() {
    fetch("./inc/process/process-card-gallery.inc.php")
        .then(res => res.json())
        .then(data => {
            console.log(data)
            let output = ''
            for (let i = 0; i < data.length; i++) {
                output += `<li>Card Name: <b>${data[i].card_name}</b> <br>Share Link: <a href="${data[i].url}">${data[i].url}</a></li>`
            }
            cardURL.innerHTML = output
        })
        .catch(err => console.error(err))
}

getAllCards()