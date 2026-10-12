/* const container = document.querySelector('.jobs-listings')

fetch("/data.json") // fetch es asincrono
    .then((response)=>{
        return response.json()
    }) 
    .then((jobs)=>{
        jobs.forEach(job => {
            const article = document.createElement('article')
            article.className = 'job-listing-card'
            article.dataset.modalidad = job.data.modalidad
            article.dataset.nivel = job.data.nivel
            article.dataset.technology = job.data.technology
            article.innerHTML =`<div>
                    <h3>${job.titulo}</h3>
                    <small>${job.empresa} | ${job.ubicacion}</small>
                    <p>${job.descripcion}</p>
                </div>
                <button class="button-apply-job">Aplicar</button>`
            container.appendChild(article)
        })
    });

console.log('Despues de fetch') */

const container = document.querySelector('.jobs-listings')
const result_per_page = 3

if (!container){
    console.log('Contenedor no encontrado')
}else{
    fetch("/data.json") // fetch es asincrono
        .then((response)=>{
            return response.json()
        }) 
        .then((jobs)=>{

            

            const result = Math.round( jobs.length / result_per_page )
            console.log('Tiene: ', jobs.length , ' ', 'Resultado: ', result)

            for (let i = 0; i < result; i++) {
            const article = document.createElement('article')
                const job = jobs[i];
                article.className = 'job-listing-card'
                article.dataset.modalidad = job.data.modalidad
                article.dataset.nivel = job.data.nivel
                article.dataset.technology = job.data.technology
                article.innerHTML =`<div>
                        <h3>${job.titulo}</h3>
                        <small>${job.empresa} | ${job.ubicacion}</small>
                        <p>${job.descripcion}</p>
                    </div>
                    <button class="button-apply-job">Aplicar</button>`
                container.appendChild(article)
            }
        });

    console.log('Despues de fetch')
}

