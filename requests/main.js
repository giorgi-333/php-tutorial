
let nameInp = document.querySelector("#name")

function getInfo() {
    fetch(`./php/info.php?name=${nameInp.value}&userId=4`)
        .then( res => res.text() )
        .then(text => {
            console.log(text);
        })
}

// let posts = [
//     {
//         title: 'tbilisi',
//         text: 'about tbilisi city'
//     },
//     {
//         title: 'qutaisi',
//         text: 'about qutaisi city'
//     },
// ]

function getPosts() {
    fetch('./php/posts.php')
        .then(res => res.json())
        .then(data => {
            console.log(data);
            console.log(data[0].name);
        })
}

getPosts();