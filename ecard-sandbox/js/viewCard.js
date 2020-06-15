function getCard() {
    // fetches get-card-url
    fetch("./card-viewer.php")
        .then(res => res.json())
        .then(data => {
            console.log(data)
        })
        .catch(err => console.error(err))
}

getCard()
