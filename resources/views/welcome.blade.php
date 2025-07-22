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
    
<!-- ondas -->
    <div class="wave-container-2">
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


    <section>
        

        <section class="hero2">
            <!-- Onda superior -->
            <svg class="wave wave-top" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,128L60,154.7C120,181,240,235,360,240C480,245,600,203,720,176C840,149,960,139,1080,149.3C1200,160,1320,192,1380,208L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>

            <!-- Contenido -->
            <h2>¡Únete a la <strong>primera membresía</strong> en Colombia para Emprendedores y
                <strong>Fundaciones</strong>!
            </h2>
            <h1>Juntos, ya impactamos a más de:</h1>
            <div class="contador"><span id="contador">0</span>K</div>
            <div class="subcontador">VISITANTES TOTALES</div>

            <!-- Onda inferior -->
            <svg class="wave wave-bottom" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,96L60,101.3C120,107,240,117,360,128C480,139,600,149,720,160C840,171,960,181,1080,186.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
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
        </section>
        <svg class="wave wave-top" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L60,154.7C120,181,240,235,360,240C480,245,600,203,720,176C840,149,960,139,1080,149.3C1200,160,1320,192,1380,208L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
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
