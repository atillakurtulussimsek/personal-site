const http = require('http');
const express = require('express');
const chalk = require('chalk');
const morgan = require('morgan');
const path = require('path');
const cookieParser = require('cookie-parser');
const mongoose = require('mongoose');
const session = require('express-session');
const Config = require('./Config');
const { getIP, skipLog, getTime } = require('./Utils');

const App = express();
const Server = http.createServer(App);

morgan.token('ip', function (req, res) { return getIP(req); });
morgan.token('time', function (req, res) { return getTime(); })

App.disable('etag');

App.set('view engine', 'ejs');
App.set('trust proxy', true);
App.set('views', path.join(__dirname, 'views'));

App.use(morgan(`[${chalk.bold.blue('Web')}] :ip - :status - :method - :url - :response-time ms`, { skip: skipLog }));
App.use(express.json());
App.use(express.urlencoded({ extended: false }));
App.use(cookieParser());
App.use(session({ secret: Config.Auth.SessionSecret, resave: false, saveUninitialized: true }));

global.DatabaseStatus = false

// CDN Servers
App.use('/assets', express.static(path.join(__dirname, 'public')));

// Routers
App.use('/', require('./routers/Index'));

Server.listen(Config.WebServer.Port ? Config.WebServer.Port : 3000);
Server.on('error', (error) => { /* Hata işlemleri ve loglamaları buraya gelecek. */ });
Server.on('listening', () => {
    console.log(`[${chalk.bold.blue('Server')}] Server has started successfully!`);

    if (Config.Data.Status == true) {
        mongoose.connect(Config.Data.URL ? `${Config.Data.URL}/${Config.Data.Name}` : `mongodb://${Config.Data.IP}:${Config.Data.Port}/${Config.Data.Name}`, {
            useNewUrlParser: true,
            useUnifiedTopology: true,
            useFindAndModify: true
        }, function (err, status) { if(err) return console.log(err); });
    }
});