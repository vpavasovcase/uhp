# UHP test app

## Installation

Install Docker Desktop, clone the repo, cd to folder,

`alias sail='bash vendor/bin/sail'`

Copy .env:

`cp .env.example .env`

Run the container:

`sail up -d`

Install dependencies from the container:

`sail composer install`

Migrate:

`sail artisan migrate`

You can then run the site at http://localhost .
