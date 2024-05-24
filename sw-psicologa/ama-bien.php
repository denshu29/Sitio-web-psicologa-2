<?php
session_start();
$usuarioLogueado = isset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/decidete-a-brillar.css">
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/header.css">
</head>
<body>
    <header>
        <h3>Centro Psicologico Puebla</h3>
        <h2 class="logo"><img src="img/logo_psicologo.png" alt="" style="width: 70px;"></h2>
        <input type="checkbox" id="nav_check" hidden>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="#card">Blogs</a>
            <a id="iniciar-sesion" style="display=none;" href="login.php">Login</a>
            <a id="cerrar-sesion" style="display=none;" href="php/cerrar_sesion_be.php">Cerrar sesión</a>
        </nav>
        <label for="nav_check" class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </label>

    </header>

    <div id="left-area">
        <article class="entry-content clearfix">
        <div class="swp_social_panel swp_horizontal_panel swp_flat_fresh  swp_default_full_color swp_individual_full_color swp_other_full_color scale-100  scale-" data-min-width="1100" data-float-color="#ffffff" data-float="none" data-float-mobile="none" data-transition="slide" data-post-id="3365"><div class="nc_tweetContainer swp_share_button swp_facebook" data-network="facebook"><a class="nc_tweet swp_share_link" rel="nofollow noreferrer noopener" target="_blank" href="https://www.facebook.com/share.php?u=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F" data-link="https://www.facebook.com/share.php?u=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F"><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_facebook_icon"></i><span class="swp_share">Compartir</span></span></span></span></a></div><div class="nc_tweetContainer swp_share_button swp_twitter" data-network="twitter"><a class="nc_tweet swp_share_link" rel="nofollow noreferrer noopener" target="_blank" href="https://twitter.com/intent/tweet?text=Ama+Bien&amp;url=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F&amp;via=SaludableMenteP" data-link="https://twitter.com/intent/tweet?text=Ama+Bien&amp;url=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F&amp;via=SaludableMenteP"><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_twitter_icon"></i><span class="swp_share">Twittear</span></span></span></span></a></div><div class="nc_tweetContainer swp_share_button swp_pinterest" data-network="pinterest"><a rel="nofollow noreferrer noopener" class="nc_tweet swp_share_link noPop" onclick="var e=document.createElement('script');
        e.setAttribute('type','text/javascript');
        e.setAttribute('charset','UTF-8');
        e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);
        document.body.appendChild(e);
        "><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_pinterest_icon"></i><span class="swp_share">Pin</span></span></span></span></a></div></div><p style="text-align: justify;"><a href="https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_.jpg" rel="attachment wp-att-3530"><img fetchpriority="high" decoding="async" class="aligncenter size-full wp-image-3530" src="https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_.jpg" alt="amate-ama-bien-II_" width="1700" height="925" srcset="https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_.jpg 1700w, https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_-300x163.jpg 300w, https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_-768x418.jpg 768w, https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II_-1024x557.jpg 1024w" sizes="(max-width: 1700px) 100vw, 1700px"></a></p>
        <p style="text-align: justify;">A menudo escucho en mi consulta:&nbsp;<em>«yo sé que me quiere mucho</em>&nbsp;<em>pero me siento mal en mi relación de pareja». Y al revés:</em>&nbsp;<em>«yo lo/la quiero mucho pero no puedo más, no puedo vivir así». </em>Y un largo etcétera de frases del mismo estilo que manifiestan el mismo error.&nbsp;En general, la gente <em>«se quiere»</em>&nbsp;o <em>«se quiere mucho»</em> a su manera y, reconozcámoslo, muchas veces no es una manera saludable, e incluso, muchas veces no es <em>amor</em> lo que se profesan. Es por esto que mi consejo de este artículo es:&nbsp;<strong><em>¡Ama Bien!&nbsp;</em></strong></p>
        <p style="text-align: justify;"><strong style="line-height: 1.5;"><em>Y es que la cuestión clave no es cuánto te quieren sino cómo te quieren. No es cuánto quieres sino cómo quieres. No es&nbsp;la cantidad&nbsp;sino la calidad el factor clave para valorar si el vínculo amoroso es o no saludable. Lo que de verdad importa es la manera en la que se ama. &nbsp;</em></strong></p>
        <blockquote>
        <div id="toc_container" class="no_bullets"><p class="toc_title">Contenidos</p><ul class="toc_list"><li><a href="#Amor_pautas_para_reconocerlo_nbsp">Amor: pautas para reconocerlo_&nbsp;</a></li><li><a href="#Indicadores_de_una_relacion_saludable">Indicadores de una relación saludable_</a></li><li><a href="#Amor_tipos_de_amor_y_AMOR_con_mayusculas_nbsp">Amor: tipos de amor y AMOR con mayúsculas_&nbsp;</a></li><li><a href="#Ama_Bien_relaciones_saludables">Ama Bien: relaciones saludables_</a></li><li><a href="#Indicadores_de_una_relacion_toxica">Indicadores de una relación tóxica_</a></li><li><a href="#Pautas_para_que_ames_bien">Pautas para que ames bien_</a></li></ul></div>
        <h2><span id="Amor_pautas_para_reconocerlo_nbsp"><strong>Amor: pautas para reconocerlo_&nbsp;</strong></span></h2>
        </blockquote>
        <p style="text-align: justify;"><strong style="line-height: 1.5;"><em>Mariano Yela</em>,</strong><span style="line-height: 1.5;"> catedrático de psicología de la Universidad Complutense de Madrid, dijo:&nbsp;</span><span style="color: #008080;"><em>“el amor no es necesario para vivir pero sí para que merezca la pena vivir”.</em></span><span style="line-height: 1.5;">&nbsp;Y si has vivido o vives amando sabes el enorme sentido que aporta <em>amar</em> a la vida. </span></p>
        <p style="text-align: justify;"><span style="line-height: 1.5;">Puedes hacerte algunas preguntas para sondear tu relación de pareja:&nbsp;</span></p>
        <p style="text-align: justify;"><span style="color: #008080;"><em><span style="line-height: 1.5;">¿Te llena su forma de quererte? ¿Te aporta bienestar? ¿Te estimula a vivir o te amarga la existencia? ¿Te aporta un buen vivir psicológico o malvives? Y al revés, ¿sientes que enriqueces a tu pareja? ¿es más feliz estando contigo? ¿facilitas y apoyas que sea auténtico/a y que sea fiel a sus principios y valores? ¿mejoras su vida?&nbsp;</span></em></span></p>
        <p style="text-align: justify;">Veamos cómo identificar una relación saludable:</p>
        <blockquote>
        <h2><span id="Indicadores_de_una_relacion_saludable"><strong>Indicadores de una relación saludable_</strong></span></h2>
        </blockquote>
        <p style="text-align: justify;">Un <em><strong>indicador clave</strong></em>&nbsp;para saber si nos encontramos ante una relación saludable es <em><strong>la huella positiva que nos deja.&nbsp;Tener sentimientos de plenitud, de satisfacción, de no querer cambiarte por nadie, de crecimiento personal, de apoyo, de ganas de volver a compartir momentos con la persona amada, son factores que indican una buena salud en la relación.</strong></em></p>
        <p style="text-align: justify;"><strong><span style="color: #008080;"><em>Adams y Jones</em></span> </strong>afirman que las relaciones estables se basan en 5 factores:</p>
        <ol>
        <li><strong>Amor profundo.</strong></li>
        <li><strong>Satisfacción mutua.</strong></li>
        <li><strong>Falta de interés por otra posible pareja.</strong></li>
        <li><strong>Miedo a la ruptura.</strong></li>
        <li><strong>Sentimiento de obligación moral con la pareja.&nbsp;</strong></li>
        </ol>
        <p style="text-align: justify;"><strong style="line-height: 1.5;"><em><a href="https://es.wikipedia.org/wiki/Robert_J._Sternberg" target="_blank" rel="noopener noreferrer">Robert J. Sternberg</a></em>,</strong><span style="line-height: 1.5;"> con su </span><em style="line-height: 1.5;">Teoría Triangular del Amor</em><span style="line-height: 1.5;">&nbsp;citó </span><strong style="line-height: 1.5;">3 componentes clave para hablar de amor: <em>intimidad, pasión y compromiso.&nbsp;</em></strong></p>
        <ul style="text-align: justify;">
        <li><strong>Intimidad o cariño:&nbsp;</strong>es un deseo de acercamiento, de comunicación, y de fuerte interés por el otro, por buscar su felicidad y encontrar la propia en su compañía. Implica buscarse y procurar compartir tiempo en común. Proporciona apoyo emocional mutuo mediante la entrega de uno mismo. Existen 2 diferencias entre el <em>afecto amoroso</em> y el <em>amistoso</em>: por una parte, el amistoso requiere reciprocidad mientras que uno puede amar a quien le ignora; por otra parte, si desaparece el aprecio moral se acaba con la amistad pero no con el afecto amoroso pues podemos amar y/o estar enamorados de un canalla, por ejemplo. Son formas de expresarlo: <span style="color: #008080;"><em>apoyo, consuelo, admiración, tiempo en común, perdón.&nbsp;</em></span></li>
        </ul>
        <ul style="text-align: justify;">
        <li><strong>Pasión:&nbsp;</strong>es el anhelo profundo e imperioso del otro, la evidencia mental y sentimental de que el otro es la persona que más importa. Es la expresión de una emoción psicofísica cuya traducción principal es el sexo. Se desarrolla deprisa y desaparece pronto, aunque algunas pasiones son duraderas.&nbsp;Con la atracción sexual se mezclan otros sentimientos tan especiales como la admiración profunda, la necesidad de protección, sensación del ser querido o enorme gratitud. Son formas de expresarlo: <span style="color: #008080;"><em>besos, abrazos, caricias, palabras de amor, practicar sexo, cuidar la imagen para el otro.&nbsp;</em></span></li>
        </ul>
        <ul>
        <li>
        <div class="separator" style="text-align: justify;"><strong>Compromiso:&nbsp;</strong>es la decisión de amar a otra persona, de comprometerte en mantener y cuidar ese amor. &nbsp;Implica constancia y lealtad.&nbsp;Suele situarse en tercer orden cronológico (primero nos enamoramos, luego nos queremos y finalmente nos comprometemos). Aunque ésta no es la única secuencia posible suele ser la más frecuente. Son formas de expresarlo: <span style="color: #008080;"><em>fidelidad, compartir posesiones, superar crisis, casarse o establecer una relación de pareja estable.&nbsp;</em></span></div>
        </li>
        </ul>
        <p>Según <strong><span style="color: #008080;"><em>Sternberg</em></span></strong>, la probabilidad de que una relación se mantenga es mayor en la medida que estén presentes dos componentes o los tres.</p>
        <blockquote>
        <h2><span id="Amor_tipos_de_amor_y_AMOR_con_mayusculas_nbsp"><strong>Amor: tipos de amor y AMOR con mayúsculas_&nbsp;</strong></span></h2>
        </blockquote>
        <p><span style="text-align: justify; line-height: 1.5;">Por la combinación de los 3 componentes, podemos encontrar </span><strong style="text-align: justify; line-height: 1.5;">7 tipos de amor,</strong>&nbsp;según <em><strong><span style="color: #008080;">Sternberg</span></strong></em>:<strong style="text-align: justify; line-height: 1.5;">&nbsp;</strong></p>
        <ol>
        <li style="text-align: justify;"><strong>Cariño. </strong>Hay <em><strong>intimidad</strong>&nbsp;</em>sin pasión ni compromiso. Es el cariño íntimo que caracteriza las verdaderas amistades en las que se siente un vínculo y una cercanía con la otra persona pero no pasión física ni compromiso a largo plazo.</li>
        <p>	</p><li style="text-align: justify;"><strong>Encaprichamiento. </strong>Hay <em><strong>pasión</strong></em>&nbsp;sin cariño o intimidad ni compromiso. Es lo que comúnmente se siente como <em>“amor a primera vista”.</em></li>
        <p>	</p><li style="text-align: justify;"><strong>Amor vacío. </strong>Existe&nbsp;<strong><em>compromiso</em></strong>&nbsp;pero la intimidad y la pasión no existen. Hay sensación de respeto y reciprocidad. En los matrimonios arreglados, las relaciones suelen comenzar con un amor vacío.</li>
        <p>	</p><li style="text-align: justify;"><strong>Amor Romántico. </strong>Hay <em><strong>pasión e intimidad</strong></em> pero no compromiso. Las parejas románticas están unidas emocionalmente (como en el caso del <i>cariño</i>) y físicamente, mediante la pasión, pero no en el compromiso de estar juntos. Por ejemplo, un amor de verano o relaciones de muy corta duración.</li>
        <p>	</p><li style="text-align: justify;"><strong>Amor Fatuo o Loco. </strong>Es la combinación de <em><strong>pasión y compromiso</strong></em>. Falta la intimidad, pues no se muestran abiertos y no sienten un vínculo o conexión fuertes.</li>
        <p>	</p><li style="text-align: justify;"><strong>Amor Sociable. </strong>Este tipo de relación incluye las características de <em><strong>intimidad </strong>y<strong> compromiso</strong></em>. La característica que falta es la pasión, que podría haber desaparecido con el paso de los años de relación.</li>
        <p>	</p><li style="text-align: justify;"><strong style="line-height: 1.5;">Amor Consumado. </strong><span style="line-height: 1.5;">Es el tipo de relación que todas las parejas buscan, pues combina</span><span style="line-height: 1.5;">&nbsp;<em><strong>intimidad</strong>, <strong>pasión</strong> y <strong>compromiso</strong></em></span><span style="line-height: 1.5;"><em>.</em> Según Sternberg, lo difícil no es alcanzar esta etapa sino permanecer en ella, pues con el paso de los años es habitual que las parejas pierdan la pasión que una vez sintieron</span><strong style="line-height: 1.5;">.</strong><span style="line-height: 1.5;">&nbsp;</span></li>
        </ol>
        <p>Quizá pueda ayudarte a manejar con más claridad estos conceptos la siguiente infografía y cuadro resumen:</p>
        <p><a href="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor.png" rel="attachment wp-att-3264"><img decoding="async" class="lazy aligncenter size-full wp-image-3264" src="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor.png" sizes="(max-width: 629px) 100vw, 629px" alt="Triangulo Amor" width="629" height="479" data-lazy-type="image" data-lazy-src="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor.png" data-lazy-srcset="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor-300x228.png 300w, https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor.png 629w" srcset="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor.png 629w, https://saludablementepsicologia.es/wp-content/uploads/2016/03/Triangulo-Amor-300x228.png 300w"></a></p>
        <p><a href="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor.jpg" rel="attachment wp-att-3265"><img loading="lazy" decoding="async" class="lazy aligncenter size-full wp-image-3265" src="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor.jpg" sizes="(max-width: 611px) 100vw, 611px" alt="Siete formas de amor" width="611" height="258" data-lazy-type="image" data-lazy-src="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor.jpg" data-lazy-srcset="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor-300x127.jpg 300w, https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor.jpg 611w" srcset="https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor.jpg 611w, https://saludablementepsicologia.es/wp-content/uploads/2016/03/Siete-formas-de-amor-300x127.jpg 300w"></a></p>
        <blockquote>
        <h2><span id="Ama_Bien_relaciones_saludables"><span style="color: #333333;"><strong>Ama Bien: relaciones saludables_</strong></span></span></h2>
        </blockquote>
        <p style="text-align: justify;">No obstante, no fanaticemos: si no tienes pareja, esta circunstancia no te incapacita para ser feliz, como <em><a href="http://sonjalyubomirsky.com/" target="_blank" rel="noopener noreferrer">Sonja Lyubomirsky</a></em> recoge en su libro <span style="color: #008080;"><em>“Los mitos de la felicidad”.</em> </span>El amor de pareja aporta un gran bienestar cuando la relación es saludable pero puede ser motivo de un gran sufrimiento cuando no lo es. Tenlo en cuenta y detecta si tienes una relación tóxica para pedir ayuda.</p>
        <p>Pero ¿cómo podemos reconocer si una relación es o no saludable? Revisemos algunos indicadores de una relación tóxica.</p>
        <blockquote>
        <h2><span id="Indicadores_de_una_relacion_toxica"><strong>Indicadores de una relación tóxica_</strong></span></h2>
        </blockquote>
        <p>Durante la relación te está pasando que:</p>
        <ul>
        <li>Has dejado de crecer psicológicamente, te empobreces, sientes que se detiene tu crecimiento personal.</li>
        <li>Pierdes la energía, las ganas de ser tú, la ilusión, la alegría.</li>
        <li>Sufres cambios importantes en tu peso, sueño, alimentación, en definitiva, tu salud.</li>
        <li>Te sientes culpable con frecuencia, mal en tu relación contigo.</li>
        <li>La opinión de tu pareja es excesivamente poderosa para ti: su opinión te <em>hunde</em> o te hace <em>megafeliz.&nbsp;</em></li>
        <li>Te trata mal y/o lo justificas: humillaciones, malos modos, gritos, burlas, insultos, etc.</li>
        <li>Te controla: quiere tus claves de móvil, redes sociales, dónde vas y con quién, etc.</li>
        <li>Te sientes mal contigo: dudas más de tus ideas y opiniones, de tu forma de ser, de cómo vistes, etc.</li>
        <li>Te aferras a tu pareja como una tabla de salvación para no quedarte solo/a, para tener planes los fines de semana, por miedo o pereza a volver a empezar, etc.</li>
        <li>Hay celos injustificados y tienes que explicar y demostrar con frecuencia que no hay base real para desconfiar.</li>
        <li>Tu opinión, ideas, sentimientos, son tonterías o son menos “dignas” que las suyas.</li>
        <li>Tienes que demostrar que «lo/la quieres» con frecuencia, haciendo lo que te pide, como prueba de tu amor, pues de lo contrario, se enfada.</li>
        <li>Tienes que callarte y ceder con frecuencia para que esté bien.</li>
        <li>Pierdes la capacidad de decidir por ti mismo/a.</li>
        <li>Pierdes el deseo sexual o no te sientes bien durante el sexo.</li>
        <li>Tienes que pedirle permiso para hacer cualquier cosa.</li>
        </ul>
        <p style="text-align: justify;">Además de comprender y reflexionar sobre estos aspectos, cuestión clave es que pases a la acción y los pongas en práctica.</p>
        <p style="text-align: justify;"><span style="color: #008080;"><strong><em>¡Ama bien! ¡Ama saludablemente!</em> </strong></span>Aquí te propongo algunas pautas para que lo consigas.</p>
        <blockquote>
        <h2><span id="Pautas_para_que_ames_bien"><span style="color: #008080;"><strong>Pautas para que ames bien_</strong></span></span></h2>
        </blockquote>
        <ol>
        <li style="text-align: justify;"><strong>Ámate. </strong>Es imprescindible que te ames para que puedas amar saludablemente, amar bien. Revisa varias pautas para conseguirlo en&nbsp;<strong><span style="color: #008080;"><em><a href="https://saludablementepsicologia.es/2016/02/15/amate-ama-bien/" target="_blank" rel="noopener noreferrer">«Ámate, Ama Bien».</a></em></span></strong></li>
        <p>	</p><li style="text-align: justify;"><strong>Cultiva el vínculo. </strong>Dedica un tiempo diario a cultivar la relación. Haz planes con tu pareja, comparte momentos, haz actividades que os gusten, expresa lo que te gusta del otro, interésate por sus cosas de manera auténtica.</li>
        <p>	</p><li style="text-align: justify;"><strong>Aporta valor.&nbsp;</strong>Toma un rol activo, un liderazgo compartido en el que unas veces sea tu pareja quien aporte contenidos (ideas, anécdotas, actividades, metas, etc.) y otras seas tú. Nutre la relación, nutre a tu pareja siendo un ser completo y lo más realizado posible.</li>
        <p>	</p><li style="text-align: justify;"><strong>Respeta.</strong>&nbsp;Respeta al/la otro/a y dale su sitio. Cierra etapas anteriores, ordena tu espacio físico pero sobretodo ordena el espacio psicológico al que entra a formar parte tu pareja dejando claro su lugar en tu vida, en tu cabeza, y en tu comportamiento diario.</li>
        <p>	</p><li style="text-align: justify;"><strong>Crea confianza.</strong> La confianza se construye. La intimidad psicológica es una excelente oportunidad de enriquecimiento mutuo. Saber y sentir que el otro está ahí para compartir alegrías y tristezas sin temor a ser, mostrar al otro que puede confiar, que el vínculo entre los dos es seguro y que pase lo que pase cualquier aspecto puede ser hablado y abordado de manera conjunta con madurez y complicidad.</li>
        <p>	</p><li style="text-align: justify;"><strong>Comunícate asertivamente.</strong> La comunicación es una pieza clave en las relaciones de pareja. Expresa tus sentimientos, pensamientos y anhelos de manera asertiva, es decir, respetando los derechos del otro sin olvidarte de los tuyos.</li>
        <p>	</p><li style="text-align: justify;"><strong>Acepta las diferencias.</strong> Acepta al otro como un ser diferente de ti, con sus ideas, sus gustos, motivaciones e intereses. Negocia las diferencias, aplaza temas cuando sea necesario pero abórdalos y toma decisiones en pareja.</li>
        <p>	</p><li style="text-align: justify;"><strong>Ten valores compartidos.</strong> <span style="line-height: 1.5;">Podéis ser diferentes, todo el mundo lo es de hecho, pero es clave compartir una visión de la vida común, unos valores compatibles, que ambos podáis ver un futuro común.</span></li>
        <p>	</p><li style="text-align: justify;"><strong style="line-height: 1.5;">Comparte.</strong><span style="line-height: 1.5;"> Siente el placer de compartir tiempo juntos, de hacer planes, actividades, viajes y todo tipo de cosas.&nbsp;</span></li>
        <p>	</p><li style="text-align: justify;"><strong>Cuida.</strong> Cuida al otro. Cuida la relación. Cuídate tú. A veces puedes preguntarte ante determinadas situaciones: ¿Es adecuado para mí? ¿Es adecuado para él/ella? ¿Es adecuado para nuestra relación? Si es adecuado en todos los sentidos, entonces adelante, hazlo. Si no lo es en alguna o varias de estas cuestiones reflexiona o ponlo en común con tu pareja y buscad opciones juntos.</li>
        <p>	</p><li style="text-align: justify;"><strong>Perdona. </strong>Si estás dispuesto/a a amar con mayúsculas tendrás que estar dispuesto/a a perdonar y a seguir adelante sin resentimientos, sin rencor, aceptando que amar es un proceso continuo de aprendizaje, de búsqueda del equilibrio, de resiliencia e incluso de crecimiento personal.</li>
        <p>	</p><li style="text-align: justify;"><strong>No lo/la necesites, prefiérelo/la.</strong> No quieras con apego. Trata de no necesitar a tu pareja, de seguir siendo autónoma/a, un ser humano pleno, consciente, rico. Desde tu individualidad y tu libertad, sé capaz de hacer y ser de forma independiente pero disfruta de tu pareja al preferir vivir y/o compartir tu vida con ella.</li>
        </ol>
        <p>Te dejo este video que me ha gustado porque pone el acento en diferenciar lo que es estar enamorado de amar verdaderamente. ¡Amemos bien!</p>
        <p>&nbsp;</p>
        <p><em>Referencias de interés:</em></p>
        <p>Varela Morales, P. (2009). El amor. En G. Fernández-Abascal, E. (coord.), <em>Emociones positivas</em><i>&nbsp;</i>(pp. 149-166). Madrid: Pirámide.</p>
        <p>Jara, P. (2011). <em>Adicción al pensamiento.</em>&nbsp;<em>La sutil dependencia que a todos nos atrapa.</em>&nbsp;Badajoz: @becedario.</p>
        <p>Lyubomirsky, S. (2014). <em>Los mitos de la felicidad.&nbsp;</em>Barcelona: Urano.</p>
        <p>&nbsp;
        </p><div class="et-single-video">
        <div class="social4i"></div>
        <p>&nbsp;</p>
        </div>
        <iframe width="838" height="471" src="https://www.youtube.com/embed/jJQsjIhzNLs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        <div class="swp_social_panel swp_horizontal_panel swp_flat_fresh  swp_default_full_color swp_individual_full_color swp_other_full_color scale-100  scale-" data-min-width="1100" data-float-color="#ffffff" data-float="none" data-float-mobile="none" data-transition="slide" data-post-id="3365"><div class="nc_tweetContainer swp_share_button swp_facebook" data-network="facebook"><a class="nc_tweet swp_share_link" rel="nofollow noreferrer noopener" target="_blank" href="https://www.facebook.com/share.php?u=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F" data-link="https://www.facebook.com/share.php?u=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F"><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_facebook_icon"></i><span class="swp_share">Compartir</span></span></span></span></a></div><div class="nc_tweetContainer swp_share_button swp_twitter" data-network="twitter"><a class="nc_tweet swp_share_link" rel="nofollow noreferrer noopener" target="_blank" href="https://twitter.com/intent/tweet?text=Ama+Bien&amp;url=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F&amp;via=SaludableMenteP" data-link="https://twitter.com/intent/tweet?text=Ama+Bien&amp;url=https%3A%2F%2Fsaludablementepsicologia.es%2Fpsicologa-murcia%2Fama-bien%2F&amp;via=SaludableMenteP"><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_twitter_icon"></i><span class="swp_share">Twittear</span></span></span></span></a></div><div class="nc_tweetContainer swp_share_button swp_pinterest" data-network="pinterest"><a rel="nofollow noreferrer noopener" class="nc_tweet swp_share_link noPop" onclick="var e=document.createElement('script');
        e.setAttribute('type','text/javascript');
        e.setAttribute('charset','UTF-8');
        e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);
        document.body.appendChild(e);
        "><span class="swp_count swp_hide"><span class="iconFiller"><span class="spaceManWilly"><i class="sw swp_pinterest_icon"></i><span class="swp_share">Pin</span></span></span></span></a></div></div><div class="swp-content-locator"></div>					</article> <!-- .entry -->
        <div id="et-box-author">
        <div id="et-bio-author">
        <div class="author-avatar">
        <img alt="" src="https://secure.gravatar.com/avatar/83500160547e0327de04bd84f0d7cb42?s=60&amp;d=identicon&amp;r=g" srcset="https://secure.gravatar.com/avatar/83500160547e0327de04bd84f0d7cb42?s=120&amp;d=identicon&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60" decoding="async">							</div> <!-- end #author-avatar -->
        <p id="author-info">
        <strong>Autor:</strong> <a href="https://www.saludablementepsicologia.es" title="Visitar el sitio de Violeta Perán" rel="author external">Violeta Perán</a>							</p> <!-- end #author-info -->
        <p>Apasionada de la Psicología e interesada en el funcionamiento óptimo de las personas y de las organizaciones, cuento con más de 20 años de experiencia como psicóloga, psicoterapeuta y docente, en distintos ámbitos públicos y privados, promoviendo la salud mental y el bienestar psicológico en el día a día. Soy Psicóloga Sanitaria, Psicoterapeuta Europeo en Clínica y Salud, Especialista en Psicología Positiva Aplicada, Miembro de la SEPP, Sociedad Española de Psicología Positiva, también de la Asociación EMDR España y de la Asociación EMDR Europa. Soy Psicoterapeuta EMDR especializada en Trauma Emocional y en la Reparación del Apego Seguro. Profesora oficial del MSC, Mindful Self-Compassion (Programa Oficial de entrenamiento en Mindfulness y Autocompasión). He creado SaludableMente, con consulta presencial en Murcia capital y online. Y estoy colegiada en el COP, Colegio Oficial de Psicología de la Región de Murcia.</p>
        </div>
        <div id="et-post-share" class="clearfix">
        <span>Comparte este post en</span>
        <ul id="et-share-icons">
        <li class="google-share"><a href="https://plus.google.com/share?url=https://saludablementepsicologia.es/psicologa-murcia/ama-bien/" target="_blank" class="et-share-button et-share-google">Google</a></li><li class="facebook-share"><a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=https://saludablementepsicologia.es/psicologa-murcia/ama-bien/&amp;p[images][0]=https://saludablementepsicologia.es/wp-content/uploads/2017/02/amate-ama-bien-II-0-destacada_-150x150.jpg&amp;p[title]=Ama Bien" target="_blank" class="et-share-button et-share-facebook">Facebook</a></li><li class="twitter-share"><a href="https://twitter.com/intent/tweet?url=https://saludablementepsicologia.es/psicologa-murcia/ama-bien/&amp;text=Ama Bien" target="_blank" class="et-share-button et-share-twitter">Twitter</a></li>							</ul>
        </div>
        </div>			
        </div>
    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(function () {
      var usuarioLogueado = <?php echo json_encode($usuarioLogueado); ?>;
      if(!usuarioLogueado){
        $('#cerrar-sesion').hide();
        $('#iniciar-sesion').show();
      } else {
        $('#cerrar-sesion').show();
        $('#iniciar-sesion').hide();
      }
  });
</script>
</html>