import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import feather from 'feather-icons';

feather.replace();

/* import NiceSelect from 'nice-select2/src/js/nice-select2';
import  'nice-select2/src/scss/'; */
/* document.addEventListener("DOMContentLoaded", function(e) {
    // default
    setTimeout(() => {
        var els = document.querySelectorAll(".selectize");
    els.forEach(function(select) {
        NiceSelect.bind(select);
    });
    console.log(els.length);
    }, 3000);
});
    document.addEventListener("DOMContentLoaded", function(e) {
        // default
        var els = document.querySelectorAll(".selectize");
        els.forEach(function(select) {
            NiceSelect.bind(select);
        });
    }); */
window.Alpine = Alpine;
//call
Alpine.plugin(focus);

Alpine.start();
