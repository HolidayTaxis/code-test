# Holiday Taxis Web Application Skeleton

## Introduction

This repository outlines the directory structure for web applications developed at Holiday Taxis.
It's heavily influenced by the structures used by both [Laravel](https://laravel.com/docs/5.6/structure) and Symfony as well as the [PHP Package Skeleton](https://github.com/php-pds/skeleton).

## Directory Structure

### /

The application's root directory must contain a `README.md` file providing suitable information about the application or library;
for example description, quick start guide, build/deployment guide, API reference, troubleshooting tips, etc.

Repositories may also contain an optional `CONTRIBUTING.md` file to provide application/library specific information around
structure, coding standards, etc.

Applications (not libraries) should contain a `.env.example` file that outlines the environment variables required by the application. This will
when be copied and updated by the build/deployment process.

### /bin

The `bin` directory contains command-line executable files; these can be both binaries and scripts (PHP, Bash, etc).
PHP scripts may make use of the Composer autoloader and classes from both the `\src` and `\vendor` directories; however,
they should be mostly procedural in nature. Those scripts that require more structure should be placed in a suitable location in the `/src` directory.

### /bootstrap

The `bootstrap` directory contains the files which bootstrap the application such as DI container initialisation.

This directory should contain at least two files:

| File       | Content/Usage                                                           |
| ---------- | ----------------------------------------------------------------------- |
| app.php    | The primary application bootstrap file, usually required by `index.php` |
| routes.php | Route definitions for the application, usually required by `app.php`    |

### /build

The `build` directory contains files related to building and deploying the application such as `Dockerfile`, `Jenkinsfile`, `webpack.js`, etc.
Essentially any file used as part of a build pipeline should be placed in this directory whenever possible so as to minimise clutter in the root directory.

### /config

The `config` directory contains all of the application's configuration files.
Plain PHP files containing arrays are the preferred configuration format;
JSON is also acceptable. YAML should be avoided and XML is a definite no.

All environment specific configuration values should be provided via environment variables accessed via the [Dotenv](https://symfony.com/doc/current/components/dotenv.html) library.

### /docs

The `docs` directory contains documentation files. The structure of the directory is
determined by the application. Generally

### /public

The `public` directory contains the index.php file, which is the entry point for all requests entering the application and configures autoloading.
This directory also houses compiled/static assets such as images, Javascript, and CSS.

| Directory      | Content/Usage                                                  |
| -------------- | -------------------------------------------------------------- |
| /public/css    | Stand-alone CSS files - ideally minified                       |
| /public/img    | Stand-alone images - `png` and `svg` are the preferred formats |
| /public/fonts  | Stand-alone font files                                         |
| /public/js     | Stand-alone Javascript files  - ideally minified               |
| /public/dist   | Distributable versions of frontend components                  |

### /resources

The `resources` directory contains templates and langauge translations as well as un-compiled assets such as SASS, Javascript and Vue.js components.

| Directory        | Content/Usage                |
| ---------------- | ---------------------------- |
| /resources/lang  | CSS files - ideally minified |
| /resources/views | Twig templates               |

### /src

| Directory         | Content/Usage                                                   |
| ----------------- | --------------------------------------------------------------- |
| /src/Controllers  | Application controller classes for handling routes              |
| /src/Middleware   | Application middleware classes                                  |
| /src/Models       | Business object classes that encapsulate data                   |
| /src/Services     | Business object classes that perform operations based on Models |

### /tests

The `tests` directory contains the project's automated tests. The exact structure of this directory will be determined by
the application depending on the type of tests created.

### /var

The `var` directory contains transient files created by the application at runtime; such as cache files and logs.
Generally speaking this will only be used in development environments as staging/production environments will have
centralised caching and logging facilities.

| Directory  | Content/Usage      |
| ---------- | ------------------ |
| /var/cache | Local cache files  |
| /var/logs  | Application logs   |
| /var/tmp   | Temporary files    |
