# Origin - WordPress Starter Theme

Built by [Origin](https://www.originoutside.com/), powered by [WordPress](https://wordpress.org).

---

-   [Onboarding](#onboarding)
-   [Development Process](#development-process)
-   [Deployment](#deployment)
-   [Running The Tests](#running-the-tests)

---

# Onboarding

Pull down the latest

## Dependencies

node.js >14.15.0
npm 6.14.8
[gulp](https://gulpjs.com/)

## Assets (CSS & JS)

Development takes place at the theme root folder. First, `cd` to the theme folder.

Gulp is used to build CSS and Javascript, and is controlled by NPM scripts which are defined in `package.json`.

First, install the dependencies..

```sh
npm install
```

Then, start watching for development changes..

```sh
npm run watch
```

## Git Flow

The development process mostly follows the [Git Flow](http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/) model. Development happens in feature branches, which are merged into `develop`, which is merged into `staging` for deployment to the testing environment, and then merged into `main` for deployment to production.

When a pull request is opened, it will be automatically assigned to one of your colleagues for code review, after which it is your responsibility to merge into the project.

## Package management

This project uses Composer and NPM for packagement management. Composer is typically used to install build tools and WordPress plugins, and NPM is used to install build tools and third-party JS packages.

## Theme

This project was based on the `block-theme-generator` starter theme. For more information, please [read more info here](https://fullsiteediting.com/block-theme-generator/).

# Deployment

TBC

# Running the tests

The project contains only one type of automated test:

-   _Coding standards_ which are run via [PHP Code Sniffer (PHPCS)](https://github.com/squizlabs/PHP_CodeSniffer) and [ESLint](https://eslint.org).

All of the test frameworks are installed with Composer or NPM as part of the development environment setup.
