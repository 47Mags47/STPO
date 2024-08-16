import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery

import PopUp from './popup.js';
import * as pageMeny from './page-meny.js'
import * as header from './header.js'
import * as table from './table.js'
import * as excel from './excel.js'
import * as admin from './components/admin.js'
import * as selectDepend from './components/select-depend.js'
import * as form from './components/form.js'
import * as tableFilter from './components/table-filter.js'
import * as chat from './components/chat.js'

$(window).on('load', async function () {
    let load = new PopUp('load')
    load.open()

    try {
        await pageMeny.load()
        await header.load()
        await table.load()
        await excel.load()

        // Компоненты
        await admin.load()
        await selectDepend.load()
        await form.load()
        await tableFilter.load()
        await chat.load()
    } catch (error) {
        console.log(error);
    }

    load.close()
})

import * as dashboard from './pages/dashboard.js'
$(window).on('load', function () {
    dashboard.load()
})
