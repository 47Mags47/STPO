import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery

import * as popup from './pop-up.js'
import * as form from './form.js'
import * as header from './header.js'
import * as table from './table.js'

$(window).on('load', function () {
    popup.load()
    form.load()
    header.load()
    table.load()
})

import.meta.glob('./pages/*.js')
