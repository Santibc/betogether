<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendarix</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        /* ============================================
           WELCOME PAGE - AGENDAMIENTO BELLEZA
           ============================================ */

        :root {
            /* 🎨 Paleta clara y legible */
            --welcome-bg-base: #ffffff;
            --welcome-bg-gradient: linear-gradient(135deg, #ffffff 0%, #ffffff 25%, #ffffff 50%, #ffffff 75%, #ffffff 100%);

            /* 🖤 Textos oscuros para legibilidad */
            --welcome-text-primary: #1a202c;
            --welcome-text-secondary: #4a5568;
            --welcome-text-muted: #718096;

            /* 🌈 Acentos de color */
            --welcome-accent-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);
            --welcome-secondary-gradient: linear-gradient(135deg, #ec4899 0%, #a855f7 50%, #6366f1 100%);

            /* ✨ Fondos y elementos */
            --welcome-white: #ffffff;
            --welcome-gray-light: #f7fafc;
            --welcome-gray-medium: #e2e8f0;

            /* 🫧 Glass effects más sutiles */
            --welcome-glass-overlay: rgba(255, 255, 255, 0.7);
            --welcome-glass-border: rgba(99, 102, 241, 0.1);
            --welcome-backdrop-blur: 20px;

            /* 📏 Espaciado */
            --welcome-space-xs: 0.25rem;
            --welcome-space-sm: 0.5rem;
            --welcome-space-md: 0.75rem;
            --welcome-space-lg: 1rem;
            --welcome-space-xl: 1.25rem;
            --welcome-space-2xl: 1.5rem;
            --welcome-space-3xl: 2rem;
            --welcome-space-4xl: 2.5rem;
            --welcome-space-5xl: 3rem;

            /* 📝 Tipografía */
            --welcome-font-xs: 0.75rem;
            --welcome-font-sm: 0.875rem;
            --welcome-font-base: 0.95rem;
            --welcome-font-lg: 1.1rem;
            --welcome-font-xl: 1.25rem;
            --welcome-font-2xl: 1.5rem;
            --welcome-font-3xl: 1.875rem;
            --welcome-font-4xl: 2.25rem;
            --welcome-font-5xl: 3rem;

            /* 🔄 Bordes y efectos */
            --welcome-radius-sm: 0.375rem;
            --welcome-radius-md: 0.5rem;
            --welcome-radius-lg: 0.75rem;
            --welcome-radius-xl: 1rem;
            --welcome-radius-2xl: 1.5rem;

            /* 🎭 Sombras suaves */
            --welcome-shadow-soft: 0 1px 3px rgba(0, 0, 0, 0.1);
            --welcome-shadow-medium: 0 4px 12px rgba(0, 0, 0, 0.1);
            --welcome-shadow-strong: 0 10px 25px rgba(0, 0, 0, 0.15);

            /* ⚡ Transiciones */
            --welcome-transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --welcome-transition-slow: 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #welcome-body {
            font-family: 'Inter', sans-serif;
            background: var(--welcome-bg-gradient);
            background-size: 200% 200%;
            animation: welcomeGradientShift 20s ease infinite;
            min-height: 100vh;
            line-height: 1.6;
            position: relative;
            overflow-x: hidden;
            color: var(--welcome-text-primary);
        }

        /* 🌊 Animación sutil del fondo */
        @keyframes welcomeGradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        /* 🫧 BOLITAS MÁS SUTILES - FONDO CLARO */
        #welcome-body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle 120px at 10% 20%, rgba(99, 102, 241, 0.08) 0%, rgba(99, 102, 241, 0.02) 40%, transparent 70%),
                radial-gradient(circle 100px at 90% 15%, rgba(236, 72, 153, 0.06) 0%, rgba(236, 72, 153, 0.01) 35%, transparent 65%),
                radial-gradient(circle 140px at 15% 85%, rgba(168, 85, 247, 0.07) 0%, rgba(168, 85, 247, 0.02) 40%, transparent 70%),
                radial-gradient(circle 110px at 85% 80%, rgba(139, 92, 246, 0.05) 0%, rgba(139, 92, 246, 0.01) 35%, transparent 65%);
            animation: welcomeFloatingBubbles 15s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        }

        /* 🌈 MÁS BOLITAS SUTILES */
        #welcome-body::after {
            content: '';
            position: fixed;
            width: 8px;
            height: 8px;
            top: 20%;
            left: 15%;
            border-radius: 50%;
            background: rgba(99, 102, 241, 0.15);
            box-shadow:
                200px 100px 0 -2px rgba(236, 72, 153, 0.12),
                -150px 300px 0 0px rgba(168, 85, 247, 0.1),
                400px 50px 0 3px rgba(139, 92, 246, 0.14),
                600px 250px 0 -1px rgba(99, 102, 241, 0.11),
                -100px 500px 0 2px rgba(34, 197, 94, 0.09),
                800px 400px 0 -2px rgba(248, 113, 113, 0.13),
                100px 600px 0 4px rgba(139, 92, 246, 0.12),
                500px 150px 0 -3px rgba(99, 102, 241, 0.1);
            animation: welcomeFloatingBubbles 25s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        }

        /* 🫧 Animación de las bolitas flotantes */
        @keyframes welcomeFloatingBubbles {

            0%,
            100% {
                transform: translate(0px, 0px) scale(1);
                opacity: 1;
            }

            25% {
                transform: translate(-15px, -25px) scale(1.1);
                opacity: 0.8;
            }

            50% {
                transform: translate(20px, -15px) scale(0.9);
                opacity: 0.6;
            }

            75% {
                transform: translate(-10px, -30px) scale(1.05);
                opacity: 0.9;
            }
        }

        /* 🎯 HEADER */
        #welcome-header {
            position: relative;
            z-index: 10;
            padding: var(--welcome-space-lg) var(--welcome-space-xl);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--welcome-gray-medium);
        }

        #welcome-logo {
            display: flex;
            align-items: center;
            gap: var(--welcome-space-md);
            font-size: var(--welcome-font-xl);
            font-weight: 800;
            color: var(--welcome-text-primary);
            text-decoration: none;
        }

        #welcome-logo-icon {
            width: 2.5rem;
            height: 2.5rem;
            background: var(--welcome-accent-gradient);
            border-radius: var(--welcome-radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            box-shadow: var(--welcome-shadow-medium);
        }

        #welcome-nav {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;

            backdrop-filter: blur(12px);
            background-color: rgba(0, 0, 0, 0.4);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }




        /* 🎯 HERO SECTION */
        #welcome-hero {
            position: relative;
            z-index: 5;
            padding: var(--welcome-space-5xl) var(--welcome-space-xl);
            text-align: center;
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        #welcome-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--welcome-space-sm);
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            padding: var(--welcome-space-sm) var(--welcome-space-lg);
            border-radius: var(--welcome-radius-2xl);
            font-size: var(--welcome-font-sm);
            font-weight: 500;
            color: var(--welcome-text-secondary);
            margin-bottom: var(--welcome-space-2xl);
            transition: var(--welcome-transition);
        }

        #welcome-hero-badge:hover {
            background: rgba(99, 102, 241, 0.15);
            transform: translateY(-1px);
        }

        #welcome-hero-title {
            font-size: var(--welcome-font-5xl);
            font-weight: 800;
            color: var(--welcome-text-primary);
            margin-bottom: var(--welcome-space-xl);
            line-height: 1.1;
            max-width: 800px;
        }

        #welcome-hero-subtitle {
            font-size: var(--welcome-font-xl);
            color: var(--welcome-text-secondary);
            margin-bottom: var(--welcome-space-3xl);
            max-width: 600px;
            font-weight: 500;
            line-height: 1.5;
        }

        #welcome-hero-actions {
            display: flex;
            gap: var(--welcome-space-lg);
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .welcome-btn-primary {
            background: var(--welcome-accent-gradient);
            color: white;
            padding: var(--welcome-space-lg) var(--welcome-space-2xl);
            border-radius: var(--welcome-radius-lg);
            font-size: var(--welcome-font-lg);
            font-weight: 600;
            text-decoration: none;
            transition: var(--welcome-transition);
            display: inline-flex;
            align-items: center;
            gap: var(--welcome-space-sm);
            box-shadow: var(--welcome-shadow-medium);
        }

        .welcome-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--welcome-shadow-strong);
        }

        .welcome-btn-secondary {
            background: var(--welcome-white);
            color: var(--welcome-text-primary);
            padding: var(--welcome-space-lg) var(--welcome-space-2xl);
            border-radius: var(--welcome-radius-lg);
            font-size: var(--welcome-font-lg);
            font-weight: 600;
            text-decoration: none;
            transition: var(--welcome-transition);
            display: inline-flex;
            align-items: center;
            gap: var(--welcome-space-sm);
            border: 1px solid var(--welcome-gray-medium);
            box-shadow: var(--welcome-shadow-soft);
        }

        .welcome-btn-secondary:hover {
            background: var(--welcome-gray-light);
            transform: translateY(-1px);
        }

        /* 🔍 SEARCH SECTION - ESTILO FRESHA */
        #welcome-search {
            position: relative;
            z-index: 5;
            padding: var(--welcome-space-2xl) var(--welcome-space-xl);
            max-width: 900px;
            margin: 0 auto;
        }

        #welcome-search-container {
            background: var(--welcome-white);
            border-radius: var(--welcome-radius-2xl);
            padding: var(--welcome-space-xl);
            box-shadow: var(--welcome-shadow-medium);
            border: 1px solid var(--welcome-gray-medium);
        }

        #welcome-search-form {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr auto;
            gap: var(--welcome-space-lg);
            align-items: end;
        }

        .welcome-search-field {
            display: flex;
            flex-direction: column;
            gap: var(--welcome-space-sm);
        }

        .welcome-search-label {
            font-size: var(--welcome-font-sm);
            font-weight: 500;
            color: var(--welcome-text-secondary);
        }

        .welcome-search-input {
            padding: var(--welcome-space-md);
            border: 1px solid var(--welcome-gray-medium);
            border-radius: var(--welcome-radius-md);
            font-size: var(--welcome-font-base);
            background: var(--welcome-white);
            transition: var(--welcome-transition);
        }

        .welcome-search-input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        #welcome-search-btn {
            background: var(--welcome-text-primary);
            color: white;
            padding: var(--welcome-space-md) var(--welcome-space-xl);
            border: none;
            border-radius: var(--welcome-radius-md);
            font-weight: 600;
            cursor: pointer;
            transition: var(--welcome-transition);
        }

        #welcome-search-btn:hover {
            background: #2d3748;
            transform: translateY(-1px);
        }

        /* 🏆 STATS SECTION */
        #welcome-stats {
            position: relative;
            z-index: 5;
            padding: var(--welcome-space-3xl) var(--welcome-space-xl);
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        #welcome-stats-text {
            font-size: var(--welcome-font-lg);
            color: var(--welcome-text-secondary);
            font-weight: 500;
        }

        #welcome-stats-number {
            color: var(--welcome-text-primary);
            font-weight: 700;
        }

        /* 🎯 FEATURES SECTION */
        #welcome-features {
            position: relative;
            z-index: 5;
            padding: var(--welcome-space-4xl) var(--welcome-space-xl);
            max-width: 1200px;
            margin: 0 auto;
        }

        #welcome-features-title {
            text-align: center;
            font-size: var(--welcome-font-3xl);
            font-weight: 700;
            color: var(--welcome-text-primary);
            margin-bottom: var(--welcome-space-2xl);
        }

        #welcome-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--welcome-space-2xl);
            margin-top: var(--welcome-space-3xl);
        }

        .welcome-feature-card {
            background: var(--welcome-white);
            border: 1px solid var(--welcome-gray-medium);
            border-radius: var(--welcome-radius-xl);
            padding: var(--welcome-space-2xl);
            text-align: center;
            transition: var(--welcome-transition);
            position: relative;
            overflow: hidden;
            box-shadow: var(--welcome-shadow-soft);
        }

        .welcome-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--welcome-shadow-strong);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .welcome-feature-icon {
            width: 4rem;
            height: 4rem;
            background: var(--welcome-accent-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--welcome-space-xl);
            color: white;
            font-size: 1.5rem;
            box-shadow: var(--welcome-shadow-medium);
        }

        .welcome-feature-title {
            font-size: var(--welcome-font-xl);
            font-weight: 600;
            color: var(--welcome-text-primary);
            margin-bottom: var(--welcome-space-md);
        }

        .welcome-feature-description {
            color: var(--welcome-text-secondary);
            font-size: var(--welcome-font-base);
            line-height: 1.6;
        }

        /* 🎯 CTA SECTION */
        #welcome-cta {
            position: relative;
            z-index: 5;
            padding: var(--welcome-space-4xl) var(--welcome-space-xl);
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        #welcome-cta-container {
            background: var(--welcome-white);
            border: 1px solid var(--welcome-gray-medium);
            border-radius: var(--welcome-radius-2xl);
            padding: var(--welcome-space-4xl) var(--welcome-space-2xl);
            position: relative;
            overflow: hidden;
            box-shadow: var(--welcome-shadow-medium);
        }

        #welcome-cta-title {
            font-size: var(--welcome-font-3xl);
            font-weight: 700;
            color: var(--welcome-text-primary);
            margin-bottom: var(--welcome-space-lg);
        }

        #welcome-cta-subtitle {
            color: var(--welcome-text-secondary);
            font-size: var(--welcome-font-lg);
            margin-bottom: var(--welcome-space-3xl);
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        /* 📱 RESPONSIVE */
        @media (max-width: 768px) {
            #welcome-header {
                padding: var(--welcome-space-md);
                flex-direction: column;
                gap: var(--welcome-space-lg);
            }

            #welcome-nav {
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1000;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 2rem;

                backdrop-filter: blur(12px);
                background-color: rgba(0, 0, 0, 0.4);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            #welcome-hero {
                padding: var(--welcome-space-3xl) var(--welcome-space-md);
                min-height: 70vh;
            }

            #welcome-hero-title {
                font-size: var(--welcome-font-3xl);
            }

            #welcome-hero-subtitle {
                font-size: var(--welcome-font-lg);
            }

            #welcome-hero-actions {
                flex-direction: column;
                width: 100%;
            }

            .welcome-btn-primary,
            .welcome-btn-secondary {
                width: 100%;
                justify-content: center;
                padding: var(--welcome-space-lg);
            }

            #welcome-search-form {
                grid-template-columns: 1fr;
                gap: var(--welcome-space-md);
            }

            #welcome-features {
                padding: var(--welcome-space-3xl) var(--welcome-space-md);
            }

            #welcome-features-grid {
                grid-template-columns: 1fr;
                gap: var(--welcome-space-xl);
            }

            #welcome-cta {
                padding: var(--welcome-space-3xl) var(--welcome-space-md);
            }

            #welcome-cta-container {
                padding: var(--welcome-space-3xl) var(--welcome-space-lg);
            }

            #welcome-cta-title {
                font-size: var(--welcome-font-2xl);
            }
        }

        @media (max-width: 480px) {
            #welcome-hero-title {
                font-size: var(--welcome-font-2xl);
            }

            #welcome-features-title,
            #welcome-cta-title {
                font-size: var(--welcome-font-xl);
            }

            .welcome-feature-card {
                padding: var(--welcome-space-xl);
            }
        }

        /* ⚡ Modo de movimiento reducido */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }

            #welcome-body::before,
            #welcome-body::after {
                animation: none;
            }
        }

        /* 🌟 Efectos adicionales */
        .welcome-floating {
            animation: welcomeFloat 6s ease-in-out infinite;
        }

        @keyframes welcomeFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body id="welcome-body">
    <!-- 🎯 HEADER -->
    <header>
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nuestra Historia</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Mi cuenta</a></li>
            </ul>
        </nav>

        <div class="hero">
            <div class="hero-text">
                <img src="https://betogether.com.co/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-21-at-6.37.16-PM-2-e1747914711170.png"
                    alt="Logo" class="logo">
                <h1>¡Hola Colombia!<br>Tu Negocio, <span>Nuestra causa.</span></h1>
                <p>Te abrimos la puerta a un ecosistema de <strong>crecimiento sin límites.</strong></p>
                <ul class="benefits">
                    <li>🛒 Tienda Online al Instante</li>
                    <li>🚚 Pasarela de pago y Logística integrada</li>
                    <li>🎉 Festivales Exclusivos para nuestros miembros</li>
                </ul>
                <div class="buttons">
                    <a href="#" class="btn pink">Así lo hacemos posible</a>
                    <a href="#" class="btn outline">Regístrate ahora</a>
                </div>
            </div>
        </div>
        <div class="wave-container">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="white" fill-opacity="1"
                    d="M0,256L26.7,213.3C53.3,171,107,85,160,90.7C213.3,96,267,192,320,224C373.3,256,427,224,480,224C533.3,224,587,256,640,261.3C693.3,267,747,245,800,234.7C853.3,224,907,224,960,197.3C1013.3,171,1067,117,1120,122.7C1173.3,128,1227,192,1280,208C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                </path>

                <path fill="white" fill-opacity="0.6"
                    d="M0,160L34.3,181.3C68.6,203,137,245,206,250.7C274.3,256,343,224,411,192C480,160,549,128,617,133.3C685.7,139,754,181,823,213.3C891.4,245,960,267,1029,250.7C1097.1,235,1166,181,1234,160C1302.9,139,1371,149,1406,154.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
                <path fill="white" fill-opacity="0.3"
                    d="M0,64L18.5,90.7C36.9,117,74,171,111,213.3C147.7,256,185,288,222,266.7C258.5,245,295,171,332,154.7C369.2,139,406,181,443,186.7C480,192,517,160,554,144C590.8,128,628,128,665,138.7C701.5,149,738,171,775,165.3C812.3,160,849,128,886,144C923.1,160,960,224,997,250.7C1033.8,277,1071,267,1108,240C1144.6,213,1182,171,1218,144C1255.4,117,1292,107,1329,122.7C1366.2,139,1403,181,1422,202.7L1440,224L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
                </path>
                <path fill="white" fill-opacity="0.3"
                    d="M0,192L34.3,197.3C68.6,203,137,213,206,192C274.3,171,343,117,411,112C480,107,549,149,617,181.3C685.7,213,754,235,823,218.7C891.4,203,960,149,1029,106.7C1097.1,64,1166,32,1234,26.7C1302.9,21,1371,43,1406,53.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </div>
    </header>

    <!-- 🎯 SVG SECTION -->


    <!-- 🎯 HERO SECTION -->
    <section class="seccion-oferta">
        <p class="subtitulo">¡ACTIVA TU MARCA EN LO DIGITAL Y PRESENCIAL!</p>
        <h2 class="titulo">¿Emprendes o lideras una fundación?</h2>
        <p class="descripcion">
            Con nosotros no solo accedes a una plataforma…<br />
            ¡Abres la puerta a un <strong>ecosistema completo</strong> que se enfoca en atraer visitantes y potenciales
            clientes para ti.
        </p>

        <div class="tarjetas-contenedor">
            <!-- Tarjeta 1 -->
            <div class="tarjeta">
                <div class="icono">💻</div>
                <h3><a href="#">Tu Tienda Online ¡Lista para Vender!</a></h3>
                <p>Lánzala en minutos y gestiona pagos seguros, envíos y estadísticas para el control total de tus
                    ventas. 🧾</p>
            </div>

            <!-- Tarjeta 2 -->
            <div class="tarjeta">
                <div class="icono">🤝</div>
                <h3><a href="#">Tu Marca Siempre Visible.</a></h3>
                <p>¡No solo vendes, tu marca conecta! ❤️ Creamos contenido audiovisual en nuestras redes que cuenta la
                    historia de algunos de nuestros miembros, impulsando su reconocimiento. <strong>Somos tu aliado para
                        hacerte conocer.</strong></p>
            </div>

            <!-- Tarjeta 3 -->
            <div class="tarjeta">
                <div class="icono">📺</div>
                <h3><a href="#">¡Brilla en nuestros eventos exclusivos!</a></h3>
                <p>Lleva tu marca al siguiente nivel en festivales comerciales. Tu tienda digital y física se fusionan
                    para que solo te preocupes por vender, nosotros nos encargamos del resto y, <strong>¡nosotros
                        ponemos la infraestructura!</strong> 🏠</p>
            </div>
        </div>
    </section>





    <section class="hero2">
        <!-- Onda superior -->
        <svg class="wave wave-top" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="0.3"
                d="M0,128L60,154.7C120,181,240,235,360,240C480,245,600,203,720,176C840,149,960,139,1080,149.3C1200,160,1320,192,1380,208L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
            <path fill="#fff" fill-opacity="0.3"
                d="M0,256L24,234.7C48,213,96,171,144,154.7C192,139,240,149,288,154.7C336,160,384,160,432,170.7C480,181,528,203,576,192C624,181,672,139,720,122.7C768,107,816,117,864,133.3C912,149,960,171,1008,197.3C1056,224,1104,256,1152,240C1200,224,1248,160,1296,154.7C1344,149,1392,203,1416,229.3L1440,256L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
            </path>
            <path fill="#fff" fill-opacity="0.5"
                d="M0,224L26.7,186.7C53.3,149,107,75,160,69.3C213.3,64,267,128,320,128C373.3,128,427,64,480,64C533.3,64,587,128,640,133.3C693.3,139,747,85,800,80C853.3,75,907,117,960,117.3C1013.3,117,1067,75,1120,90.7C1173.3,107,1227,181,1280,208C1333.3,235,1387,213,1413,202.7L1440,192L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
            <path fill="#fff" fill-opacity="1"
                d="M0,192L10.9,202.7C21.8,213,44,235,65,224C87.3,213,109,171,131,170.7C152.7,171,175,213,196,245.3C218.2,277,240,299,262,298.7C283.6,299,305,277,327,250.7C349.1,224,371,192,393,160C414.5,128,436,96,458,106.7C480,117,502,171,524,186.7C545.5,203,567,181,589,149.3C610.9,117,633,75,655,53.3C676.4,32,698,32,720,42.7C741.8,53,764,75,785,80C807.3,85,829,75,851,64C872.7,53,895,43,916,37.3C938.2,32,960,32,982,32C1003.6,32,1025,32,1047,64C1069.1,96,1091,160,1113,181.3C1134.5,203,1156,181,1178,149.3C1200,117,1222,75,1244,96C1265.5,117,1287,203,1309,224C1330.9,245,1353,203,1375,176C1396.4,149,1418,139,1429,133.3L1440,128L1440,0L1429.1,0C1418.2,0,1396,0,1375,0C1352.7,0,1331,0,1309,0C1287.3,0,1265,0,1244,0C1221.8,0,1200,0,1178,0C1156.4,0,1135,0,1113,0C1090.9,0,1069,0,1047,0C1025.5,0,1004,0,982,0C960,0,938,0,916,0C894.5,0,873,0,851,0C829.1,0,807,0,785,0C763.6,0,742,0,720,0C698.2,0,676,0,655,0C632.7,0,611,0,589,0C567.3,0,545,0,524,0C501.8,0,480,0,458,0C436.4,0,415,0,393,0C370.9,0,349,0,327,0C305.5,0,284,0,262,0C240,0,218,0,196,0C174.5,0,153,0,131,0C109.1,0,87,0,65,0C43.6,0,22,0,11,0L0,0Z">
            </path>
        </svg>

        <!-- Contenido -->
        <h2>¡Únete a la <strong>primera membresía</strong> en Colombia para Emprendedores y
            <strong>Fundaciones</strong>!
        </h2>
        <h1>Juntos, ya impactamos a más de:</h1>
        <div class="contador"><span id="contador">0</span>K</div>
        <div class="subcontador">VISITANTES TOTALES</div>
        <script>
            const contador = document.getElementById('contador');
            const valorFinal = 134;
            let actual = 0;
            const velocidad = 15;

            const animar = setInterval(() => {
                actual++;
                contador.textContent = actual;
                if (actual >= valorFinal) clearInterval(animar);
            }, velocidad);
        </script>

        <!-- Onda inferior -->
        <svg class="wave-bottom" viewBox="0 0 1440 320">
            <path fill="#FFF" fill-opacity="1"
                d="M0,32L9.6,74.7C19.2,117,38,203,58,202.7C76.8,203,96,117,115,106.7C134.4,96,154,160,173,197.3C192,235,211,245,230,208C249.6,171,269,85,288,53.3C307.2,21,326,43,346,85.3C364.8,128,384,192,403,208C422.4,224,442,192,461,181.3C480,171,499,181,518,186.7C537.6,192,557,192,576,186.7C595.2,181,614,171,634,149.3C652.8,128,672,96,691,85.3C710.4,75,730,85,749,74.7C768,64,787,32,806,58.7C825.6,85,845,171,864,181.3C883.2,192,902,128,922,96C940.8,64,960,64,979,90.7C998.4,117,1018,171,1037,213.3C1056,256,1075,288,1094,266.7C1113.6,245,1133,171,1152,154.7C1171.2,139,1190,181,1210,165.3C1228.8,149,1248,75,1267,42.7C1286.4,11,1306,21,1325,48C1344,75,1363,117,1382,165.3C1401.6,213,1421,267,1430,293.3L1440,320L1440,320L1430.4,320C1420.8,320,1402,320,1382,320C1363.2,320,1344,320,1325,320C1305.6,320,1286,320,1267,320C1248,320,1229,320,1210,320C1190.4,320,1171,320,1152,320C1132.8,320,1114,320,1094,320C1075.2,320,1056,320,1037,320C1017.6,320,998,320,979,320C960,320,941,320,922,320C902.4,320,883,320,864,320C844.8,320,826,320,806,320C787.2,320,768,320,749,320C729.6,320,710,320,691,320C672,320,653,320,634,320C614.4,320,595,320,576,320C556.8,320,538,320,518,320C499.2,320,480,320,461,320C441.6,320,422,320,403,320C384,320,365,320,346,320C326.4,320,307,320,288,320C268.8,320,250,320,230,320C211.2,320,192,320,173,320C153.6,320,134,320,115,320C96,320,77,320,58,320C38.4,320,19,320,10,320L0,320Z">
            </path>
            <path fill="#FFF" fill-opacity="0.5"
                d="M0,32L18.5,26.7C36.9,21,74,11,111,53.3C147.7,96,185,192,222,245.3C258.5,299,295,309,332,298.7C369.2,288,406,256,443,250.7C480,245,517,267,554,256C590.8,245,628,203,665,208C701.5,213,738,267,775,277.3C812.3,288,849,256,886,256C923.1,256,960,288,997,272C1033.8,256,1071,192,1108,181.3C1144.6,171,1182,213,1218,218.7C1255.4,224,1292,192,1329,165.3C1366.2,139,1403,117,1422,106.7L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
            </path>
            <path fill="#fff" fill-opacity="0.3"
                d="M0,64L21.8,101.3C43.6,139,87,213,131,229.3C174.5,245,218,203,262,181.3C305.5,160,349,160,393,181.3C436.4,203,480,245,524,229.3C567.3,213,611,139,655,122.7C698.2,107,742,149,785,192C829.1,235,873,277,916,266.7C960,256,1004,192,1047,138.7C1090.9,85,1135,43,1178,69.3C1221.8,96,1265,192,1309,208C1352.7,224,1396,160,1418,128L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
            </path>

        </svg>
    </section>
    


    <section id="welcome-hero">
        <div id="welcome-hero-badge" class="welcome-floating">
            <i class="fas fa-star" style="color: #fbbf24;"></i>
            <span>Más de 549.310 citas reservadas hoy</span>
        </div>

        <h1 id="welcome-hero-title">
            Reserva servicios de belleza
            <span
                style="background: linear-gradient(135deg, #6366f1, #a855f7); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">y
                bienestar en tu zona</span>
        </h1>

        <p id="welcome-hero-subtitle">
            Descubre y agenda citas con los mejores profesionales de belleza, spa,
            masajes y bienestar cerca de ti. Fácil, rápido y confiable.
        </p>

        <div id="welcome-hero-actions">
            <a href="#welcome-search" class="welcome-btn-primary">
                <i class="fas fa-search"></i>
                Explorar Servicios
            </a>
            <a href="{{ route('register') }}" class="welcome-btn-secondary">
                <i class="fas fa-store"></i>
                Para Profesionales
            </a>
        </div>
    </section>

    <!-- 🔍 SEARCH SECTION - ESTILO FRESHA -->
    <section id="welcome-search">
        <div id="welcome-search-container">
            <form id="welcome-search-form">
                <div class="welcome-search-field">
                    <label class="welcome-search-label">
                        <i class="fas fa-search"></i>
                        Todos los tratamientos y servicios
                    </label>
                    <input type="text" class="welcome-search-input"
                        placeholder="Corte de cabello, manicure, masaje...">
                </div>

                <div class="welcome-search-field">
                    <label class="welcome-search-label">
                        <i class="fas fa-map-marker-alt"></i>
                        Ubicación actual
                    </label>
                    <input type="text" class="welcome-search-input" placeholder="Tu ciudad o código postal">
                </div>

                <div class="welcome-search-field">
                    <label class="welcome-search-label">
                        <i class="fas fa-calendar"></i>
                        Cualquier fecha
                    </label>
                    <input type="date" class="welcome-search-input">
                </div>

                <button type="submit" id="welcome-search-btn">
                    Buscar
                </button>
            </form>
        </div>
    </section>

    <!-- 🏆 STATS SECTION -->
    <section id="welcome-stats">
        <p id="welcome-stats-text">
            <span id="welcome-stats-number">549.310</span> citas reservadas hoy
        </p>
    </section>

    <!-- 🎯 FEATURES SECTION -->
    <section id="welcome-features">
        <h2 id="welcome-features-title">Por qué elegir AgendaPro</h2>

        <div id="welcome-features-grid">
            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="welcome-feature-title">Reserva 24/7</h3>
                <p class="welcome-feature-description">
                    Agenda tus citas en cualquier momento del día.
                    Los profesionales actualizan su disponibilidad en tiempo real.
                </p>
            </div>

            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="welcome-feature-title">Pago Seguro</h3>
                <p class="welcome-feature-description">
                    Pagos protegidos y garantizados. Si algo sale mal,
                    te devolvemos tu dinero sin complicaciones.
                </p>
            </div>

            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="welcome-feature-title">Profesionales Verificados</h3>
                <p class="welcome-feature-description">
                    Todos nuestros profesionales están verificados y tienen
                    reseñas reales de clientes como tú.
                </p>
            </div>

            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <h3 class="welcome-feature-title">Recordatorios</h3>
                <p class="welcome-feature-description">
                    Recibe notificaciones automáticas por email y SMS
                    para no olvidar nunca tu cita.
                </p>
            </div>

            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="welcome-feature-title">App Móvil</h3>
                <p class="welcome-feature-description">
                    Gestiona tus citas desde tu móvil. Cancela, reprograma
                    o encuentra nuevos servicios en un solo toque.
                </p>
            </div>

            <div class="welcome-feature-card">
                <div class="welcome-feature-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3 class="welcome-feature-title">Ofertas Exclusivas</h3>
                <p class="welcome-feature-description">
                    Accede a descuentos especiales y promociones que solo
                    encontrarás en nuestra plataforma.
                </p>
            </div>
        </div>
    </section>

    <!-- 🎯 CTA SECTION -->
    <section id="welcome-cta">
        <div id="welcome-cta-container">
            <h2 id="welcome-cta-title">¿Listo para tu próxima cita?</h2>
            <p id="welcome-cta-subtitle">
                Únete a miles de personas que ya disfrutan de la mejor experiencia
                en servicios de belleza y bienestar.
            </p>
            <div id="welcome-hero-actions">
                <a href="#welcome-search" class="welcome-btn-primary">
                    <i class="fas fa-calendar-plus"></i>
                    Reservar Ahora
                </a>
                <a href="{{ route('register') }}" class="welcome-btn-secondary">
                    <i class="fas fa-store-alt"></i>
                    Registrar mi Negocio
                </a>
            </div>
        </div>
    </section>

    <script>
        // 🌟 Efectos de interactividad para welcome
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll para enlaces internos
            document.querySelectorAll('a[href^="#welcome-"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Animación de entrada para las feature cards
            const welcomeObserverOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const welcomeObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, welcomeObserverOptions);

            // Observar feature cards
            document.querySelectorAll('.welcome-feature-card').forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition =
                    `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                welcomeObserver.observe(card);
            });

            // Efecto parallax sutil para el hero
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const welcomeHero = document.getElementById('welcome-hero');
                if (welcomeHero) {
                    welcomeHero.style.transform = `translateY(${scrolled * 0.05}px)`;
                }
            });

            // Auto focus en el primer campo del formulario de búsqueda
            const welcomeSearchInput = document.querySelector('#welcome-search-form .welcome-search-input');
            if (welcomeSearchInput) {
                welcomeSearchInput.addEventListener('focus', function() {
                    this.parentNode.style.background = 'rgba(99, 102, 241, 0.02)';
                });

                welcomeSearchInput.addEventListener('blur', function() {
                    this.parentNode.style.background = '';
                });
            }
        });
    </script>
</body>

</html>
