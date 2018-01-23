<?php get_header(); ?>

    <div class="jumbotron">
        <video class="landing-video" autoplay muted loop poster="/wp-content/themes/real/img/log-bg.jpg?v=09012016">
            <source src="/wp-content/themes/real/media/landing.mp4?v=08062016" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="landing-logo"><img class="img-responsive" src="/wp-content/themes/real/img/logo.png"></div>
                    <div class="landing-org-name"><h1>Частная школа &laquo;РЕАЛ&raquo;</h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <script src="/wp-content/themes/real/js/videoLightning.min.js"></script>
                    <div class="video-link-wrapper">
                        <i class="video-link fa fa-play-circle fa-5x text-center" data-video-id="v-184041539" aria-hidden="true"></i>
                    </div>
                    <script>
                        $(function() {
                            $(".video-link").jqueryVideoLightning({
                                autoplay: 1,
                                backdrop_color: "#000",
                                backdrop_opacity: 0.8,
                                glow: 100,
                                glow_color: "#000",
                                width: 640,
                                height: 360
                            });
                        });
                    </script>
                    <div class="landing-view-more text-center">
                        <a class="btn btn-primary btn-lg" href="#details" role="button">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".landing-video").on('loadeddata', function () {
            $(this).css({
                display: 'block'
            });
        });
    </script>
    <div id="details" style="height: 50px; width: 1px; margin-top: -50px"></div>
    <div class="landing-future">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h1>Почему родители выбирают именно нас?</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row landing-cards">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="landing-card">
                            <img src="/wp-content/themes/real/img/landing/img1.jpg" class="img-responsive img-circle">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li>Устраивает удобное расположение школы в центре города</li>
                            <li>Можно не беспокоиться о ребёнке с 8<sup>15</sup> до 18<sup>00</sup></li>
                            <li>Ребёнку лучше учиться в маленьком по наполняемости классе (5-10 человек)</li>
                            <li>Не приходится допоздна делать с ребёнком уроки</li>
                            <li>Приятно иметь &laquo;бонус-&laquo;РЕАЛ&raquo;: спортивные, музыкальные, танцевальные занятия, изобразительное искусство</li>
                            <li>Убеждены, что ребёнку необходимо здоровое детское окружение (отсутствие определённого нежелательного контингента), исключено влияние улицы</li>
                            <li>Нравятся комфортные бытовые условия</li>
                            <li>По душе доброжелательное отношение педагогов к детям</li>
                            <li>В массовой школе результат учёбы и личностный рост ребёнка будет иным</li>
                            <li>Не нужно беспокоиться, куда определить ребёнка на время каникул</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="details" style="height: 50px; width: 1px; margin-top: -50px"></div>
    <div class="landing-future">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h1>Как поступить в частную школу &laquo;РЕАЛ&raquo;?</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row landing-cards">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="landing-card">
                            <img src="/wp-content/themes/real/img/landing/img2.jpg" class="img-responsive img-circle">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Очень просто, без волокиты.</p>
                        <P>Прием заявлений от родителей проводится в течении всего учебного года.</p>
                        <p>Во-первых, это удобно.</p>
                        <p>Во-вторых, чтобы ребенок быстрее и легче адаптировался к новым условиям, наши специалисты выясняют его индивидуальные особенности.</p>
                        <p>В-третьих, на собеседовании мы учитываем пожелания родителей, их "социальный заказ".</p>
                        <b>Для зачисления в частную школу «РЕАЛ» необходимы документы:</b>
                        <ul>
                            <li>заявление родителей или особы, которая их заменяет;</li>
                            <li>копия свидетельства о рождении ребёнка;</li>
                            <li>медицинская карта ребёнка;</li>
                            <li>договор.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>