<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            overflow:hidden;
            background:#050505;
            font-family:'Segoe UI', sans-serif;
            color:#d6d6d6;
        }

        /* CARRUSEL */

        #animeCarousel{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100vh;
            z-index:0;
        }

        .carousel-inner{
            height:100vh;
        }

        .carousel-item{
            height:100vh;
            background-size:cover;
            background-position:center;
        }

        .carousel-item img{
            width:100%;
            height:100vh;
            object-fit:cover;
            display:block;

            filter:
                brightness(45%)
                contrast(110%)
                saturate(60%)
                blur(1px);

            transform:scale(1.02);
        }

        /* CAPA OSCURA */

        .dark-overlay{
            position:fixed;
            inset:0;

            background:
                linear-gradient(
                    to bottom,
                    rgba(0,0,0,0.6),
                    rgba(0,0,0,0.3),
                    rgba(0,0,0,0.7)
                );

            z-index:1;
            pointer-events:none;
        }

        /* INFORMACIÓN */

        .info-box{
            position:absolute;
            top:8%;
            left:5%;

            z-index:5;

            max-width:650px;

            animation:fadeIn 2s ease;
        }

        .info-box h1{
            font-size:5rem;
            font-weight:200;
            letter-spacing:8px;

            color:#cfcfcf;

            text-shadow:
                0 0 10px rgba(255,255,255,0.05),
                0 0 30px rgba(255,255,255,0.04);
        }

        .line{
            width:120px;
            height:1px;

            background:#666;

            margin:25px 0;
        }

        .info-box p{
            color:#8a8a8a;

            line-height:1.9;
            font-size:1rem;

            max-width:500px;
        }

        /* BOTÓN */

        .dark-btn{
            margin-top:35px;

            padding:14px 32px;

            background:rgba(20,20,20,0.85);

            border:1px solid #2f2f2f;

            color:#bcbcbc;

            letter-spacing:2px;

            transition:0.4s ease;
        }

        .dark-btn:hover{
            background:#0f0f0f;

            border-color:#666;

            color:white;

            box-shadow:
                0 0 15px rgba(255,255,255,0.05);
        }

        /* NAVBAR */

        .navbar{
            position:fixed;
            width:100%;

            z-index:20;

            padding:25px 40px;

            background:
                linear-gradient(
                    to bottom,
                    rgba(0,0,0,0.75),
                    transparent
                );
        }

        .navbar h2{
            color:#727272;

            font-weight:300;

            letter-spacing:5px;

            font-size:1rem;
        }

        /* EFECTO VIGNETTE */

        .vignette{
            position:fixed;
            inset:0;

            z-index:3;

            box-shadow:
                inset 0 0 200px rgba(0,0,0,0.95);

            pointer-events:none;
        }

        /* ANIMACIÓN */

        @keyframes fadeIn{

            from{
                opacity:0;
                transform:translateY(20px);
            }

            to{
                opacity:1;
                transform:translateY(0px);
            }

        }

        /* TEXTO ABAJO */

        .bottom-text{
            position:absolute;

            bottom:40px;
            left:50%;

            transform:translateX(-50%);

            z-index:10;

            color:#4d4d4d;

            font-size:0.8rem;

            letter-spacing:4px;
        }

    </style>
</head>

<body>

    <!-- CARRUSEL -->

    <div id="animeCarousel"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel"
         data-bs-interval="5000">

        <div class="carousel-inner">

            <!-- IMAGEN 1 -->

            <div class="carousel-item active">
                <img src="{{ asset('imagenes/moe1.jpg') }}" alt="Moe 1">
            </div>

            <!-- IMAGEN 2 -->

            <div class="carousel-item">
                <img src="{{ asset('imagenes/moe2.jpg') }}" alt="Moe 2">
            </div>

            <!-- IMAGEN 3 -->

            <div class="carousel-item">
                <img src="{{ asset('imagenes/moe3.jpg') }}" alt="Moe 3">
            </div>

        </div>

    </div>

    <!-- NAVBAR -->

    <div class="navbar">
        <h2> MOE</h2>
    </div>

    <!-- INFORMACIÓN -->

    <div class="info-box">

        <h1>
            Nostalgic<br>
                Anime            
        </h1>

        <div class="line"></div>

        <p>
            Moe is a style and aesthetic within anime that aims to make characters look and act cute, adorable, or emotionally appealing.
             The word comes from the Japanese term 萌え and became popular among anime fans in the 1990s
        </p>

        <button class="dark-btn">
            ENTER
        </button>

    </div>

    <!-- OSCURECEDOR -->

    <div class="dark-overlay"></div>

    <!-- VIÑETA -->

    <div class="vignette"></div>

    <!-- TEXTO ABAJO -->

    <div class="bottom-text">
        SOMETHING FEELS OFF TONIGHT
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carouselElement = document.getElementById('animeCarousel');
        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: 5000,
            wrap: true
        });
    });
</script>
</html>