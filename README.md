# Laravel Api Boilerplate
This is a Laravel Boilerplate to create a RESTful API.

## Getting Started
Just click on [`Use this template`](https://github.com/pedrodalvy/laravel-api-boilerplate/generate) GitHub button to create a new project based on this template.

## Checklist (without Kool)
When you use this template, try follow the checklist to update your info properly

- [ ] Create `.env` file: `cp .env.example .env`
- [ ] Update `.env` file with your project and docker info
- [ ] Start docker: `docker-compose up`
- [ ] Generate secret key: `artisan jwt:secret`
- [ ] Generate database: `artisan migrate`
- [ ] Generate admin user: `artisan db:seed`
- [ ] Clean up the README.md file

## Development
- To run server, just run: `docker-compose up` and visit http://localhost:8080

## Using Kool
- [ ] Update `.env.example` file with your project and docker basic info
- [ ] Setup project: `kool run setup`
- [ ] Generate secret key: `kool run artisan jwt:secret`
- [ ] Generate database: `kool run artisan migrate`
- [ ] Generate admin user: `kool run artisan db:seed`
- [ ] Clean up the README.md file

> More information about Kool can be found in the [Kool.dev Documentation](https://kool.dev/docs/getting-started/introduction)

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
