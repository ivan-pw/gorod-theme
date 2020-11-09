<?php get_header();?>
<main>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <div class="">
                        <h1>
                            <?=get_the_title();?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-4">
                    <img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/img/pages/todo/todo1.jpg" />
                </div>
                <div class="panel panel-v2 col-12 col-md-8">
                    Для того, чтобы постоянно развивающаяся Москва стала городом для людей, необходимо перестроить систему городского управления и внедрить соучаствующие методы в процесс принятия решений.
                </div>
                <div class="panel panel-v2 col-12 col-md-8 offset-md-2">
                    Стать ближе к людям можно только сократив дистанцию между жителями города и органами, принимающими решения направленные на изменения в городе и улучшениям городской жизни.
                </div>
                <div class="panel panel-v2 col-12 col-md-8 offset-md-4">
                    Сделать город ближе к людям – означает заставить его лучше чувствовать потребности жителей, лучше реагировать на их запросы, создавать по настоящему уникальный и ценный город, отражающий самое главное богатство любых городов – таланты своих жителей. Только используя энергию и потенциал москвичей город сможет по-настоящему развиваться и расти над собой
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Как этого добиться?</h2>
                    <p>Сейчас участие жителей в обсуждении проектов развития города – имитация. На общественные слушаниях жители зачастую не могут высказать свою позицию, отсутствует механизм обязательного учёта пожеланий жителей. Мы предлагаем сформировать институты, которые позволят жителям реально влиять на принятие решений, участвовать в разработке проектов.</p>
                    <p>В том числе, включить в процесс художников, ученых, программистов и архитекторов – словом, всех талантливых москвичей, лишённых влияния на пути развития города. Такие институты должны быть приближены к «человеческому масштабу», избираемыми и их основной работой должно стать развитие районов совместно с жителями и для жителей. При этом такая система предполагает право сказать «нет» изменениям как сверху, так и снизу.</p>
                    <p>Мы предлагаем создать такие институты на базе существующего органа - предоставить расширенные полномочия муниципальным собраниям и депутатам. </p>
                    <p>Для участия горожан нужна инфраструктура. Важно создать в районах муниципальные центры, где жители смогут проводить досуг, формировать сообщества и решать возникающие проблемы совместно. </p>


                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-12 col-md-4">
                    <img class="float-right mb-5" src="<?php echo get_template_directory_uri(); ?>/img/pages/todo/todo2.jpg" />
                </div>
                <div class="col-12 col-md-6 offset-md-2">
                    <p>Если говорить конкретней, то речь идёт о территориальном развитии районов Москвы и благоустройстве, государственных сервисах в области образования, культуры, спорта и даже в здравоохранении. На том уровне, на котором это не навредит общей системе организации предоставления услуг в данных областях и может оптимально решаться именно на районном уровне.</p>

                    <p>Ниже представлена схема, которую мы воплотим в Москве и с помощью которой мы добьёмся решения этих важных задач.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Местные сообщества</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как есть сейчас?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list2/1.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Москва — мегаполис мирового уровня c огромным населением, что даёт городу большое преимущество, но делает управление им чрезвычайно сложным. Столь сложным механизмом невозможно управлять централизованно, смотря на город сверху вниз.</p>
                            <p>Современная структура Москвы предполагает именно такой принцип работы, считая централизацию более эффективной с технической точки зрения. Для этого исполнительная власть Москвы выстроила чёткую вертикальную структуру от мэра до чиновника управы. </p>
                            <p>В такой вертикали нет места мнению жителей, местному самоуправлению или Московской городской Думе — это внешние «раздражители», отвлекающие от работы. Даже вопрос уборки двора решается на уровне административного округа, поскольку именно префектуры являются учредителями районных «Жилищников».</p>
                            <p>Избираемые по системе многомандатных округов муниципальные депутаты, имеют лишь номинальные полномочия, не отвечающие масштабам тех задач, которые призвано решать местное самоуправление. Между тем, со средней численностью избирателей округа от 10 до 30 тысяч, это наиболее близкие к гражданам их представители. Люди, лучше других знающие местные проблемы, лишены возможности их решить.</p>
                            <p>Такая система порождает огромную дистанцию между горожанами и властью. Даже
                                работа управ, наиболее близких к «земле» элементов властной вертикали, гораздо больше опирается на мнение вышестоящих чиновников, чем на нужды населения. Физически находясь в одном месте, жители и местные власти находятся в двух разных мирах
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как в мире?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list2/2.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Мировая практика показывает, что сообщества жителей и активистов дают горожанам прекрасные возможности для участия в реальных преобразованиях городской жизни и пространства вокруг себя.</p>
                            <p>В Нью-Йорке существует огромное количество некоммерческих организаций, работающих на местном уровне и созданных жителями для жителей. Эти организации создаются для разных целей, например, для помощи соседям или для защиты коллективных интересов. Центр сообщества Кингсбридж-хайтс был основан самими жителями района в 1974 году и является важным центром помощи обездоленным и оказавшимся в трудной ситуации. Такая работа позволяет сделать жизнь всей округи лучше и безопасней. В Бруклине существует целый ряд низовых инициатив, направленных за защиту местных сообществ от джентрификации. Например, союз арендаторов Краун-Хайтс — объединение жилищных ассоциаций 33 домов, возникшее в 2013 году в ответ на незаконные завышения арендной платы и другие нарушения прав жителей. Тем же занята Бруклинская сеть против джентрификации, объединяющая арендаторов, домовладельцев и низовые организации. Лондонцы также регулярно объединяются для решения коллективных проблем своих
                                сообществ. Так, Группа действия Лафборо Джанкшен (Loughborough Junction Action Group, LJAG) создана волонтёрами, живущими и работающими в районе, с целью сделать район приятным для жизни. </p>
                            <p>Группа сумела привлечь в район более 3 миллионов фунтов стерлингов инвестиций и собрать сотни тысяч через фандрайзинг. Проекты LJAG многочисленны и разнообразны. Группа организовывает арт-проекты, уличные вечеринки, ремесленные мастерские, создала приложение дополненной реальности. Совместно с советом боро Ламбет, группа работает над созданием плана развития общественных территорий Лафборо. LJAG управляет собственной городской фермой, где волонтёры выращивают растения и собирают урожай. При ферме также работает вегетарианское кафе и проводятся мастер-классы.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как будет?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list2/3.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Чтобы город начал действовать во благо горожан, нужно дать им право определять пути решения локальных проблем. В этом заключается принцип субсидиарности — вопросы должны решаться на самом низком уровне, на котором они вообще могут быть решены. Минимальная необходимость Москвы — это работающее местное самоуправление, имеющее ресурсы и полномочия для управления в рамках района.</p>
                            <p>Для достижения этих целей, нужны работающие инструменты. Мы выделяем следующие приоритеты:</p>
                            <ul>
                                <li>Развитие советов муниципальных депутатов. Муниципальные депутаты должны стать реальным институтом реализации развития Москвы на местах.
                                <li>Создание в каждом районе Москвы муниципальных общественных центров. Они должны представлять собой территорию, направленную на развитие городских творческих активностей и социальных проектов — жители района голосуют за то, что им хотелось бы видеть в таком центре. Это могут быть образовательные и творческие проекты для детей и взрослых, художественные мастерские, офисы социальных проектов, общие залы собраний, фудкорты, магазины экологического питания, магазины ремесленных или творческих товаров, коворкинги, где жители города могут поработать и провести время.
                                <li>Создание районных проектных офисов исполнительной и законодательной власти. В них должны входить представители всех ведомств исполнительной власти и ресурсных организаций города, работающих на территории района, представители префектуры, управ, управляющих компаний и муниципальных депутатов, а также представители профессиональных сообществ. Результатом работы такого проектного офиса должны быть согласование реализуемых на территории района программ и проектов, и план мероприятий в районе, который впоследствии выносится на обсуждение и одобрение совета муниципальных депутатов района.
                                <li>Комиссия по соучаствующим практикам. Она должна вести реестр территорий, где жители выступили за соучаствующее проектирование. Если исполнительные власти или коммерческие предприятия хотят реализовать проект, связанный с благоустройством территории — им необходимо заручится поддержкой местных жителей, собрав подписи и инициативную группу.
                                <li>Комиссии по развитию низовых инициатив. Они создают реестры общественных проектов существующих в районах, помогают общественным проектам в коммуникации с исполнительной властью города, готовят предложения для проектного офиса, следят за деятельностью сообществ и общественных организаций и реализацией совместных с ними проектов, готовят предложения для голосования на совете муниципальных депутатов по софинансированию проектов.
                            </ul>
                            <p>С целью успешной работы по этим направлениям в аппарате муниципальных депутатов должны работать люди, которые могут помочь гражданам с оформлением смет, всей сопутствующей документации, помочь провести этапы соучаствующего проектирования, социологи и медиаторы.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Улицы современного города</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как есть сейчас?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list3/1.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Московские дороги разбиты на семь категорий: от пешеходных зон и районных проездов до магистральных улиц. И все они — вне зависимости от категории — реконструируются централизованно московскими властями и их подведомственными организациями.</p>
                            <p>Это создает ряд проблем:</p>
                            <ul>
                                <li>Не учитываются интересы живущих на улице горожан, в том числе живущих рядом с дорогами и транспортными артериями;
                                <li>Не учитываются интересы расположенного на улице бизнеса;
                                <li>Не просчитываются экономические эффекты от изменений улиц;
                                <li>Улицы унифицируются «ковровым благоустройством».
                            </ul>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как в мире?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list3/2.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>В мире много примеров вовлечения жителей в изменение городского пространства. Один из актуальных — польская модель «мастерских социального диалога».</p>
                            <p>Яркий пример использования модели — реконструкция Кавечинской улицы в Варшаве, прошедшая в 2011-2012 годах, которая предварялась соучаствующими методами в октябре-ноябре 2010. Перед реконструкцией были проведены:</p>
                            <ul>
                                <li>Предпроектное исследование территории, включавшее осмотр территории, уличный опрос и серию глубинных интервью с активистами, экспертами, представителями расположенного на улице бизнеса и НКО.
                                <li>Мастерские для жителей. Процесс отбора участвующих жителей регулировался так, чтобы не просто собрать как можно больше людей, а представить как можно больше социально-демографических групп. На этих мастерских жители и «пользователи» Кавечинской, в рамках модерируемой дискуссии, обсудили собственные нужды и требования к функционалу улицы.
                                <li>Мастерская для экспертов и организаций, расположенных на улице. В ней приняли участие специалисты по транспортному планированию, представители расположенных на улице университета и церкви, архитектор и городской планировщик.
                            </ul>
                            <p>Результаты обсуждений были представлены после воскресной службы, на площади перед базиликой. В дальнейшем именно они стали базой для проектных условий реконструкции улицы.</p>
                            <p>Важно, что модель мастерских социального диалога предусматривает обязательные постпроектные исследования. Её разработчики нацелены не только на выполнение проекта, но и на научную обоснованность своего подхода. Основные методы — это интервью и анализ местных газет и вебсайтов.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как будет?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list3/3.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Аналогичная варшавской модель соучастия в масштабах улицы может быть реализована и в Москве — она достаточно проста и универсальна. Учитывая масштабы Москвы, применение соучаствующих практик касается, прежде всего, улиц районного значения, где изменения не так сильно скажутся на транспортной связности города.</p>
                            <p>В масштабах улицы важно учитывать мнения не только её жителей, но и пользователей. Это касается расположенных на ней организаций и бизнеса, которые имеют собственные интересы и потребности. Но также это может касаться и регулярно проезжающих по улице автомобилистов. Так организаторы смогут создать проект, по-настоящему удовлетворяющий все стороны.</p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Дворы современного города</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как есть сейчас?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list4/1.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Двор дома – очень приватное пространство. Сейчас это оно отчуждено от жителей, не оказывающих влияния на то, как оно формируется. Московские подрядчики идут по самому простому пути унификации своей работы и штамповки готовых решений.</p>
                            <p>Такие дворы создаются без учёта физических и социальных особенностей местности. Двор рассматривается как место для автомобилей, маленьких детей и пожилых жильцов. Конечно, на деле групп гораздо больше, но они исключены не просто из процесса, а вовсе из поля зрения. Исчезло то разнообразие, которым когда-то наполняли московские дворы сами жители.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как в мире?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list4/2.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>В Барселоне коллективы жителей, объединённые в официально зарегистрированные организации, участвуют в обсуждении стратегий городских властей или представляют
                                собственные идеи. Объединение жителей наделяет эти идеи большим весом, чем частную инициативу одного горожанина.</p>
                            <p>Во многих странах считается важным создавать места для общения местных жителей. Это могут быть беседки с большими общими столами как в Хельсинки или целый отдельно стоящий небольшой дворовый "клуб" как в одном из районов Гамбурга, куда имеют доступ только местные жители. Благодаря санузлу, кухне и рабочим местам с интернетом, в таких помещениях можно очень по-разному проводить время: от общения с соседями до удалённой работы.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="panel panel-v3">
                        <div class="top">Как будет?</div>
                        <div class="image" style="background: url(<?php echo get_template_directory_uri(); ?>/img/pages/todo/list4/3.jpg) no-repeat 50% 50% / cover;"></div>
                        <div class="bottom">
                            <p>Московские дворы должны обустраиваться по инициативе жителей. Эта инициатива должна быть коллективной, поддержанной и другими жильцами дома или домов.</p>
                            <p>Собранные подписи представляются комиссии по соучаствующему проектированию совета муниципальных депутатов, после чего тот вносит инициативу в общий реестр района.</p>
                            <p>Это позволяет вывести идею на новый уровень взаимодействия, в частности, благодаря тому, что все стороны будут иметь дело с единым мнением, которое вырабатывается внутри коллектива. Кроме того, необходимость взаимодействия даст толчок к развитию местного сообщества и облегчит дальнейшее соучастие.</p>
                            <p>В Выксе (Нижегородская область) уже не первый год проходит Фестиваль "Арт-Овраг" – он познакомил жителей города с соучаствующим проектированием ещё до того, как стал известен в России сам этот термин. С 2014 года жители дворов объединяются, чтобы под кураторством профессиональных архитекторов менять среду обитания собственными руками.
                            </p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row links-block">
                <div class="col-12 col-md-4">
                    <a href="/howto" class="btn btn-default">Как делать?</a>
                </div>
                <div class="col-12 col-md-4 offset-md-4 d-flex align-items-center">
                    <a href="/wp-content/themes/gorod/pravo-na-gorod.pdf" class="download-link">Скачать pdf с полной версией доклада</a>
                    <a href="/wp-content/themes/gorod/pravo-na-gorod.pdf" class="btn btn-default btn-download"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <?php if (have_posts()): while (have_posts()): the_post();?>
                        <?php the_content();?>
                        <?php endwhile;endif;?>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php get_footer();