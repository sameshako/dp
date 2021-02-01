
<?php $__env->startSection('content'); ?>

<link type="text/css" rel="stylesheet" href="/css/font/cariere/font/flaticon.css">

<style>
    .careers-page {
        position: relative
    }

    .careers-page header {
        position: inherit
    }

    .careers-page header.smaller {
        position: fixed;
        box-shadow: none
    }

    .careers-page .header-banner {
        margin-top: 110px
    }

    @media (max-width:991.98px) {
        .careers-page .header-banner {
            margin-top: 0
        }
    }

    .careers-page .navbar-careers {
        position: -webkit-sticky;
        position: sticky;
        top: 55px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .1);
        padding: 0;
        z-index: 99;
        border-top: 1px solid rgba(0, 0, 0, .16)
    }

    .careers-page .navbar-careers .nav {
        display: flex;
        width: 100%;
        justify-content: space-between;
        background: #fff
    }

    .careers-page .navbar-careers .nav .nav-item {
        flex: 1;
        text-align: center;
        border-right: 1px solid #e1e1e1
    }

    .careers-page .navbar-careers .nav .nav-item .nav-link {
        font-size: 20px;
        line-height: 20px;
        font-weight: 700;
        padding: 20px;
        border-radius: 0
    }

    @media (max-width:991.98px) {
        .careers-page .navbar-careers .nav .nav-item .nav-link {
            font-size: 20px;
            line-height: 20px;
            padding: 20px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .navbar-careers .nav .nav-item .nav-link {
            font-size: 14px;
            line-height: 20px;
            padding: 12px
        }
    }

    .careers-page .navbar-careers .nav .nav-item .nav-link.active {
        background: #2339d6;
        color: #fff
    }

    .careers-page .navbar-careers .nav .nav-item .nav-link:hover {
        color: #2339d6
    }

    @media (hover:hover) {
        .careers-page .navbar-careers .nav .nav-item .nav-link:hover {
            background: #2339d6;
            color: #fff
        }
    }

    @media (-ms-high-contrast:none),
    screen and (-ms-high-contrast:active) {
        .careers-page .navbar-careers .nav .nav-item .nav-link:hover {
            background: #2339d6;
            color: #fff
        }
    }

    .careers-page .navbar-careers .nav .nav-item:last-of-type {
        border-right: 0
    }

    @media (max-width:767.98px) {
        .careers-page .navbar-careers .nav .nav-item {
            border-right: 0
        }
    }

    @media (max-width:767.98px) {
        .careers-page .navbar-careers .nav {
            flex-shrink: 0;
            min-width: 414px
        }
    }

    @media (max-width:991.98px) {
        .careers-page .navbar-careers {
            top: 0
        }
    }

    @media (max-width:767.98px) {
        .careers-page .navbar-careers {
            overflow-x: auto
        }
    }

    .careers-page .description {
        font-size: 16px
    }

    .careers-page .description p {
        margin-bottom: 30px
    }

    .careers-page .description p strong {
        color: #2339d6;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        .careers-page .description p {
            margin-bottom: 10px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .description {
            font-size: 14px
        }
    }

    .careers-page .info-boxes {
        margin: 0 -10px;
        display: flex;
        flex-wrap: wrap;
        padding-top: 10px
    }

    .careers-page .info-boxes .box-item {
        background-color: #f5f5f5;
        text-align: center;
        padding: 22px 10px;
        margin: 10px;
        flex: 1
    }

    .careers-page .info-boxes .box-item__title {
        color: #2339d6;
        font-size: 16px;
        line-height: 18px;
        font-weight: 700;
        display: block;
        margin-top: 15px
    }

    @media (max-width:767.98px) {
        .careers-page .info-boxes .box-item__title {
            font-size: 14px;
            line-height: 16px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .info-boxes .box-item__image {
            height: 50px;
            width: auto
        }
    }

    .careers-page .about-section {
        display: inline-block;
        width: 100%;
        position: relative
    }

    .careers-page .about-section .text-col {
        padding-top: 100px;
        padding-bottom: 80px;
        padding-right: 100px
    }

    .careers-page .about-section .text-col .title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 55px
    }

    @media (max-width:767.98px) {
        .careers-page .about-section .text-col .title {
            margin-bottom: 20px
        }
    }

    @media (max-width:991.98px) {
        .careers-page .about-section .text-col {
            padding-right: 15px;
            padding-top: 40px;
            padding-bottom: 40px
        }
    }

    .careers-page .about-section .image-col {
        background: url("https://images.unsplash.com/photo-1592928302636-c83cf1e1c887?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80") no-repeat;
        overflow-x: hidden;
        background-size: cover;
        background-position: 50%;
        max-width: 48%;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0
    }

    @media (max-width:991.98px) {
        .careers-page .about-section .image-col {
            display: none
        }
    }

    .careers-page .jobs-section {
        background: url(/images/careers/jobs-bg.png) no-repeat;
        background-size: cover;
        background-position: bottom;
        padding: 100px 0
    }

    .careers-page .jobs-section .accordion {
        margin-top: 50px
    }

    .careers-page .jobs-section .accordion .card {
        margin-bottom: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .16)
    }

    .careers-page .jobs-section .accordion .card .card-header {
        background: #fff;
        border-bottom: 0;
        padding: 0
    }

    .careers-page .jobs-section .accordion .card .card-header button {
        font-family: Lato, sans-serif;
        color: #2339d6;
        font-size: 30px;
        font-weight: 900;
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        padding: 9px 25px;
        border: none;
        border-radius: 0;
        text-align: left
    }

    .careers-page .jobs-section .accordion .card .card-header button:after {
        content: "";
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 10px solid #2339d6;
        margin-left: 45px;
        transform: rotate(180deg);
        position: absolute;
        right: 25px
    }

    .careers-page .jobs-section .accordion .card .card-header button .job-city {
        color: #ff590d;
        font-size: 25px;
        font-weight: 700;
        display: flex;
        align-items: center;
        margin: 0 70px 0 45px
    }

    @media (max-width:991.98px) {
        .careers-page .jobs-section .accordion .card .card-header button .job-city {
            font-size: 18px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-header button .job-city {
            width: 100%;
            justify-content: space-between;
            margin-left: 0;
            font-size: 15px
        }
    }

    .careers-page .jobs-section .accordion .card .card-header button:focus,
    .careers-page .jobs-section .accordion .card .card-header button:hover {
        text-decoration: none;
        box-shadow: none
    }

    .careers-page .jobs-section .accordion .card .card-header button.collapsed:after {
        transform: rotate(0)
    }

    @media (max-width:991.98px) {
        .careers-page .jobs-section .accordion .card .card-header button {
            font-size: 24px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-header button {
            flex-wrap: wrap;
            font-size: 18px;
            padding: 9px 15px
        }
    }

    .careers-page .jobs-section .accordion .card .card-body {
        padding: 0
    }

    .careers-page .jobs-section .accordion .card .card-body__header {
        background-color: #f5f5f5;
        color: #2339d6;
        font-size: 25px;
        font-weight: 900;
        padding: 12px 25px
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body__header {
            font-size: 16px;
            padding: 9px 15px
        }
    }

    .careers-page .jobs-section .accordion .card .card-body__description {
        padding: 30px 25px;
        font-size: 16px
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body__description {
            font-size: 14px;
            padding: 9px 15px
        }
    }

    .careers-page .jobs-section .accordion .card .card-body ul {
        padding: 30px 25px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 0
    }

    .careers-page .jobs-section .accordion .card .card-body ul li {
        font-size: 16px;
        margin-bottom: 5px;
        width: 33%;
        display: inline-block;
        padding: 0 22px;
        position: relative
    }

    .careers-page .jobs-section .accordion .card .card-body ul li:before {
        content: "";
        width: 11px;
        height: 11px;
        background-color: #ff590d;
        display: inline-block;
        position: absolute;
        top: 7px;
        left: 0
    }

    @media (max-width:991.98px) {
        .careers-page .jobs-section .accordion .card .card-body ul li {
            width: 50%
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body ul li {
            font-size: 14px;
            width: 100%;
            padding-right: 0
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body ul {
            padding: 9px 15px
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form {
        padding: 30px 25px;
        position: relative
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group {
        margin-bottom: 20px
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group label {
        font-size: 16px;
        font-weight: 700;
        color: #6a6a6a;
        margin-right: 13px;
        width: 132px
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group label span {
        color: #ff590d
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .form-group label {
            width: 100%
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group input,
    .careers-page .jobs-section .accordion .card .card-body form .form-group textarea {
        border: 1px solid #a1a1a1;
        background-color: #fff;
        width: calc(100% - 148px);
        padding: 5px 10px
    }

    @media (max-width:767.98px) {

        .careers-page .jobs-section .accordion .card .card-body form .form-group input,
        .careers-page .jobs-section .accordion .card .card-body form .form-group textarea {
            width: 100%
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea {
        vertical-align: top;
        height: 100%
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea label {
        width: 50px;
        vertical-align: top
    }

    @media (max-width:991.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea label {
            width: 132px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea label {
            width: 100%
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea textarea {
        width: calc(100% - 66px);
        height: calc(100% - 20px)
    }

    @media (max-width:991.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea textarea {
            width: calc(100% - 148px);
            height: 70px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .form-group-textarea textarea {
            width: 100%
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload {
        margin-bottom: 0
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload .file-button {
        color: #6a6a6a;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        box-shadow: 0 0 3px rgba(0, 0, 0, .16);
        background-color: #f5f5f5;
        margin: 0 20px;
        text-align: center;
        padding: 3px 40px;
        cursor: pointer
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload .file-button {
            margin: 0;
            display: block
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload input[type=file] {
        display: none
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload #file-name {
        color: #6a6a6a;
        font-size: 16px;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .submit-col .custom-file-upload #file-name {
            display: block;
            margin: 10px 0;
            text-align: center
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .submit-col {
            display: flex;
            flex-direction: column-reverse
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-button {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 3px 60px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .16)
    }

    .careers-page .jobs-section .accordion .card .card-body form .submit-button:hover {
        color: #ff590d
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form .submit-button {
            margin-bottom: 20px
        }
    }

    .careers-page .jobs-section .accordion .card .card-body form .error-message {
        color: red
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion .card .card-body form {
            padding: 9px 15px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section .accordion {
            margin-top: 30px
        }
    }

    @media (max-width:767.98px) {
        .careers-page .jobs-section {
            padding: 40px 0
        }
    }

    .careers-page .benefits-section {
        padding: 100px 0
    }

    .careers-page .benefits-section .title {
        margin-bottom: 45px
    }

    @media (max-width:767.98px) {
        .careers-page .benefits-section .title {
            margin-bottom: 20px
        }
    }

    .careers-page .benefits-section .info-boxes {
        margin: 50px -8px 0
    }

    .careers-page .benefits-section .info-boxes .box-item {
        box-shadow: 0 0 6px rgba(0, 0, 0, .16);
        margin: 8px;
        flex-basis: calc(25% - 16px)
    }

    @media (max-width:767.98px) {
        .careers-page .benefits-section .info-boxes .box-item {
            flex-basis: calc(50% - 16px)
        }
    }

    @media (max-width:767.98px) {
        .careers-page .benefits-section .info-boxes {
            margin-top: 0
        }

        .careers-page h2.first-h2 {
            margin-top: 100px;
        }

        .careers-page .benefits-section,
        .careers-page .about-section {
            padding-top: 0;
            padding-bottom: 0;
        }

        .careers-page .benefits-section .title {
            margin-bottom: 50px;
        }

        .cta-career .suna-specialist-title {
            text-align: left;
        }

        .cta-career .suna-specialist-buton {
            margin-left: 10%;
        }

    }

    .careers-page .col-md-6 h2 {
        margin-top: 50px;
    }

    i[class*="flaticon"]::before {
        font-size: 60px;
    }

    .sticky-header:not(.header-shrink) {
        background: #2339d6;
    }
</style>
<!-- <div class="sub-banner overview-bgi" style="display:block;background: rgba(0, 0, 0, 0.04) url(https://images.unsplash.com/photo-1592928302636-c83cf1e1c887?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80) center;">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="realone">Cariere</h1>
        </div>
    </div>
</div> -->
<div class="article__body careers-page">
    <div id="de-ce-noi" class="about-section">
        <div class="image-col">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-col">
                    <div class="title">
                        <h2 class="mb-0 first-h2">De ce noi?</h2>
                        <!-- <img alt="Oryon Imobiliare" src="https://images.unsplash.com/photo-1592928302636-c83cf1e1c887?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-none d-md-block"> -->
                    </div>
                    <div class="description">
                        <p>
                            <strong>Cu o istorie de 20 de ani pe piata imobiliara</strong>, Oryon Imobiliare s-a
                            dezvoltat
                            ca o companie din ce in ce mai vizibila pe piata de profil din Romania. Incepand din
                            anul
                            2000, de cand activam in acest domeniu, ne-am dezvoltat constant si <strong>am devenit
                                experti in
                                domeniul imobiliar</strong>.
                        </p>
                        <p>
                            Am oferit consultanta pentru <strong>peste 10.000 de tranzactii
                                imobiliare</strong>, functionand
                            ca un liant bazat pe perfectionare si profesionalism, adaptandu-ne constant la
                            modificarile
                            care apar pe piata imobiliara. Cu un portofoliu ce cuprinde peste 3500 de proprietati,
                            <strong>suntem un jucator important pe piata imobiliara din Romania</strong>, avand
                            sedii atat in Timisoara,
                            cat si in Bucuresti.
                        </p>
                        <p>
                            Echipa noastra cuprinde peste 100 de oameni <strong>dedicati, responsabili si
                                pasionati</strong>, iar fiecare
                            dintre noi are un scop bine stabilit si toate serviciile pe care le oferim <strong>sunt
                                orientate
                                catre satisfacerea cerintelor clientilor nostri</strong>.
                        </p>
                        <p>
                            Daca va doriti sa <strong>va alaturati unei echipe de experti in domeniul
                                imobiliar</strong> consultati
                            oportunitatile din cadrul companiei Oryon Imobiliare in sectiunea de “Joburi disponibile”.
                        </p>
                    </div>
                    <div class="info-boxes">
                        <div class="box-item">
                            <i class="flaticon-experience"></i>
                            <span class="box-item__title"> Peste 20 Ani Experienta</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-handshake"></i>
                            <span class="box-item__title"> Peste 10.000 de tranzactii incheiate</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-management"></i>
                            <span class="box-item__title"> Peste 3500 de proprietati in portofoliu</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="beneficii" class="benefits-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="title text-center">Beneficii</h2>
                    <div class="description">
                        <p>
                            In cadrul companiei Eugene Estate <strong>veti avea oportunitatea de a va dezvolta
                                profesional</strong>
                            intr-un mediu dinamic si modern, alaturi de colegi care imbina entuziasmul cu
                            profesionalismul si cu tehnicile de lucru avansate. De-a lungul anilor am depus eforturi
                            constante <strong>pentru a putea crea cele mai bune solutii pentru clientii
                                nostri</strong>, dar la fel
                            de mult ne-am concentrat si pe crearea unui mediu de lucru placut, <strong>pentru a le
                                oferi
                                cele mai bune conditii oamenilor dedicati muncii lor</strong> care au ales sa faca
                            parte din
                            <strong>echipa Eugene Estate</strong>.
                        </p>
                    </div>

                    <div class="info-boxes">
                        <div class="box-item">
                            <i class="flaticon-office-worker"></i>
                            <span class="box-item__title"> Colectiv tanar, energic</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-conversation"></i>
                            <span class="box-item__title"> Traininguri profesionale</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-goal"></i>
                            <img alt="" src="images/careers/professional.png" class="box-item__image">
                            <span class="box-item__title"> Stabilitate profesionala</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-daytime"></i>
                            <span class="box-item__title"> Program flexibil</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-income"></i>
                            <span class="box-item__title"> Venituri competitive in functie de performanta</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-web-design"></i>
                            <span class="box-item__title"> Spatiu de lucru modern si primitor</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-innovation"></i>
                            <span class="box-item__title"> Deschidere spre idei inovative</span>
                        </div>
                        <div class="box-item">
                            <i class="flaticon-improvement"></i>
                            <span class="box-item__title"> Dezvoltare personala</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container responsibilities">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title text-center">CANDIDATUL IDEAL</h2>
                <div class="description">
                    <p>
                        In cadrul companiei Eugene Estate <strong>veti avea oportunitatea de a va dezvolta
                            profesional</strong>
                        intr-un mediu dinamic si modern, alaturi de colegi care imbina entuziasmul cu
                        profesionalismul si cu tehnicile de lucru avansate. De-a lungul anilor am depus eforturi
                        constante <strong>pentru a putea crea cele mai bune solutii pentru clientii
                            nostri</strong>, dar la fel
                        de mult ne-am concentrat si pe crearea unui mediu de lucru placut, <strong>pentru a le
                            oferi
                            cele mai bune conditii oamenilor dedicati muncii lor</strong> care au ales sa faca
                        parte din
                        <strong>echipa Eugene Estate</strong>.
                    </p>
                </div>
                <div class="info-boxes no-flex row">
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-mind"></i>
                            <span class="box-item__title"> Persoana dinamică</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-conversation"></i>
                            <span class="box-item__title">Excelente abilitati de comunicare si putere de convingere</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-salesman"></i>
                            <span class="box-item__title"> Potential de dezvoltare sau experienta in vanzari</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-management"></i>
                            <span class="box-item__title"> Capacitate de rezolvare a problemelor de organizare, </span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-graduation-cap"></i>
                            <span class="box-item__title">Studii medii/superioare</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-positive"></i>
                            <span class="box-item__title"> Initiativa, atitudine pozitiva</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="title text-center">RESPONSABILITATI</h2>
                <div class="description">
                    <p>
                        In cadrul companiei Eugene Estate <strong>veti avea oportunitatea de a va dezvolta
                            profesional</strong>
                        intr-un mediu dinamic si modern, alaturi de colegi care imbina entuziasmul cu
                        profesionalismul si cu tehnicile de lucru avansate. De-a lungul anilor am depus eforturi
                        constante <strong>pentru a putea crea cele mai bune solutii pentru clientii
                            nostri</strong>, dar la fel
                        de mult ne-am concentrat si pe crearea unui mediu de lucru placut, <strong>pentru a le
                            oferi
                            cele mai bune conditii oamenilor dedicati muncii lor</strong> care au ales sa faca
                        parte din
                        <strong>echipa Eugene Estate</strong>.
                    </p>
                </div>
                <div class="info-boxes no-flex row">
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-database-storage"></i>
                            <span class="box-item__title">Gestionarea si dezvoltarea permanenta a bazei de date</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-target"></i>
                            <span class="box-item__title">Realizarea obiectivelor stabilite</span>
                        </div>
                    </div>
                    <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <i class="flaticon-support"></i>
                            <span class="box-item__title"> Promovarea ofertelor catre clientii agentiei</span>
                        </div>
                    </div>
                    <!-- <div class="box-item col-md-4">
                        <div class="box-item-inner">
                            <img alt="" src="images/careers/time.png" class="box-item__image">
                            <span class="box-item__title"> Capacitate de rezolvare a problemelor de organizare </span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="suna-specialist cta-career">
    <div class="ui text container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h3 class="suna-specialist-title">Daca esti interesat de a lucra cu o echipa performanta, trimite-ne CV-ul la</h3>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="mailto:contact@oryon-imobiliare.ro" class="suna-specialist-buton" role="button">contact@oryon-imobiliare.ro<i class="flaticon-call-center-agent"></i></a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\imobix\resources\views/frontend/cariere.blade.php ENDPATH**/ ?>