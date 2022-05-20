<?php
echo "Hello" . "World";

// LARAVEL
// Getting Started On Linux

// If you're developing on Linux and Docker Compose is already installed, you can use a simple terminal command to create a new Laravel project. For example, to create a new Laravel application in a directory named "example-app", you may run the following command in your terminal:

// curl -s https://laravel.build/example-app | bash

// Of course, you can change "example-app" in this URL to anything you like - just make sure the application name only contains alpha-numeric characters, dashes, and underscores. The Laravel application's directory will be created within the directory you execute the command from.

// After the project has been created, you can navigate to the application directory and start Laravel Sail. Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration:

// cd example-app

// ./vendor/bin/sail up

// The first time you run the Sail up command, Sail's application containers will be built on your local machine. This could take several minutes. Don't worry, subsequent attempts to start Sail will be much faster.

// Once the application's Docker containers have been started, you can access the application in your web browser at: http://localhost.