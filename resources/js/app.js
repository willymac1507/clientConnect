import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let userId =
    Echo.private('App.Models.User' + userId)
        .listen('MessageReceived', (e) => {
            console.log(e.message)
        })
