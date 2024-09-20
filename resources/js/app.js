import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';
window.$ = jQuery

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// import Echo from 'laravel-echo';
// window.Echo = new Echo({
//     broadcaster: 'reverb',
//     key: import.meta.env.VITE_REVERB_APP_KEY,
//     wsHost: import.meta.env.VITE_REVERB_HOST,
//     wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
//     wssPort: import.meta.env.VITE_REVERB_PORT ?? 80443,
//     forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

import * as header from './components/header.js'
import * as table from './components/table.js'
import * as messages from './components/messages.js'
import * as excel from './excel.js'
import * as admin from './components/admin.js'
import * as form from './components/form.js'
import * as chat from './components/chat.js'

$(window).on('load', async function () {
    try {
        //Глобальные
        await header.load()
        
        // Компоненты
        await table.load()
        await messages.load()
        // await excel.load()
        await admin.load()
        await form.load()
        await chat.load()

    } catch (error) {
        console.log(error);
    }
})
