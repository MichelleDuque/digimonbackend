# Duque_Neira_HW3 Backend

## Description

This repository contains the backend implementation for the Duque_Neira_HW3 project. It utilizes the Lumen framework to provide APIs for managing Digimon characters, evolutions, and trainers. The APIs are custom-built for this project.

## Frontend Repository

The frontend of the Duque_Neira_HW3 project can be found in the following repository:
[Duque_Neira_HW3 Frontend Repository](https://github.com/MichelleDuque/duque_neira_hw3)

## Features

- **Character Management**: Allows retrieval of Digimon characters with their associated trainers and evolutions.

## Routes

The following routes are available for managing Digimon characters:

- `GET /`: Returns the Lumen application version.
- `GET /characters`: Retrieve a list of all Digimon characters with their associated trainers and evolutions.
- `GET /characters/{id}`: Retrieve information about a specific Digimon character with its associated trainer and evolution.

## Installation

1. Clone this repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install project dependencies.
4. Configure your database connection in the `.env` file.
5. Run `php artisan migrate` to run database migrations.
6. Serve the application using `php -S localhost:8000 -t public`.

## Usage

1. Make HTTP requests to the provided routes to retrieve information about Digimon characters.
2. Ensure proper authentication and authorization mechanisms are implemented to secure the APIs.

## Contributing

1. Fork the repository.
2. Create your feature branch: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Submit a pull request.

## Credits

- **Michelle Duque (Michelle)**
- **Sandra Paola Neira (San)**




