import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery

import * as pageMeny from './page-meny.js'
import * as popup from './pop-up.js'
import * as form from './form.js'
import * as header from './header.js'
import * as table from './table.js'
import * as excel from './excel.js'

$(window).on('load', function () {
    pageMeny.load()
    popup.load()
    form.load()
    header.load()
    table.load()
    excel.load()
})

import.meta.glob('./pages/*.js')

import * as dashboard from './pages/dashboard.js'
$(window).on('load', function () {
    dashboard.load()
})
