@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stylePort.css') }}">
@endsection
@section('title')
Portfolio de Vladimir Sacchetto
@endsection
    @section('content')
    <header>
      <img src={{ asset('Images/logo-1.jpg') }} alt="logo" class="logo" />
      <img src={{ asset('Images/photoID1.png') }} alt="Photo de Vladimir" class="imgID"/>
      <h1><strong>Mon portfolio</strong></h1>
      <h2 class="signature"><strong>Vladimir Sacchetto</strong></h2>
    </header>

    <nav id="menu">
      <ul>
        <li>
          <a href="#Exp"><strong>Mon expérience professionnelle</strong></a>
        </li>
        <li>
          <a href="#Comp"><strong>Mes compétences</strong></a>
        </li>
        <li>
          <a href="#Form"><strong>Ma formation</strong></a>
        </li>
        <li>
          <a href="#Proj"><strong>Mes projets</strong></a>
        </li>
        <li id="veilletech">
            <a href="/veille-technologique"><strong>Veille Technologique</strong></a>
        </li>
      </ul>
    </nav>

    <section id="moi">
      <h2>A propos de moi</h2>
      <iframe
        id="prop"
        width="560"
        height="315"
        src="https://www.youtube.com/embed/IP2mieOvsu8"
        title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </section>

    <section>
      <h2 id="Exp">Mon expérience professionnelles</h2>
      <p>
        D'origine italienne, je suis arrivé en France en octobre 2014 après
        avoir obtenu l'équivalent du Baccalauréat.
      </p>
      <h3>octobre 2014 - juin 2015</h3>
      <p>
        Mon parcours professionnel a démarré par un an de bénévolat au sein
        d’une Fondation accueillant des jeunes en situation de handicap, cela
        dans le cadre d'un Service Civique français.<br />
        Durant cette période, j’ai proposé des activités quotidiennes de sport
        et de loisirs auprès des jeunes. J'étais le support d'éducateurs
        encadrants.
      </p>
      <h3>octobre 2015 - mai 2017</h3>
      <p>
        Lorsque l’année de bénévolat s'est terminée, j’ai signé un nouveau
        contrat en alternance, auprès de la même fondation, et ce, afin
        d’obtenir le diplôme d'Aide Médico-Psychologique (AMP).<br />
        J’avais en charge un groupe de 8 jeunes adultes âgés de 16 à 21 ans la
        première année et un groupe de 10 jeunes filles âgées de 15 à 20 ans la
        deuxième année. Les deux groupes présentaient un handicap mental moyen
        et/ou profond.
      </p>
      <h3>mai 2017 - avril 2018</h3>
      <p>
        Après avoir obtenu le diplôme d'AMP, j’ai continué à exercer à la
        Fondation dans différents groupes, me formant ainsi toujours plus.
      </p>

      <p>
        En avril 2018, j'ai rejoint une nouvelle institution accueillant des
        enfants et des adolescents avec des difficultés sociales et familiales,
        et pris en charge par le service de protection à l’enfance.
      </p>
      <h3>avril 2018 - octobre 2019</h3>
      <p>
        J'ai exercé en tant que coordinateur santé au sein de cette Institution.
        J'avais en charge le suivi médical des 80 jeunes accueillis. L'objectif
        principal était de vérifier le dossier médical de chaque enfant, en
        préparant les rendez-vous et en les accompagnant chez des spécialistes
        (dentiste, ophtalmologue, orthodontiste, orthophoniste, etc.).
      </p>
      <h3>octobre 2019 - août 2021</h3>
      <p>
        J'ai ensuite occupé un poste d'éducateur et ai rejoint les groupes de
        vie au sein de cette même institution. Le groupe était constitué de 12
        jeunes enfants âgés de 6 à 12 ans et d'un groupe de 12 filles
        adolescentes, âgées de 12 à 18 ans.
      </p>
      <h3>Septembre 2021 – en cours</h3>
      <p>
        Je suis téléconseiller au sein du service SAT Clients. J'assiste les
        clients professionnels du groupe dans la gestion de leur banque à
        distance, lorsqu'il s'agit de problèmes techniques liés à
        l’informatique.
      </p>
    </section>

    <section>
      <h2 id="Comp">Mes compétences</h2>
      <h3>Langues</h3>
      <p>
        L’italien est ma langue maternelle.<br />
        J'ai appris d'autres langues grâce à mon parcours scolaire, ainsi que
        mes expériences personnelles et professionnelles. J'écris et je parle
        couramment le français et l'anglais. Je me suis récemment mis à
        l'apprentissage de l'espagnol.
      </p>
      <h3>Outils Informatiques</h3>
      <p>
        Je maîtrise certains outils informatiques utilisés tout au long de mes
        formations et expériences personnelles.
      </p>
      <p>
        e suis en outre titulaire de l'European computer driving licence (ECDL)
        obtenu lors de ma formation au lycée. Je maîtrise également le Pack
        Office 365.
      </p>
      <div id="imginf">
        <img src={{ asset('Images/ECDL_logo.png') }} alt="ECDL" class="imgcomp1" />
        <img src={{ asset('Images/Office_word.png') }} alt="Office" class="imgcomp2" />
      </div>
      <p>
        Je me suis formé moi-même aux langages de programmation, car je suis
        passionné par la programmation web. A titre d'exemple, je maîtrise
        HTML5, CSS3 et JavaScript.
      </p>
      <img src={{ asset('Images/Html_css_JS.png') }} alt="Html-css-JS" class="imgcomp3" />
    </section>

    <section>
      <h2 id="Form">Ma formation</h2>
      <p>
        J'ai effectué ma scolarité en Italie jusqu'à l'obtention de la
        "Maturità", l'équivalent du Baccalauréat français.
      </p>
      <h3>2009 - 2014</h3>
      <p>
        J'ai étudié à l'Institut technique et commercial "ITES PITAGORA" à
        Tarente en Italie. En juillet 2014, j'ai obtenu le diplôme d'Etat
        intitulé "Programmeur comptable et expert commercial".
      </p>
      <h3>2015 - 2017</h3>
      <p>
        Après avoir terminé mon année de bénévolat, j'ai préparé le diplôme
        d'aide médico-psychologique (AMP) via un contrat de
        professionnalisation. Je l'ai obtenu en mai 2017, via l'IFCAAD (Institut
        de formation au travail éducatif et social - Schiltigheim).
      </p>
      <h3>2018 - en cours</h3>
      <p>
        Depuis le portail informatique OpenClassrooms, je me forme en toute
        autonomie, aux différents langages de programmation et à d'autres
        formations en informatique.
      </p>
      <h3>2019 - en cours</h3>
      <p>
        Je prépare actuellement un BTS en informatique au sein du Campus de la
        Chambre de Commerce et d'Industrie (CCI Campus) à Strasbourg.
      </p>
    </section>

    <section>
      <h2 id="Proj">Mes projets</h2>
      <p>
        Lors de mes précédentes expériences professionnelles dans les domaines
        social et médico-social, j'ai réalisé différents projets répondant aux
        besoins du public accueilli.
      </p>
      <p>
        Dans le milieu du handicap, j'organisais des ateliers hebdomadaires de
        cuisine, afin de répondre à certains besoins tels que l’autonomie et
        l'apprentissage de règles simples. Le but était que les jeunes
        apprennent à utiliser les ustensiles de cuisine et à préparer des plats
        et des gâteaux en suivant des recettes et des consignes précises. <br />
        Ainsi, les enfants pouvaient être maîtres de leur réalisation et suivis
        tout au long du processus, ce qui pouvait être rassurant pour certains.
      </p>
      <p>
        Dans le foyer, j’organisais des séances de sport individuelles et en
        équipe afin de travailler à la fois l’autonomie et la gestion des
        émotions pour les enfants qui manquaient de confiance en eux. Cela avait
        pour but de développer un esprit de partage et d’équipe chez les enfants
        qui se retrouvaient souvent dans des situations de conflit et de refus
        des règles.
      </p>
      <p>
        Toutes ces expériences m'ont permis de développer mon sens des
        responsabilités ainsi que certaines compétences professionnelles telles
        que l'esprit d'équipe, la prise d'initiative, la mise en place de
        projets ou encore une bonne capacité d'adaptation.<br />
        Ces compétences que j'ai pu acquérir ces dernières années pourront
        également m'être utiles dans le domaine de l'informatique.
      </p>
      <p>
        Aujourd’hui, je construis mon avenir et avec ce bagage d’expériences, je
        me sens plus fort et déterminé. Mon projet à court terme est d’obtenir
        mon BTS afin de rentrer dans le monde professionnel de l’informatique.

        <br />
        Mon projet à plus long terme est de continuer dans les études et
        d'atteindre toujours de nouveaux objectifs.
      </p>
    </section>

    <footer>
      <h4><strong>CONTACT ME</strong></h4>
      <div class="logos">
        <a href="https://www.facebook.com/vladimir.sacchetto/" target="_blank"
          ><i class="fab fa-facebook"></i
        ></a>
        <a href="https://www.instagram.com/vlado5991/" target="_blank"
          ><i class="fab fa-instagram"></i
        ></a>
        <a
          href="https://www.linkedin.com/in/vladimir-sacchetto-16642b116/?locale=fr_FR"
          target="_blank"
          ><i class="fab fa-linkedin"></i
        ></a>
        <i class="fab fa-facebook-messenger"></i>
      </div>
      <div id="copyright">
        <span>
          © Vladimir Sacchetto; 2022 |
          <a href="/mentions-légales">Mentions Légales -</a>
          <a href="/veille-technologique">Veille Technologique</a>

        </span>
      </div>
    </footer>
@endsection
