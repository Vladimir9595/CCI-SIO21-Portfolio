-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 01 oct. 2022 à 14:25
-- Version du serveur :  10.3.34-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `content`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Stargazer, l\'avion hypersonique qui volera à Mach 9', 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/b/8/5/b85d7922a6_50190465_avion-hypersonique-stargazer-venus-aerospace.jpg', 'L\'avenir de l\'aviation commerciale sera-t-elle hypersonique ? C\'est en tout cas ce qu\'espère Venus Aerospace, une entreprise texane qui vient de présenter pour la première fois son avion spatial hypersonique Stargazer. Selon le constructeur, l\'appareil sera capable d\'atteindre la vitesse de Mach 9 et de transporter des passagers n\'importe où dans le monde en une heure.', 'https://www.futura-sciences.com/tech/actualites/technologie-voici-stargazer-avion-hypersonique-volera-mach-9-98925/', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(2, 'Écologique et peu gourmand, cet avion révolutionnaire va passer à l\'hydrogène', 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/d/f/c/dfc191ed61_50168127_celera500l.jpg', 'La forme arrondie de la carlingue permet d\'optimiser le flux laminaire, c\'est-à-dire les couches d\'air venant glisser le long du fuselage. Ainsi, les couches d\'air se mélangent moins, ce qui vient atténuer la traînée et consommer moins d\'énergie. Doté d\'un tel atout, son efficacité est redoutable et il coûterait cinq à sept fois moins cher à exploiter qu\'un jet d\'affaires, avec une baisse de la consommation de 80 % en carburant.', 'https://www.futura-sciences.com/tech/actualites/technologie-ecologique-peu-gourmand-cet-avion-revolutionnaire-va-passer-hydrogene-83260/', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(3, 'Le Wi-Fi 7 devrait être aussi rapide que l\'Ethernet', 'https://www.meilleure-innovation.com/wp-content/uploads/2021/12/wi-fi-7-c-est-quoi.jpg\r\n', 'Le Wi-Fi 7 aussi rapide que l\'Ethernet ? C\'est ce que promet la prochaine génération de réseaux sans fil grand public : des débits extrêmement élevés -30 Gb/s — avec le même nombre d\'antennes que le Wi-Fi 6. Soit peu ou prou la même chose que ce que l\'on trouve sur l\'Ethernet.', 'https://www.20minutes.fr/high-tech/3224963-20220127-le-wi-fi-7-offrira-un-debit-maximal-de-30-gb-s', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(4, 'Comment les nouvelles technologies peuvent révolutionner la médecine', 'https://www.dreaminzzz.com/wp-content/uploads/2017/07/m-sant%C3%A9-2.jpg\r\n', 'Le numérique promet un « coup de frais » à la médecine moderne. Jean-Charles Samuelian (fondateur d\'Alan la société française d\'assurance santé indépendante en ligne) affirme que « la technologie peut nous aider à avoir des programmes personnalisés sur notre santé. Par exemple, si on prépare un marathon, on pourra partager les données de nos objets connectés avec notre équipe médicale qui nous préparera un programme de nutrition, d\'examens médicaux, etc. »', 'https://www.20minutes.fr/sante/3262367-20220330-numerique-sante-comment-nouvelles-technologies-peuvent-revolutionner-medecine', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(5, 'Un exosquelette adapté à la rééducation physique', 'https://www.inpi.fr/sites/default/files/inpi-inspiration-wandercraft-imgtexte.jpg', ' L\'exosquelette Atalante, développé par Wandercraft, va être introduit dans trois hôpitaux français. Il s\'agit d\'un robot qui enveloppe les jambes et reproduit le mouvement de la marche. De ce fait, le soignant accompagne le patient d\'une tout autre manière par rapport aux rééducations classiques.', 'https://www.20minutes.fr/high-tech/3209931-20220103-un-exosquelette-utilise-dans-certains-hopitaux-pour-la-reeducation-physique', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(6, 'Ameca, un robot à la gestuelle et au visage très humain', 'https://www.usine-digitale.fr/mediatheque/7/2/2/001015227_homePageUne/engineered-arts-ameca.png', 'La robotique ne cesse de réaliser des progrès. Engineered Arts, concepteur et fabricant britannique de robots humanoïdes, a dévoilé au public ses dernières avancées, sous la forme d’Ameca, un robot humanoïde aux  expressions faciales particulièrement crédibles.', 'https://www.20minutes.fr/high-tech/3191483-20211207-ameca-un-robot-aux-expressions-faciales-particulierement-realistes', '2022-06-25 22:00:00', '2022-06-26 22:00:00'),
(26, 'Droit à l’avortement : Google va supprimer les données sur les visites aux cliniques spécialisées', 'https://img.20mn.fr/lHjeCGX4SmKymdjPvhQyAik/1200x768_google-illustration', 'Après des semaines de silence sur ce sujet, Google a annoncé vendredi 1er juillet que les données de localisation des utilisateurs seraient automatiquement supprimées en cas de visite d’une clinique spécialisée dans les avortements.', 'https://www.ouest-france.fr/societe/famille/avortement/droit-a-l-avortement-google-va-supprimer-les-donnees-en-cas-de-visite-d-une-clinique-specialisee-ca21f308-fb7e-11ec-aa76-377ec44ae1a3', '2022-07-05 13:02:07', '2022-07-06 09:22:57'),
(28, 'La Cnil inflige à TotalEnergies une amende d’un million d’euros', 'https://mvistatic.com/photosmvi/2022/06/30/P31171612D5307677G.jpg', 'La Cnil, gendarme français des données personnelles, a sanctionné, ce jeudi 30 juin, TotalEnergies d’une amende d’un million d’euros, pour ne pas avoir respecté notamment les obligations en matière « de prospection commerciale et de droits des personnes ».', 'https://www.ouest-france.fr/economie/entreprises/total/la-cnil-inflige-a-totalenergies-une-amende-d-un-million-d-euros-bf47029c-f855-11ec-b533-b5b844d4994c', '2022-07-06 05:19:33', '2022-07-06 09:25:31'),
(29, 'À Rennes, une école forme les futurs créateurs de jeux vidéo', 'https://media.ouest-france.fr/v1/pictures/MjAyMjA2ZDRiNWViOTU3ZWUzZjE0YWJmMWM3ZmYyODU3ZGY3YzU?width=1260&height=708&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=8cd06a230a96b6ce3f2d5a9c840088dd1efb547a17c4f4c7cf4d28dc91dd8aea', 'L’ETPA est l’une des rares écoles en France à former ces professionnels du jeu vidéo. Installée à Rennes (Ille-et-Vilaine) depuis trois ans, elle travaille en lien étroit avec les recruteurs, qui viennent dénicher de futurs talents pour créer les succès de demain.', 'https://www.ouest-france.fr/bretagne/rennes-35000/a-rennes-une-ecole-forme-les-futurs-createurs-de-jeux-video-9bb60f20-f883-11ec-9ba9-7c7737bde7fe', '2022-07-06 05:24:33', '2022-07-06 09:27:10'),
(30, 'Firewall Pf_Sense - World\'s Most Trusted Open Source Firewall', 'https://static0.makeuseofimages.com/wordpress/wp-content/uploads/2021/01/pfsense-logo.jpg', 'Au cours de notre première année de BTS nous avons vu comment installer et configurer le Firewall Open Source Pf_Sense. Ainsi nous avons redirigé une machine virtuelle Windows Server vers la plage d\'adresses IP configurée dans le server Pf_Sense. Vous pouvez consulter la documentation qui va résumer ce travail personnel effectué lors du cours de Cybersécurité.', 'https://cdn.discordapp.com/attachments/980553803893968996/994209587353886822/SACCHETTO_Vladimir_TP_PF_Sense.pdf', '2022-07-06 05:26:54', '2022-07-06 10:32:41'),
(31, 'Etude de cas SODEXO - U3 Culture économique, juridique et managériale', 'https://media.lesechos.com/api/v1/images/view/5e567a5a8fe56f155a1b8168/1280x720/3738-1453911595-sipa-sipausa30124709-000053.jpg', 'L\'étude de cas porte sur des réponses aux questions que notre intervenante de CJEM nous a fourni lors du contrôle n°5. Le travail à effectuer se basait sur des articles concernant la société Sodexo (présents dans le document pdf), qui nous ont servi afin de répondre aux questions proposées. De manière générale nous avions pour but principal de définir les mots clés dans les questions avec les notions apprises tout au long de notre première année. Vous pouvez consulter le travail que j’ai effectué via le lien vers le pdf.', 'https://cdn.discordapp.com/attachments/980553803893968996/994214140811943957/Controle_5_etude_de_cas_SODEXO.pdf', '2022-07-06 05:28:02', '2022-07-06 10:32:56');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_24_180414_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vladimir', 'alss-sio-slam21-svl@ccicampus.fr', NULL, '$2y$10$xbI6eqEYCi9D2knlHIqqGulHKa1IADO3hjiFu5L3i.H11/b7yxyG6', NULL, '2022-06-29 13:51:44', '2022-06-29 13:56:56'),
(2, 'Michel', 'a@p.com', NULL, '$2y$10$3XyRzBOg4ZvjgxuCR07fouiZ6Nt7O8ttP9IHEWCNvCw.Iix8/T0V2', NULL, '2022-07-08 04:46:17', '2022-07-08 04:46:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
