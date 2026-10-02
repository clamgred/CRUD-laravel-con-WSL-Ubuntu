// Filtro
const filter = document.querySelector("#filter-location") // id
const mensaje = document.querySelector("#filter-selected-value") // id

filter.addEventListener("change", function() {
    const jobs = document.querySelectorAll(".job-listing-card") // clase
    const selectValue = filter.value    
    mensaje.textContent = selectValue ? `Has Seleccionado: ${selectValue}` : ''

    jobs.forEach(job => {
        //const modalidad = job.dataset.modalidad
        const modalidad = job.getAttribute('data-modalidad')              
        const isShown = selectValue === '' || selectValue === modalidad  
        job.classList.toggle('is-hidden', isShown === false)
    })
})
