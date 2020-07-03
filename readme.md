## Front End CMS Website Version 1.2.0
> contains a web theme plugin, build use CakePHP Version 3.8.9

#### Core Requirement :
- PHP >= 5.6 (recommend for use php >= 7.x) **currently not supported for php 7.4, still has some warning error.**
- MySQL/MariaDB >= 5.5.3
- SQLite 3
- Apache Server

#### Development Requirement :
- NodeJS >= 8.x

#### Development :
- Install node module run `npm install`
- Running File Watcher scss/sass to css run `npx node-sass -w plugins/{PluginName}/webroot/css/styles.scss plugins/{PluginName}/webroot/css/styles.css`.
- Bundle css minify compressed run `npx node-sass plugins/{PluginName}/webroot/css/styles.scss plugins/{PluginName}/webroot/css/styles.min.css --output-style compressed`.

#### Depedencies :
- [admin-cms](https://github.com/CandraRahmawan/cms-admin)

#### Configuration :
- Copy files .htaccess.default into .htaccess
- Copy files .env.default into .env and adjust your configuration
- create directory `logs` and `tmp`

#### Deployment :
- We use deployment .cpanel.yml, but this is for production only, considering there is no environment. [guide deployment](https://docs.cpanel.net/knowledge-base/web-services/guide-to-git-deployment/)
- For development environment you can use manual upload from FTP, Cpanel File Manager or Git.
- Default deployment production root url `/`

#### Compatible :
> if you use windows then ready to go, if you doesn't use windows you need make permission on directory `logs` and `tmp` (usually using chmod -R 777).


