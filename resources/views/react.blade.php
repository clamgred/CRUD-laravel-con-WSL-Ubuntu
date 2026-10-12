@extends('layouts.default')

@section('title')
    <title>DevJobs - Empleos</title>
    <meta name="description" content="Listado con empleos y filtros para encontrar el trabajo de tus sueños">    
    
    

    @verbatim
        <script type="text/babel">

            function JobCard({ data, titulo, empresa, ubicacion,descripcion }) {
                const [ isApplied, setIsApplied ] =React.useState(false)

                console.log('---> render')    
                function HandleClick(){
                    setIsApplied(!isApplied)
                }

                const text = isApplied ? "Aplicado" : "Aplicar"    
                const buttonClass = isApplied ? "is-applied" : ""
                const isAppliedText = isApplied ? "Si" : "No"
                return (
                    <article 
                        className="job-listing-card"
                        data-modalidad ={data?.modalidad}
                        data-nivel ={data?.nivel}
                        data-technology = {data?.technology}
                    >
                        <div>
                            <h3>{titulo}</h3>
                            <small>{empresa} | {ubicacion} - ¿He aplicado? {isAppliedText}
                            </small>
                            <p>{descripcion}</p>
                        </div>
                        <button 
                            
                            className={`button-apply-job`}
                            onClick={HandleClick}
                        >{text}</button>
                    </article>

                );
                
            }

            function App() {
                return (
                    <div className="jobs-listings">
                        <JobCard 
                            titulo="Desarrollador Frontend React.js" 
                            empresa="Google" 
                            ubicacion="Remoto" 
                            descripcion="Se busca desarrollador frontend con experiencia en React.js y Redux. Se valorará experiencia en TypeScript y testing con Jest." 
                            data={{modalidad: "Remoto", nivel: "senior", technology: "react"}}
                        />
                    </div>
                );
            }

            const rootEl = document.querySelector("#root");
            const root = ReactDOM.createRoot(rootEl);
            root.render(<App />);
        </script>
    @endverbatim
@endsection

@section('header')
@endsection

@section('maincontent')
    <section class="jobs-search">
        <h1>React.js, primeros pasos</h1>        
    </section>
    <section>
        <h2>Empleos disponibles</h2>
        <div id="root">       
        </div>
    </section>

@endsection

@section('footer')
<small>&copy; 2023 DevJobs. Todos los derechos reservados.</small>
@endsection