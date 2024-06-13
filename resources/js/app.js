import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery

import * as form from './form.js'
import * as header from './header.js'
$(window).on('load', function () {
    form.load()
    header.load()
})


