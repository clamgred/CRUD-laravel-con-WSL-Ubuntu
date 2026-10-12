class DevJobsPagination extends HTMLElement{
    constructor(){
        super(); // llamar al constructor de HTMLElement
        this.attachShadow({ mode: 'open' }); // Encapsular el contenido del componente en un shadow DOM para no afectar los estilos globales
    }

    render(){     
        this.shadowRoot.innerHTML = `
            <style>
                .pagination{
                    display: flex;
                    justify-content: center;
                    gap: 0.5rem;
                    margin-top: 2rem;

                    a{
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 2rem;
                        height: 2rem;
                        text-decoration: none;
                        color: var(--text-muted);
                        border-radius: 0.375rem;
                        transition: all 0.3s;

                        &:hover , &:focus{
                        background-color: #fff;    
                        }

                        &:active{
                        transform: scale(0.90);
                        }

                        &.is-active{
                        background-color: var(--primary-light);
                        color: white;
                        pointer-events: none;
                        }
                    }                
                }
            </style>        
        <nav class="pagination">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M15 6l-6 6l6 6" /></svg>
            </a>
            <a class="is-active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9 6l6 6l-6 6" /></svg></a>
        </nav>
        `;
    }

    connectedCallback(){
        this.render();
    }
}


customElements.define('devjobs-pagination', DevJobsPagination);