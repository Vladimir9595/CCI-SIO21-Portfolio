@extends('layouts.port')


@section('title')
Mentions légales
@endsection
    @section('content')
    <header>
      <a href="/"
        ><img src={{ asset('Images/logo-1.jpg') }} alt="logo" class="logo"
      /></a>
      <h1 id="menth1">Mentions légales</h1>
    </header>

    <nav id="menu2">
      <ul>
        <li>
          <a href="#Edit"><strong>Editeur et propriétaire du site</strong></a>
        </li>
        <li>
          <a href="#Heberg"><strong>Hébergement</strong></a>
        </li>
        <li>
          <a href="#Cond"><strong>Conditions d'utilisation</strong></a>
        </li>
        <li>
          <a href="#Propriete"><strong>Propriété intellectuelle</strong></a>
        </li>
        <li>
          <a href="#Lit"><strong>Litiges</strong></a>
        </li>
        <li>
          <a href="#Donnees"><strong>Données personnelles</strong></a>
        </li>
      </ul>
    </nav>

    <div id="mentions">
      <a href="#"><h2 id="Edit">Editeur et propriétaire du site</h2></a>
      <p>
            M. Vladimir SACCHETTO <br />
            Responsable éditorial : Vladimir SACCHETTO <br />
            Email : vladisac@hotmail.it<br />
            Site Web :
            <a href="https://www.vladimir-portfolio.com " target="_blank">www.vladimir-portfolio.com</a>
      </p>
      <a href="#"><h2 id="Heberg">Hébergement</h2></a>
      <p>
        Hébergeur : SAS OVH<br />
        2 rue Kellermann <br />
        BP 80157, 59100 Roubaix <br />
        Site Web : <a href="https://www.ovh.com" target="_blank">www.ovh.com</a><br />
        Téléphone : +33 (0) 899 701 761 (1.349 € TTC l’appel, et 0.337 € TTC/mn) <br />
        Fax : + 33 (0) 3 20 20 09 58
      </p>
      <a href="#"><h2 id="Cond">Conditions d'utilisation</h2></a>
      <p>
        Ce site
        <a href="https://www.vladimir-portfolio.com " target="_blank"
          >www.vladimir-portfolio.com</a
        >
        est proposé en différents langages web (HTML5 et CSS3). Pour un meilleur
        confort d'utilisation et un graphisme plus agréable, il est recommandé
        d’utiliser des navigateurs modernes comme Microsoft Edge, Safari,
        Firefox, Google Chrome, etc...<br />
        M. Vladimir SACCHETTO met en œuvre tous les moyens dont il dispose, pour
        assurer une information fiable et une mise à jour fiable de son site
        internet. Toutefois, des erreurs ou omissions peuvent survenir. M.
        Vladimir SACCHETTO n'est en aucun cas responsable de l'utilisation faite
        de ces informations, et de tout préjudice direct ou indirect pouvant en
        découler.
      </p>

      <a href="#"><h2 id="Propriete">Propriété intellectuelle</h2></a>
      <p>
        Tout le contenu du présent site incluant, les textes, animations, logos
        et icônes ainsi que leur mise en forme sont la propriété exclusive de M.
        Vladimir SACCHETTO. Toute reproduction, distribution, modification,
        adaptation, retransmission ou publication, même partielle, de ces
        différents éléments est strictement interdite sans l'accord exprès par
        écrit de M. Vladimir SACCHETTO. <br />Cette représentation ou
        reproduction, par quelque procédé que ce soit, constitue une contrefaçon
        sanctionnée par les articles L.335-2 et suivants du Code de la propriété
        intellectuelle. <br />
        Le non-respect de cette interdiction constitue une contrefaçon pouvant
        engager la responsabilité civile et pénale du contrefacteur. En outre,
        les propriétaires des contenus copiés pourraient intenter une action en
        justice à votre encontre.
      </p>
      <a href="#"><h2 id="Lit">Litiges</h2></a>
      <p>
        Les présentes conditions du site sont régies par les lois françaises et
        toute contestation ou litiges qui pourraient naître de l'interprétation
        ou de l'exécution de celles-ci seront de la compétence exclusive des
        tribunaux. La langue de référence, pour le règlement de contentieux
        éventuels, est le français.
      </p>
      <a href="#"><h2 id="Donnees">Données personnelles</h2></a>
      <p>
        De manière générale, vous n'êtes pas tenu de nous communiquer vos
        données personnelles lorsque vous visitez le site Internet
        <a href="https://www.vladimir-portfolio.com " target="_blank"
          >www.vladimir-portfolio.com</a
        >.<br />
        Vous pouvez refuser de fournir vos données personnelles. Dans ce cas,
        vous ne pourrez pas utiliser les services du site, notamment celui de
        solliciter des renseignements. <br />
        Nous pouvons collecter de manière automatique certaines informations
        vous concernant lors d'une simple navigation sur ce site Internet,
        notamment : des informations concernant l'utilisation du site, comme les
        zones que vous visitez et les services auxquels vous accédez, votre
        adresse IP, le type de votre navigateur, vos temps d'accès. <br />
        De telles informations sont utilisées exclusivement à des fins de
        statistiques internes. Les bases de données sont protégées par les
        dispositions de la loi du 1er juillet 1998 transposant la directive 96/9
        du 11 mars 1996 relative à la protection juridique des bases de données.
      </p>
    </div>

@endsection
