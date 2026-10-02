@extends('layouts.default')

@section('title')
    <title>DevJobs - Inicio</title>
    <meta name="description" content="Encuentra las mejores ofertas de trabajo para desarrolladores en DevJobs">
@endsection

@section('header')
<!-- <h2>This is the header 1</h2> -->
@endsection

@section('maincontent')
<!--
<h1>Home</h1>
<form action="{{ route('formsubmitted') }}" method="POST">
    @csrf
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" 
    placeholder="Type your name" required>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="Type your e-mail" required>
    <br><br>
    <button type="submit">Submit</button>        
</form>
-->
<section>
    <img src="{{ asset('images/background.jpg') }}" width="200"/>
    <h1>Encuentra el trabajo de tus sueños</h1>
    <p>Ùnete a la comunidad mas grande de desarrolladores y encuentra tu proxima oportunidad</p>     
    <form role="search">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
            <input required type="text" placeholder="Buscar empleos por titulo, habilidad o empresa" >
            
            <button type="submit">Buscar</button>
        </div>
    </form>
</section>
<section>
    <header>
        <h2>¿Porque DevJobs?</h2>
        <p>Devjobs es la principal plataforma de busqueda de empleos para desarrolladores. Conectamos a los mejpres talentos con las empresas mas innovadoras</p>
    </header>
    <footer>        
        <article>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -9" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><path d="M12 12l0 .01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
            <h3>Encuentra el trabajo de tus sueños</h3>
            <p>Busca miles de empleos de las mejores empresas</p>
        </article>        
        <article>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
            <h3>Conecta con las mejores empresas</h3>
            <p>Accede a ofertas exclusivas de empresas lideres en tecnologia.</p>
        </article>         
        <article>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 21h18" /><path d="M5 21v-12l5 4v-4l5 4h4" /><path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" /><path d="M9 17h1" /><path d="M14 17h1" /></svg>   
            <h3>Obten el salario que mereces</h3>
            <p>Obten el salario que mereces segun tus habilidades y experiencia</p>
        </article>    
    </footer>
</section>
@endsection

@section('footer')
<small>&copy; 2023 DevJobs. Todos los derechos reservados.</small>
@endsection
