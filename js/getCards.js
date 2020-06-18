const cardURL = document.querySelector("#cardURL")

function getAllCards() {
    fetch("./inc/process/process-card-gallery.inc.php")
        .then(res => res.json())
        .then(data => {
            console.log(data)
            let output = ''
            for (let i = 0; i < data.length; i++) {
                output +=
                    `<div class="card mt-2" style="width: 30rem">
                        <div class="card-body">
                            <h2 class="card-title"><b>${data[i].card_name}</b></h2>
                            <p class="card-text">Share Link: <a href="${data[i].url}">${data[i].url}</a></p>
                            <a class="btn btn-dark btn-block btn-gallery text-white" href="${data[i].url}">View Card</a>
                        </div>
                    </div>`
            }
            cardURL.innerHTML = output
        })
        .catch(err => console.error(err))
}

getAllCards()