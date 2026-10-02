const jobsListingSection = document.querySelector('.jobs-listings');

jobsListingSection?.addEventListener('click', function(event) {
    const element = event.target;
    if (event.target.classList.contains('button-apply-job')) {
        element.textContent = '¡Aplicado!';
        element.classList.add('is-applied');
        element.disabled = true;
        console.log('hecho');
    }           
})


// Comentarios con otros eventos
//
/* const botones = document.querySelectorAll('.button-apply-job');

botones.forEach(boton => {
    boton.addEventListener('click', function() {
        boton.textContent = '¡Aplicado!';
        boton.classList.add('is-applied');
        boton.disabled = true;
    } )
}) 
*/
