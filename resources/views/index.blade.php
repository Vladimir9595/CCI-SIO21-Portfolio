@extends('layouts.port')


@section('title')
Portfolio de Vladimir Sacchetto
@endsection

@section('titreH1')
    <strong>Mon portfolio</strong>
@endsection
@section('content')


    <nav id="menu">
      <ul>
        <li>
          <a href="#Exp" class="blue"><strong>Mon expérience professionnelle</strong></a>
        </li>
        <li>
          <a href="#Comp" class="blue"><strong>Mes compétences</strong></a>
        </li>
        <li>
          <a href="#Form" class="blue"><strong>Ma formation</strong></a>
        </li>
        <li>
          <a href="#Proj" class="blue"><strong>Mes projets passés</strong></a>
        </li>
        <li class="btn-link">
            <a href="{{route("articles")}}"><strong>Veille Technologique</strong></a>
        </li>
        <li class="btn-link">
            <a href="{{route("projects")}}"><strong>Projets</strong></a>
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
      <a href="#"><h2 id="Exp">Mon expérience professionnelles</h2></a>
      <p>
        D'origine italienne, j'ai rejoint la France en octobre 2014 après avoir obtenu l'équivalent du Baccalauréat dans mon pays natal.
      </p>
      <h3>octobre 2014 - juin 2015</h3>
      <p>
        J'ai commencé mon parcours professionnel par une expérience de bénévolat d'une année au sein d'une Fondation accueillant des jeunes en situation de handicap, dans le cadre d'un Service Civique français.<br />
        Durant cette période, j'ai proposé des activités sportives et de loisirs quotidiennes aux jeunes, en étant le support des éducateurs encadrants. Cette expérience m'a permis d'acquérir des compétences en encadrement et en communication, ainsi qu'un sens de l'engagement et de l'empathie envers les personnes en difficulté.
      </p>
      <h3>octobre 2015 - mai 2017</h3>
      <p>
        Après l'année de bénévolat, j'ai poursuivi mon parcours professionnel en signant un contrat en alternance avec la même Fondation pour obtenir mon diplôme d'Aide Médico-Psychologique (AMP).<br />
        J'ai eu la responsabilité d'un groupe de 8 jeunes adultes âgés de 16 à 21 ans la première année, puis d'un groupe de 10 jeunes filles âgées de 15 à 20 ans la deuxième année. Les deux groupes étaient composés de personnes présentant un handicap mental moyen et/ou profond.
      </p>
      <h3>mai 2017 - avril 2018</h3>
      <p>
        Après l'obtention de mon diplôme d'AMP, j'ai poursuivi mon activité à la Fondation en travaillant avec différents groupes, ce qui m'a permis de continuer à me former et à développer mes compétences.
      </p>

      <p>
        En avril 2018, j'ai intégré une nouvelle institution qui accueille des enfants et adolescents en difficulté sociale et familiale, pris en charge par le service de protection de l'enfance (SPE).
      </p>
      <h3>avril 2018 - octobre 2019</h3>
      <p>
        Je suis intervenu en tant que coordinateur santé au sein de cette institution, en charge du suivi médical des 80 jeunes accueillis. Mon rôle consistait à vérifier le dossier médical de chaque enfant, organiser les rendez-vous chez les spécialistes (dentiste, ophtalmologue, orthodontiste, orthophoniste, etc.) et les accompagner lors de ces visites. Mon objectif principal était d'assurer la meilleure prise en charge médicale possible pour les jeunes dont j'avais la charge.
      </p>
      <h3>octobre 2019 - août 2021</h3>
      <p>
        J'ai poursuivi mon parcours au sein de cette institution en occupant le poste d'éducateur au sein des groupes de vie. J'ai travaillé avec un groupe de 12 jeunes enfants âgés de 6 à 12 ans ainsi qu'avec un groupe de 12 adolescentes âgées de 12 à 18 ans. Mon rôle consistait à accompagner ces jeunes dans leur quotidien, à assurer leur sécurité, leur bien-être et leur épanouissement en leur proposant des activités éducatives et ludiques.
      </p>
      <h3>Septembre 2021 – Aout 2023</h3>
      <p>
        Je travaille actuellement en tant que téléconseiller au sein du service SAT Clients, avec un contrat d'alternance qui termine en août 2023, où je suis chargé d'assister les clients professionnels du groupe dans la gestion de leur banque à distance, notamment en cas de problèmes techniques liés à l'informatique.
      </p>
    </section>

    <section>
        <a href="#"><h2 id="Comp">Mes compétences</h2></a>
        <h3>Langues</h3>
        <p>
        Je suis de langue maternelle italienne et j'ai appris d'autres langues tout au long de mon parcours scolaire ainsi que grâce à mes expériences personnelles et professionnelles.<br />
        Je suis capable d'écrire et de parler couramment le français et l'anglais. Plus récemment, j'ai commencé à apprendre l'espagnol.
        </p>
        <h3>Outils Informatiques</h3>
        <p>
        Tout au long de mes formations et expériences personnelles, j'ai acquis une maîtrise de certains outils informatiques fréquemment utilisés. Je suis ainsi capable de les utiliser efficacement dans mon travail.
         </p>
        <p>
        Je suis titulaire de l'European Computer Driving Licence (ECDL), que j'ai obtenu pendant ma formation au lycée, et je suis également compétent dans l'utilisation de la suite Office 365.
        </p>
        <div class="imginf">
            <img src={{ asset('Images/Logos/ECDL_logo.png') }} alt="ECDL" class="imgcomp1" />
            <img src={{ asset('Images/Logos/Office_word.png') }} alt="Office" class="imgcomp2" />
        </div>
        <p>
        Avant de commencer ma formation, j'ai acquis des connaissances en langages de programmation de manière autodidacte car je suis passionné par la programmation web. Je maîtrise notamment HTML5, CSS3 et JavaScript, pour ne citer que quelques exemples.
        </p>
        <div class="imginf">
            <img src={{ asset('Images/Logos/Html_css_JS.png') }} alt="Html-css-JS" class="imgcomp3" />
        </div>
        <p>
        Grâce à mes cours en BTS, j'ai acquis une maîtrise de plusieurs langages de programmation, notamment PHP, PHPMyAdmin, MySQL, NodeJs et ViteJs.
        </p>
        <div class="imginf">
            <img src="{{ asset('Images/Logos/Elephpant_PHP.png') }}" alt="Logo_PHP" class="imgcomp4">
            <img src="{{ asset('Images/Logos/phpmyadmin_logo.png') }}" alt="Logo_PHPMyAdmin"class="imgcomp4">
            <img src="{{ asset('Images/Logos/MySQL_logo.png') }}" alt="Logo_MySQL"class="imgcomp4">
            <img src="{{ asset('Images/Logos/nodejs-logo.png') }}" alt="Logo_NodeJs"class="imgcomp4">
            <img src="{{ asset('Images/Logos/vitejs-logo.png') }}" alt="Logo_ViteJs"class="imgcomp4">
        </div>
        <p> Depuis le début de ma formation, j'ai eu l'opportunité de participer à plusieurs projets, dont certains étaient les miens, et de développer mes compétences dans l'utilisation de <a
                href="https://github.com/Vladimir9595"
                target="_blank"
                >GitHub.</a></p>
        <div class="imginf">
            <img src="{{ asset('Images/Logos/GitHub-Logo.png') }}" alt="GitHub-Logo"class="imgcomp3">
        </div>
        <p>Je suis compétent dans l'utilisation des frameworks Laravel, Tailwind et AlpineJS, comme en témoigne la réalisation de mon portfolio entièrement construit avec ces outils.</p>
        <div class="imginf">
            <img src="{{ asset('Images/Logos/Laravel_logo.png') }}" alt="Laravel-Logo"class="imgcomp4">
            <img src="{{ asset('Images/Logos/Tailwind_logo.png') }}" alt="Tailwind-Logo"class="imgcomp4">
            <img src="{{ asset('Images/Logos/AlpineJs-logo.png') }}" alt="AlpineJs-Logo"class="imgcomp4">
        </div>
    </section>

    <section>
      <a href="#"><h2 id="Form">Ma formation</h2></a>
      <p>
        Mon parcours scolaire s'est déroulé en Italie, où j'ai obtenu la "Maturità", l'équivalent du Baccalauréat français.
      </p>
      <h3>2009 - 2014</h3>
      <p>
        Je suis diplômé de l'Institut technique et commercial "ITES PITAGORA" situé à Tarente en Italie. <br/>
        En juillet 2014, j'ai obtenu mon diplôme d'État en tant que "Programmeur comptable et expert commercial".
      </p>
      <h3>2015 - 2017</h3>
      <p>
        Après avoir terminé mon année de bénévolat, j'ai préparé le diplôme d'aide médico-psychologique (AMP) en signant un contrat de professionnalisation. J'ai obtenu ce diplôme en mai 2017 via l'IFCAAD (Institut de formation au travail éducatif et social - Schiltigheim).
      </p>
      <h3>2020 - en cours</h3>
      <p>
        Je suis des tutoriels via la plateforme OpenClassrooms, où j'ai la possibilité de me former de manière autonome à divers langages de programmation et autres formations liées à l'informatique.
      </p>
      <h3>2021 - en cours</h3>
      <p>
        Actuellement, je suis en train de suivre un cursus en BTS informatique au sein du Campus de la Chambre de Commerce et d'Industrie (CCI Campus) de Strasbourg.
      </p>
    </section>

    <section>
      <a href="#"><h2 id="Proj">Mes projets passés</h2></a>
      <p>
        Au cours de mes expériences professionnelles précédentes dans les secteurs social et médico-social, j'ai réalisé plusieurs projets adaptés aux besoins des personnes prises en charge.
      </p>
      <p>
        Dans le domaine du handicap, j'ai animé des ateliers hebdomadaires de cuisine dans le but de promouvoir l'autonomie et l'apprentissage de compétences pratiques. <br />
        Ces ateliers ont permis aux jeunes de découvrir les différentes étapes de la préparation de plats et de gâteaux en suivant des recettes précises et des consignes adaptées à leurs besoins.<br />
        Grâce à cette expérience, j'ai appris à accompagner et à soutenir les enfants dans leurs réalisations en leur permettant de prendre confiance en eux.
      </p>
      <p>
        Au sein du foyer, j'ai planifié et animé des séances de sport individuelles et en groupe, dans le but de favoriser l'autonomie et la gestion des émotions chez les enfants ayant des difficultés de confiance en eux. <br/>
        Ces séances ont également contribué à développer un esprit d'équipe et de coopération parmi les enfants, qui étaient souvent confrontés à des conflits et à des difficultés à respecter les règles.
      </p>
      <p>
        Grâce à ces expériences, j'ai pu développer mon sens des responsabilités et acquérir des compétences professionnelles telles que le travail en équipe, la prise d'initiative, la planification de projets et une grande capacité d'adaptation.<br />
        Je suis convaincu que ces compétences pourront également être mises à profit dans le domaine de l'informatique et me permettre de m'épanouir dans mon futur métier.
      </p>
      <p>
        Je suis actuellement en train de construire mon avenir professionnel, et grâce à mon expérience et mes compétences, je me sens plus fort et déterminé que jamais. À court terme, mon objectif est d'obtenir mon BTS en informatique afin de pouvoir entrer dans le monde professionnel.<br />
        À plus long terme, j'ai pour ambition de continuer mes études et d'atteindre de nouveaux objectifs pour progresser dans ma carrière et acquérir de nouvelles compétences.
      </p>
    </section>
@endsection
