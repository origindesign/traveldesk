# Composer-enabled WordPress template

This is an artifact generated by the [pantheon-systems/wordpress-composer-managed](https://github.com/pantheon-upstreams/wordpress-composer-managed) repo for the purposes of supporting Composer Managed WordPress.

# Origin template for Wordpress projects

This project template provides a kickstart theme and config for our base website setup including a Circle CI workflow

## Requirements

- [Git](https://git-scm.com/downloads)
- [Composer](https://getcomposer.org/download/)
- [Docker](https://docs.docker.com/engine/installation/)
- [Lando](https://lando.dev/)

## 1. Setting up [Origin Wordpress Drop](https://github.com/origindesign/origin-wordpress-drop)

Clone this repository into a local folder [name-of-project]

```
git clone git@github.com:origindesign/origin-wordpress-drop.git [name-of-project]
```

## 2. Setting Up Pantheon

- Create new site on Pantheon from the [WordPress (Composer Managed)](https://dashboard.pantheon.io/sites/create?upstream_id=90a683cd-4e03-4832-9b49-be97ab2a0be4) upstream - Site Name: [name-of-project]
- Install Wordpress as normal on Pantheon Dev environment

## 3. Setting up Lando

From the root of the project, delete the existing `.lando.yml` and rename:

```
.lando.txt to .lando.yml
```

Update `.lando.yml` config

- Replace [jobcode] (lines 1 and 16) with the 3 letter Origin job code for the project, this will determine your lando sites local URL: https://[jobcode].lndo.site
- Replace [pantheon-machine-name] with the Pantheon machine name for your site, this should be [name-of-project] from above
- Replace [pantheon-id] with the numeric Pantheon ID. This can be retrieved from the dashboard URL
- Rename files to setup for local development

```shell
/web/index.txt to index.php
/web/wp-cli.txt to wp-cli.yml
/web/wp-config.txt to wp-config.php
/web/wp-config-pantheon.txt to wp-config-pantheon.php
```

- Rename the `.env.example` file to `.env.local` and add your local URL variables.

From the root of your local project, start lando; this will also run a composer install

```shell
lando start
```

Pull the database from Dev

```
lando pull --database=dev
```

- Visit lando URL https://[jobcode].lndo.site

## 4. Pushing to Github

- Remove .git folder
- Create an empty github repository with [name-of-project]. This should ideally match the [pantheon-machine-name]

From the root of your local project:

```shell
rm -rf .git
git init
git add -A .
git commit -m "Initializing repo on Github"
git remote add origin git@github.com:origindesign/[name-of-project].git
git push -u origin master
```

## 5. Configuring Circle CI

In Circle CI, create a new project based on your Github new repo. Visit **Project Settings > Environment Variables** and enter the following:

- TERMINUS_SITE: The machine name of the Pantheon site that will be used to test your site [pantheon-machine-name]

These additional environment variables will be added through a context origin-pantheon-git set in /.circleci/config.yml, no action is required.

- TERMINUS_TOKEN: The Terminus Machine token
- GITHUB_TOKEN: Used by CircleCI to post comments on pull requests.
- GIT_EMAIL: Used to configure the git user’s email address for commits we make.

Visit **Project Settings > SSH Keys > Additional SSH Keys**, enter your SSH key and launch a build. The build will:

- Pull the repo from github
- Build an artifact
- Run the test set on either the dev environment, or within a new multidev if a branch is pushed
