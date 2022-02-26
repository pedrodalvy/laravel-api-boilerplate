# Laravel Api Boilerplate
This is a Laravel Boilerplate to create a RESTful API.

## Getting Started
Just click on [`Use this template`](https://github.com/pedrodalvy/laravel-api-boilerplate/generate) GitHub button to create a new project based on this template.

## Checklist
When you use this template, try follow the checklist to update your info properly

- [ ] Create `.env` file: `cp .env.example .env`
- [ ] Update `.env` file with your project and docker info
- [ ] Start docker: `./vendor/bin/sail up`
- [ ] Generate secret key: `./vendor/bin/sail artisan jwt:secret`
- [ ] Generate database: `./vendor/bin/sail migrate`
- [ ] Generate admin user: `./vendor/bin/sail artisan db:seed`
- [ ] Clean up the README.md file

## Development
To run server, just run: `./vendor/bin/sail up` and visit http://localhost:8080
To open the shell, just `./vendor/bin/sail shell`

## Features

### JWT Authentication
Installed and configured JWT authentication.

### User ApiResource
Created a User ApiResource to manage users.

### TODO
Features to be added:
- [ ] Swagger documentation
- [ ] Unit tests
- [ ] Integration tests
