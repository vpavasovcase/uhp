# UHP test app

## Installation

Install Docker Desktop, clone the repo, cd to folder,

`alias sail='bash vendor/bin/sail'`

Copy .env:

`cp .env.example .env`

Run the container:

`sail up -d`

Migrate:

`sail artisan migrate`

You can then run the site at http://localhost .
