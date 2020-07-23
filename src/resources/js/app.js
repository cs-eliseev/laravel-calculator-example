'use strict';

import Vue from 'vue';
import http from './http';
import Calculator from "./vue/Calculator";

Vue.prototype.$http = http;

new Vue({
    el: '#app',
    components: {
        Calculator
    },
});
