class DevJobsAvatar extends HTMLElement{
    constructor(){
        super(); // llamar al constructor de HTMLElement
        this.attachShadow({ mode: 'open' }); // Encapsular el contenido del componente en un shadow DOM para no afectar los estilos globales
    }

    createUrl(service, username){      
        return `https://unavatar.io/${service}/${username}`;
    }

    render(){
        const service = this.getAttribute('service') ?? 'github';
        const username = this.getAttribute('username') ?? 'clamgred';
        const size = this.getAttribute('size') ?? '40';
        const url = this.createUrl(service, username);

        this.shadowRoot.innerHTML = `
            <style>
                img {
                    width: ${size}px;
                    height: ${size}px;
                    border-radius: 9999px;
                }
            </style>
            <img 
                src="${url}" 
                alt="Avatar de ${username}"
                class="avatar"                
            />
        `;
    }

    connectedCallback(){
        this.render();
    }
}


customElements.define('devjobs-avatar', DevJobsAvatar);