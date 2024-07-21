// document.getElementById('toggleButton').addEventListener('click', function() {
//     var div = document.getElementById('greenDiv');
//     div.style.right = '20px'; // déplace la div dans la vue
//     setTimeout(function() {
//         div.style.right = '-100px'; // cache la div après 5 secondes
//     }, 1000);
// });


function showSuccessfull() {
    var overlay = document.getElementById('confirme-delete');
    overlay.style.display = 'flex'; // affiche l'overlay

    // bloque toute interaction avec le reste de la page
    document.body.style.overflow = 'hidden';

    document.getElementById('okayButton').addEventListener('click', function() {
        // dissimule l'overlay et rétablit l'interaction avec la page
        overlay.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

}