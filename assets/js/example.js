import $ from 'jquery';
import { greet } from './utils';

$(document).ready(() => {
    $('h1').html(greet('john'));
});
