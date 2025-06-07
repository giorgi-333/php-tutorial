
let nameInp = document.querySelector("#name")

function getInfo() {
    fetch(`./php/info.php?name=${nameInp.value}&userId=4`)
        .then( res => res.text() )
        .then(text => {
            console.log(text);
        })
}