// exercicio feito com um local estatico
console.log("teste");

var map;

let botaoClick = document.getElementById('botao');

// var guaruja = [
//     {lat: -24.0022138, lng: -46.282744,14},
// ]


botaoClick.addEventListener('click', () => {
        // function iniciarMap() {

        // var coord = {
        //     lat: -23.791516,
        //     lng: -45.5627291
        // };

        var center = new google.maps.LatLng(-23.791516, -45.5627291)
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            // center: coord,
            center: center,
        });

        var marker = new google.maps.Marker({
            map: map,
            position: center
        });

        console.log("oi");
        // }
    })


