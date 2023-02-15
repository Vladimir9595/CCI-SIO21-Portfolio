<a name="readme-top"></a>

<div align="center">

  <img src="http://cdn.vladimir-portfolio.com/shared/images/Favicon_2.png" alt="logo" width="220" height="auto" />
  <h1>vladimir-portfolio.com</h1>

<h4>
    <a href="https://www.vladimir-portfolio.com" target="_blank">Go to the site</a>
  <span> · </span>
    <a href="https://github.com/Vladimir9595/CCI-SIO21-Portfolio/issues">Report a bug </a>
  <span> · </span>
    <a href="https://github.com/Vladimir9595/CCI-SIO21-Portfolio/issues">I have an idea</a>
  </h4>
</div>

<br />

# :notebook_with_decorative_cover: Summary

-   [About the project](#star2-about-the-project)
    -   [Techs](#space_invader-techs)
-   [Getting Started](#toolbox-getting-started)
    -   [Installation](#gear-setup)
    -   [Tests](#test_tube-tests)
-   [Authors](#wave-authors)

## :star2: About the project

I made this portfolio with Laravel 9 as a project during my BTS at the CCI Campus of Strasbourg. We learnt how to use the MVC (Model-View-Controllers) pattern. At the fist the project was built with HTML5 and CSS3. It is during the second year that I had to rewrite my portfolio using Laravel. Using the MVC pattern, Eloquent, Routes, and all features of this Framework. I setup a real CRUD (Create, Read, Update, Delete) with a database.

### :space_invader: Techs

[![Laravel](https://img.shields.io/badge/laravel%20-hotpink.svg?&style=for-the-badge&logo=laravel&logoColor=FF2D20&color=gray)]()
[![Php](https://img.shields.io/badge/php%20-%23323330.svg?&style=for-the-badge&logo=php&logoColor=8b9ed6&color=gray)]()
[![Javascript](https://img.shields.io/badge/javascript%20-%23323330.svg?&style=for-the-badge&logo=javascript&logoColor=fcdc00&color=gray)]()
[![Scss](https://img.shields.io/badge/scss%20-hotpink.svg?&style=for-the-badge&logo=SASS&logoColor=CC6699&color=gray)]()
[![Shell](https://img.shields.io/badge/bash%20-hotpink.svg?&style=for-the-badge&logo=gnu-bash&logoColor=4EAA25&color=gray)]()

## :toolbox: Getting Started

### :gear: Setup

**Clone the repository**

```
git clone https://github.com/Vladimir9595/CCI-SIO21-Portfolio.git Portfolio
```

**Go to the app folder**

```bash
cd Portfolio
```

**Launch the setup commands**

```bash
composer install # setup all dependencies from composer
npm install # setup all dependencies from npm
cp .env.example .env
nano .env  # put informations of your DB and mail;
npm run build # build the app
php artisan key:generate # generate the key into .env
php artisan optimize:clear # clear the cache
php artisan storage:link # create a symbolic link to the storage folder
```

**If you are in production**

```bash
composer update --no-dev
composer install
npm install
cp .env.prod .env
nano .env  # put informations of your DB and mail;
# Then you can follow the same steps from the setup commands
```

**To update DB**

```bash
php artisan migrate # run all migrations
php artisan migrate:fresh --seed # run all migrations and seeders
```

**To clear all properties of the cache**

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

**Warnings**

-   The default admin user is root:root (username: root, password: root, is_admin: true),

-   If you want to import default data, your database name need to be "main",

-   If you want to run all tests, be sure your .env is configured and the database too,

-   To create a new user, you can run php artisan make:user {username} {password} {?is_admin}

**Start the application**

```bash
# npm
npm run start
# pnpm
pnpm start
```

### :test_tube: Tests

```bash
# npm
npm run tests
# pnpm
pnpm tests
```

## :wave: Authors

-   **Vladimir Sacchetto** _alias_ [@VladimirSacchetto](https://github.com/Vladimir9595)

<!-- ## :page_with_curl: Liens utiles -->

<p align="right">(<a href="#readme-top">back to top</a>)</p>
