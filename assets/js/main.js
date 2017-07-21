// loads the jquery package from node_modules
let $ = require('jquery');

// loads the bootstrap JS assets
Tether = require('tether');
require('bootstrap');

// import the function from greet.js (the .js extension is optional)
// ./ (or ../) means to look for a local file
let greet = require('./greet');

$(document).ready(function() {
    $('h1').html(greet('john'));
});

// load local css:
// require('../css/main.scss');