# Reliable Staffing website using WordPress on a Docker container, using tailwindcss and alpinejs with rollupjs for the bundler

### Dependencies

* [Docker](https://docs.docker.com/docker-for-mac/install/)
* [Node](https://nodejs.org/) (>= 8.9.0)
* [NPM](https://www.npmjs.com/)
* [RollupJS](https://rollupjs.org/guide/en/)
* [PostCSS](https://postcss.org/)
* [TailwindCSS](https://tailwindcss.com/)
* [AlpineJS](https://github.com/alpinejs/alpine)

### Setup
1. `change the variables in .env`
1. `create a config file for wordpress wp-config.php`
1. `run docker-compose up -d --build site`
1. `for ssl - add certbot to site depends_on in docker-compose.yml`
1. `for ssl - follow the steps in this url` [click me](https://www.digitalocean.com/community/tutorials/how-to-secure-a-containerized-node-js-application-with-nginx-let-s-encrypt-and-docker-compose)


