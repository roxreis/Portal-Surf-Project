//original em adaptacao da API de noticias
// buttonClick.addEventListener('click',()=>{
//     fetch("https://maps.googleapis.com/maps/api/js?key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs&callback=iniciarMap")
// .then(result=> result.json())
// .then(json=>{
//         console.log(json.articles);
//         show(json.articles);
//     })
// })

// let show = listaLocais =>{
//     listaLocais.forEach(function(local,posicao){

//         let card = `
//         <div class="card" style="width: 18rem;">
//             <img src="${noticia.urlToImage}" class="card-img-top" alt="...">
//             <div class="card-body d-flex flex-column justify-content-center">
//                 <h5 class="card-title">${noticia.title}</h5>
//                 <p class="card-text">${noticia.description}</p>
//                 <a href="#" class="btn btn-dark">Veja mais</a>
//             </div>
//         </div>`

// innerHTML é um atributo
// Faz o mesmo que board.innerHTML = board.innerHTML +card;
//         board.innerHTML += card;
//     })

// }



// exercicio feito com um local estatico
console.log("teste");

var map;

let botaoClick = document.getElementById('botao');

let encontreLocal = document.getElementById('encontreLocal');

let encontreServico = document.getElementById('encontreServico');
let encontreSurfwear = document.getElementById('encontreSurfwear');
let encontreAulas = document.getElementById('encontreAulas');
let encontrePrancha = document.getElementById('encontrePrancha');


// criar um addEventListener para cada servico, pois ao clica-lo eu altero o valor do encontre serviço, que eh o meu input hidden - etapa 1
// usar a propriedade set attribute , onde value vai valer x (nome que darei)
// etapa 2 - criar array com as lat e long
// etapa 3 - logica que com condicao (switch ou if) de local mais servico, me retorna a array x (nome que eu defino)
// etapa 4 - jogar array na funcao do google maps, na var markerCluster (favorito link) var locations

botaoClick.addEventListener('click', () => {
            // function iniciarMap() {

                var coord = {
                    lat: -23.791516,
                    lng: -45.5627291
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    // center: coord,
                    center: new google.maps.LatLng(-23.791516, -45.5627291),
                });
                var marker = new google.maps.Marker({
                    position: coord,
                    map: map
                });

                console.log("oi");
            // }
        })
