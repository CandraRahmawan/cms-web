## Front End CMS Website Version 1.1.0
> contains a web theme plugin, build use CakePHP Version 3.8.9

#### Core Requirement :
- PHP >= 5.6
- MySQL >= 5.5.3
- MariaDB >= 5.5
- SQLite 3

#### Development Requirement :
- NodeJS

#### Development :
- Install node module run `npm install`
- File Watcher scss/sass to css run `npm run sass:watch` (adjust input and output file on packages.json)
- Bundle css minify run `npm run sass:minify` (adjust input and output file on packages.json)

#### Depedencies :
- [admin-cms](https://bitbucket.org/candra_rahmawan/cms-admin/src/master/)

#### Configuration :
- Copy files .htaccess.default into .htaccess
- Copy files .env.default into .env and adjust your configuration
- create directory `logs` and `tmp`

#### Deployment :
- we use deployment .cpanel.yml, but this is for production only, considering there is no environment. [guide deployment](https://docs.cpanel.net/knowledge-base/web-services/guide-to-git-deployment/)
- for development you can use manual upload from FTP or git.
- default deployment production root url `/`

#### Compatible :
> if you use windows then ready to go, if you doesn't use windows you need make permission on directory `logs` and `tmp` (usually using chmod -R 777).


