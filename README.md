# Vulnerable Laravel App
This application was used in anamus' conference presentations to demonstrate the following vulnerabilities that are usually caused by poor development practises or mistakes in your code.

One of the talks recording is available at [YouTube](https://www.youtube.com/watch?v=kKGGVGiq2y8).

**This application contains critical security vulnerabilities, DO NOT deploy or run this application outside of your localhost (or expose your localhost while running this)**

# Requirements
* Docker
* Docker Compose
* PHP (>v7.1 preferably) & Composer

# Installation
* `composer install`
* `docker-compose up -d`
* `docker exec vuln-app php artisan migrate --seed`

# Vulnerabilities & tips
## SQL Injection
* There's a vulnerable API endpoint at http://localhost:1234/api/events?sort=id (assuming you're running this in docker)
* There are many ways to exploit this, if you attended the talk you'll know one very specific tool for this

## Object Injection 
* The tool used in the presentation is PHPGGC (https://github.com/ambionics/phpggc)
* API endpoints used can be found at /api/uploads & /api/file-details?fileName=xxx

## Privilege Escalation
* This project's docker compose setup intentionally configures Laravel scheduler to run as root, that's all you need to know ;)
