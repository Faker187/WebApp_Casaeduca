@extends('layouts.app')

@section('content')
<div class="container">
<!-- ====== Cursos ====== -->
<div class="row mt-5">
    <div class="col-md-8">
        <h1 class="display-4 color-ce4">
        <img class="card-img" src="{{ asset('public/img/SOMBRERO.png') }}" style="width: 120px;margin-bottom: 1rem;" alt="sombrero">
        <ins>&nbsp;&nbsp;Cursos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</ins>
        </h1>
    </div>
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('public/img/MANO_A.png') }}" style="width: 180px;margin-bottom: 1rem;" alt="camara">
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/primerobasico.png') }}" alt="primero basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">1°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">Se espera que los niños que comienzan primero básico conozcan el alfabeto y las
                        características básicas de las letras y las palabras. También suelen ser capaces de
                        reconocer y decir palabras que riman, lo que permite a nuestros nuevos lectores a
                        aprender palabras nuevas y leer libros sencillos. En cuanto a la escritura, se espera
                        que dibujen, escriban letras y palabras, escuchen a los demás y hablen en voz alta.
                        En este curso deberían aprender los números y lo que representan, como
                        relacionar los números en forma concreta y la suma y resta. En esta edad, es
                        cuando los niños aprenden a una mayor velocidad, ganan más confianza y hacen
                        amigos. Utilizan frases más complejas y con una pronunciación más clara, logran
                        verse de forma independiente. Escriben descripciones breves de historias.
                        Comprenden los mapas con ayuda de instrucciones y utilizan estrategias para
                        resolver problemas matemáticos. Sus habilidades motoras mejoran y comprenden
                        la acción de compartir.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/segundobasico.png') }}" alt="segundo basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">2°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">El aprendizaje en este curso debe continuar con la conexión de letras y sonidos
                        para armar palabras y escribir oraciones cortas. También deben leer historias y
                        poemas y aprender a discutir acerca de lo que han leído. Se espera que sepan
                        responder preguntas como: quién, qué, dónde, cuándo, por qué y cómo, acerca de
                        lo que lean. También se espera que conozcan los números enteros y su valor según
                        su posición. Deben dominar los conceptos de decenas y unidades, gráficos, tablas
                        y diagramas y resolución de problemas. En esta edad los niños y niñas recuperan la
                        serenidad y se abren a nuevas experiencias. El autocontrol va progresando y los
                        mecanismos reflexivos aún son rudimentarios. También empiezan a diferenciar
                        con nitidez la fantasía de la realidad. Al igual que en la etapa anterior, necesitan
                        mucha protección de los adultos, pero disfrutan la mayor libertad.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/tercerobasico.png') }}" alt="tercero basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">3°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">Se espera que los niños en esta etapa sepan cómo recopilar información sobre un
                        tema en particular, revisando diversas fuentes y como resumirla. También se
                        espera que sepan editar y revisar trabajos escritos. También, empiezan a ocupar el
                        conocimiento abstracto, trabajan con cifras de tres dígitos, aplicando el
                        conocimiento del número según su posición. Esto último es muy importante, ya que
                        permitirá sumar y restar, redondear cifras, multiplicar y dividir. Se les exigirá que
                        hagan cosas más complejas por su cuenta, que empiecen a usar habilidades para
                        organizarse y administrar su tiempo y motivarlos a pensar en materia crítica para
                        resolver problemas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/cuartobasico.jpg') }}" alt="cuarto basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">4°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">Desde decimales y fracciones más difíciles, hasta mediciones de ángulos, los
                        estudiantes de cuarto básico trabajarán conceptos complejos y que pueden dejar
                        fuera fácilmente los antiguos conocimientos de sus padres. Puede ayudar a su hijo
                        a cronometrar su velocidad sobre la bicicleta, preparar algunos pasteles y hacer
                        algunos cortes y cubos imaginarios y así practicar las fracciones equivalentes o
                        restar fracciones con denominadores diferentes. En esta etapa, ya no son tan
                        niños, empiezan a tener bello corporal y facial y esto provocará vulnerabilidades y
                        eventuales cuadros de ansiedad y de compromiso anímico. Están más temerosos y
                        pueden regresar fobias de la primera etapa de crecimiento. Hay una nueva
                        ¨poda¨de conexiones neuronales para enfrentar de mejor forma y éxito la
                        pubertad y sus desafíos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/quintobasico.png') }}" alt="quinto basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">5°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">Cuarto y Quinto Básico son años de cambios en muchos aspectos: sociales,
                        académicos y físicos. Usted podría notar que su hijo o hija pega un “estirón”, o
                        tiene una creciente necesidad de independencia y el deseo de ser aceptado por
                        sus pares. El desarrollo moral también ha progresado, por lo tanto, se pasa de la
                        obediencia impuesta a una internalización de los valores y de principios éticos
                        rectores de la conducta. También pueden ser dispersos, disminuyendo su
                        capacidad de concentración, sin tener ganas de nada, pueden ser silenciosos. La
                        aparición de la ansiedad, puede ser calmado comiendo carbohidratos como
                        chocolates y golosinas. Pueden buscar evadir la realidad a través de tecnologías
                        como los videojuegos, la televisión e internet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/sextobasico.png') }}" alt="sexto basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">6°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                    <p class="my-5" style="text-align:justify;">Los niños y niñas a esta edad son capaces de construir nuevas y propias ideas,
                        pensando en forma abstracta y participar activamente en la exploración de las
                        áreas de interés de todas las disciplinas. Empiezan a predecir las consecuencias de
                        sus acciones y planifican acorde a ello. Pueden discutir sobre un tema en cuestión,
                        desde diferentes perspectivas, desarrollan un sentido de la responsabilidad y
                        pueden ayudar en casa. Es muy importante que los Padres los ayuden en esta
                        etapa a poder clasificar la información que reciben del exterior, en importante y
                        no importante para el desarrollo de ellos, que habilidades y talentos poseen y los
                        aprendizajes que necesitan para aplicar en su futuro. Los Padres necesitan
                        paciencia y una mente abierta, no sólo para potenciar el aprendizaje de los hijos,
                        sino también porque los niños y niñas a estas edades necesitan encontrar el
                        equilibrio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/septimobasico.jpg') }}" alt="septimo basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">7°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">Llegamos al final de la primera etapa de vida de nuestros hijos, en uno de los
                        acontecimientos más importantes en su desarrollo, pues justamente durante este
                        periodo comienza la pubertad. Durante estos años pronto dejarán de ser niños
                        para convertirse en adolescentes, pasarán por grandes cambios físicos y
                        emocionales desde luego. Desde la continua exploración de su anatomía e
                        independencia, siendo una etapa en la que cambie por completo su vida. Los
                        Padres deberán ser comprensivos y recordar que también fueron adolecentes.
                        Nuestros hijos en esta etapa se encontrarán en un “duelo”, puesto que reconocen
                        una pérdida: se va la niñez y viene la adolescencia, que la respetan y la necesitan a
                        la vez. Están emotivos y sensibles.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img" src="{{ asset('public/img/octavobasico.jpg') }}" alt="octavo basico">
                    </div>
                    <div class="col-md-3">
                        <h2 class="h2-responsive color-ce4"><span class="font-weight-bold">8°</span> Básico</h2>
                        <h5 class="h5-responsive color-ce4">19.990</h5>
                        <button type="button" class="btn px-3 py-2 btn-outline-light color-ce-dark">Entrar</button>
                    </div>
                    <div class="col-md-6">
                        <p class="my-5" style="text-align:justify;">A esta edad, adquieren nuevas habilidades intelectuales y sociales. Incrementan la
                        impulsividad y disminuye el umbral del goce. Les atrae lo novedoso. Desaparece la
                        melancolía y los miedos por la pérdida de la niñez. Buscan sensaciones que
                        encuentran en los grupos de amigos. Los hombres reciben testosterona, la
                        hormona de la masculinidad que provoca un incremento del impulso agresivo,
                        siendo capaces de enfrentar a los adultos. Las Mujeres reciben progesterona, lo
                        que las vuelve más emotivas, volubles y explosivas. Muchas veces tanto los
                        hombres como las mujeres buscan facilitar la socialización en los cigarrillos y el
                        alcohol, siendo una etapa del desarrollo de especial atención y cuidado, a su vez,
                        tienen buena capacidad reflexiva que muchas veces choca con la impulsividad
                        propia de la edad, necesitando una gran fuerza de autocontrol, para esto es de
                        gran ayuda los Padres afectuosos y comprensivos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== /Cursos ====== -->
</div>
@endsection