// Filtro
// Ubicacion
const filter = document.querySelector("#filter-location") // id
const mensaje = document.querySelector("#filter-selected-value") // id

if (filter) {
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

}
// NIvel de Experiencia
const filterExperience = document.querySelector("#experience-level") 

if (filterExperience) {
    filterExperience.addEventListener("change", function() {
        const jobs = document.querySelectorAll(".job-listing-card") 
        const selectValue = filterExperience.value    
        mensaje.textContent = selectValue ? `Has Seleccionado: ${selectValue}` : ''   

        jobs.forEach(job => {
            const modalidad = job.getAttribute('data-nivel')              
            const isShown = selectValue === '' || selectValue === modalidad  
            job.classList.toggle('is-hidden', isShown === false)
        })
    })

}
// Tecnologia
const filterTechnology = document.querySelector("#filter-technology") 

if (filterTechnology) {
    filterTechnology.addEventListener("change", function() {
        const jobs = document.querySelectorAll(".job-listing-card") 
        const selectValue = filterTechnology.value    
        mensaje.textContent = selectValue ? `Has Seleccionado: ${selectValue}` : ''   
        jobs.forEach(job => {
            const modalidad = job.getAttribute('data-technology')                   
            // Para convertirlo en array:
            const techArray = modalidad.split(',');        
            const isShown = selectValue === '' || techArray.includes(selectValue);
            job.classList.toggle('is-hidden', isShown === false)        
        })  
    })
}

// Buscar empleos
function buscarTexto(texto, patron) {
    return texto.toLowerCase().includes(patron.toLowerCase()) ? true : false;
}

const filterinput = document.querySelector("#empleos-search-input") 

if (filterinput) {
    filterinput.addEventListener("input", function() {
        const jobs = document.querySelectorAll(".job-listing-card") 
        const selectValue = filterinput.value    
        mensaje.textContent = selectValue ? `Has Seleccionado: ${selectValue}` : ''

        jobs.forEach(job => {
            // ubicar h3 dentro del job
            const titulo = job.querySelector('h3').textContent;               
            const isShown = buscarTexto( titulo,selectValue);
            job.classList.toggle('is-hidden', isShown === false)
        })           
    }) 
}

