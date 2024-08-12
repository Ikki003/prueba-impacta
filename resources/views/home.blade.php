@extends('layouts.app')

<header>
    <div class="banner banner-red">
        <p>MÁS PUBLICIDAD! <span> SUBSCRÍBETE A NUESTRA NEWSLETTER</span>
            <a href="#" class="newsletter-link">Click aquí</a>
        </p>
    </div>
    <div class="nav-wrapper">
        <a href="#">
            <img src="{{ asset('images/logo_impacta_azul.svg') }}" alt="Logo Impacta Azul">
        </a>
        <button class="menu-toggle">
            &#9776;
        </button>
        <nav class="nav-links">
            <a href="#" class="nav-link">Nosotros</a>
            <a href="#" class="nav-link">Servicios</a>
            <a href="#" class="nav-link">Proyectos</a>
            <a href="#" class="nav-link">Contacto</a>
        </nav>
        <div class="nav-social-icons-wrapper">
            <a href="#">
                <img src="{{ asset('images/social_logo_ig_rojo.webp') }}" alt="Logo Instagram" loading="lazy">
            </a>
            <a href="#">
                <img src="{{ asset('images/social_logo_fb_rojo.webp') }}" alt="Logo Facebook" loading="lazy">
            </a>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="gradient-red-right"></div>
                <div class="gradient-white"></div>
                <h2 class="swiper-text">A veces, somos gente normal</h2>
                <img src="{{ asset('images/slider_1.webp') }}" alt="Monstruo trabajando en oficina" loading="lazy">
            </div>
            <div class="swiper-slide">
                <div class="gradient-red-right"></div>
                <div class="gradient-white"></div>
                <h2 class="swiper-text">A veces, somos gente normal</h2>
                <img src="{{ asset('images/slider_2.webp') }}" alt="Dinosaurio trabajando en oficina" loading="lazy">
            </div>
            <div class="swiper-slide">
                <div class="gradient-red-right"></div>
                <div class="gradient-white"></div>
                <h2 class="swiper-text">A veces, somos gente normal</h2>
                <img src="{{ asset('images/slider_3.webp') }}" alt="Ferrari en oficina" loading="lazy">
            </div>
            <div class="swiper-slide">
                <div class="gradient-red-right"></div>
                <div class="gradient-white"></div>
                <h2 class="swiper-text">A veces, somos gente normal</h2>
                <img src="{{ asset('images/slider_4.webp') }}" alt="Tiburón nadando en oficina" loading="lazy">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>

<section>
    <div class="cards-wrapper container">
        <div class="card">
            <div class="card-image-container">
                <div class="gradient-red-card"></div>
                <img src="{{ asset('images/imagen_brain.webp') }}" class="bg-image" alt="Cerebero metálico" loading="lazy">

                <div class="icon-card">
                    <img src="{{ asset('images/icon_salud_mental.svg') }}" alt="Icono cerebro humano" loading="lazy">
                </div>

                <span class="card-number">1</span>
            </div>

            <div class="card-text-container">
                <h3>Creatividad sin límites para impulsar tu marca</h3>
                <p>Transformamos ideas en <span>experiencias inolvidables</span>, creando campañas
                    que capturan la esencia de tu marca y resuenan profundamente con tu
                    audiencia.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image-container">
                <div class="gradient-red-card"></div>
                <img src="{{ asset('images/imagen_dartboard.webp') }}" class="bg-image" alt="Diana con dardos" loading="lazy">

                <div class="icon-card">
                    <img src="{{ asset('images/icon_esperma.svg') }}" alt="Icono blanco esperma" loading="lazy">
                </div>

                <span class="card-number">2</span>
            </div>

            <div class="card-text-container">
                <h3>Agilidad y eficiencia en cada proyecto</h3>
                <p>
                    <span>Respuesta rápida y eficiente</span> para un mercado en constante cambio,
                    adaptándonos a tus necesidades y superando tus expectativas con cada
                    entrega.
                </p>
            </div>

        </div>
        <div class="card">
            <div class="card-image-container">
                <div class="gradient-red-card"></div>
                <img src="{{ asset('images/imagen_cyber_woman.webp') }}" class="bg-image" alt="Chica con gafas de realidad virtual" loading="lazy">

                <div class="icon-card">
                    <img src="{{ asset('images/icon_chincheta.svg') }}" alt="Icono blanco chincheta" loading="lazy">
                </div>

                <span class="card-number">3</span>
            </div>

            <div class="card-text-container">
                <h3>Tecnología para resultados óptimos</h3>
                <p>
                    Innovación tecnológica para potenciar tus campañas publicitarias,
                    utilizando <span>las herramientas más avanzadas</span> para alcanzar y superar tus
                    objetivos.
                </p>
            </div>

        </div>
        <div class="card">
            <div class="card-image-container">
                <div class="gradient-red-card"></div>
                <img src="{{ asset('images/imagen_handshake.webp') }}" class="bg-image" alt="Apretón de manos" loading="lazy">

                <div class="icon-card">
                    <img src="{{ asset('images/icon_jarra.svg') }}" alt="Icono blanco jarra de cerveza" loading="lazy">
                </div>

                <span class="card-number">4</span>
            </div>

            <div class="card-text-container">
                <h3>Equipo de expertos apasionados y dedicados</h3>
                <p>
                    Profesionales apasionados dedicados a impulsar tu marca, combinando
                    talento y experiencia para ofrecer <span>resultados excepcionales y transformar
                        tu visión en realidad.</span>
                </p>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="blue-background">
        <img src="{{ asset('images/imagen_waiter.webp') }}" alt="Camarero en un fondo con humo" loading="lazy">
        <p>Vendemos humo con mucha pasión</p>
    </div>
</section>

<section>
    <div class="client-section">
        <div class="gradient-section">
            <div class="gradient-top"></div>
        </div>

        <h3>¿NUESTROS CLIENTES?</h3>
        <div class="clients-wrapper">
            <div class="client-row">
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_alcampo.svg') }}" alt="Logo Alcampo" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_basf.svg') }}" alt="Logo Basf" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_ferrovial.svg') }}" alt="Logo Ferrovial" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_kpmg.svg') }}" alt="Logo Kpmg" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_corporate_excellence.svg') }}" alt="Logo Corporate Excellence" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_bmi.svg') }}" alt="Logo Bmi" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_brita.svg') }}" alt="Logo Brita" loading="lazy">
                </div>
            </div>
            <div class="client-row">
                <div class="client-card large">
                    <img class="logo" src="{{ asset('images/cliente_cajamar.svg') }}" alt="Logo Cajamar" loading="lazy">
                </div>
                <div class="client-card large">
                    <img class="logo" src="{{ asset('images/cliente_cepsa.svg') }}" alt="Logo Cepsa" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_schneider_electric.svg') }}" alt="Logo Schneider Electric" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_hill_knowlton.svg') }}" alt="Logo Hill Knowlton" loading="lazy">
                </div>
                <div class="client-card">
                    <img class="logo" src="{{ asset('images/cliente_broseta.svg') }}" alt="Logo Broseta" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<livewire:contact-form />

<section>
    <div class="banner banner-white">
        <p>MÁS PUBLICIDAD! <span> SUBSCRÍBETE A NUESTRA NEWSLETTER</span>
            <a href="#" class="newsletter-link">Click aquí</a>
        </p>
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="item item1">
            <h3>Contacto y Preguntas Frecuentes</h3>
            <a href="#">+(34)666 666 666</a>
            <a href="#">FORMULARIO DE CONTACTO</a>
            <a href="#">PREGUNTAS FRECUENTES</a>
            <a href="#">LIBRO DE RECLAMANCIONES</a>
            <a href="#">CONOCE NUESTRA MANERA DE TRABAJAR</a>
        </div>
        <div class="item item2">
            <h3>Nosotros</h3>
            <a href="#">CATEGROÍAS</a>
            <a href="#">NOVEDADES</a>
            <a href="#">OFERTAS</a>
        </div>
        <div class="item item3">
            <h3>Proyectos</h3>
            <a href="#">CALIDADES</a>
            <a href="#">REVISIONES</a>
            <a href="#">RENOVACIÓN</a>
            <a href="#">VENTAS</a>
        </div>
        <div class="item item4">
            <h3>Contacto</h3>
            <a href="#">FORMULARIO DE CONTACTO</a>
        </div>
        <div class="item item5">
            <h3>Servicios</h3>
        </div>
        <div class="item item6">
            <h3>Redes</h3>
            <a href="#">
                <img src="{{ asset('images/social_logo_ig_blanco.svg') }}" alt="Logo Instagram" loading="lazy">
            </a>
            <a href="#">
                <img src="{{ asset('images/social_logo_fb_blanco.svg') }}" alt="Logo Facebook" loading="lazy">
            </a>
        </div>
        <div class="item item7">
            <h3>Pago seguro</h3>
            <div class="cards-images-wrapper">
                <img src="{{ asset('images/card_master_card.svg') }}" alt="Logo Master Card" loading="lazy">
                <img src="{{ asset('images/card_visa.svg') }}" alt="Logo Visa" loading="lazy">
                <img src="{{ asset('images/card_american_express.svg') }}" alt="Logo American Express" loading="lazy">
                <img src="{{ asset('images/card_paypal.svg') }}" alt="Logo Paypal" loading="lazy">
            </div>
        </div>
        <div class="footer-logo">
            <img src="{{ asset('images/logo_impacta_blanco.svg') }}" alt="Logo Impacta Blanco" loading="lazy">
        </div>
    </div>
</footer>

<div class="banner banner-white">
    <p>© <span>IMPACTA. 2024.</span></p>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            loop: true, // Habilita el loop
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Añade más opciones según sea necesario
        });
    });

    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
    });

    window.onscroll = () => {
        document.querySelector('.nav-links').classList.remove('active');
    };

</script>


