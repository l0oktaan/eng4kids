
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Vuex from 'vuex'
Vue.use(Vuex);

import axios from 'axios'
import VueAxios from 'vue-axios' 
Vue.use(VueAxios, axios)

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

import App from './views/App'
import Home from './views/Home'
import Color from './views/Color'
import ColorShow from './views/ColorShow'
import ColorLearning from './views/ColorLearning'
import ColorExercise from './views/ColorExercise'

const store = new Vuex.Store({
    state: {
        language: 'thai',
        wordThai: '',
        wordEng: ''
    },
    mutations: {
        SET_LANGUAGE: (state, lang) => {
            state.language = lang
        },
        SPEAK_WORD: (state, group) => {
            let lang
            lang = state.language
            if (lang === 'english'){
                responsiveVoice.speak("" + group.eng +"", "US English Female", {rate: 0.5, volume: 1});
            }else{
                responsiveVoice.speak("" + group.thai +"", "Thai Female", {rate: 1, volume: 1})
            }
            //lang === 'english' ? responsiveVoice.speak("" + eng +"", "US English Female", {rate: 0.5, volume: 1}) : responsiveVoice.speak("" + thai +"", "Thai Female", {rate: 0.8, volume: 1})
        }
    },
    actions: {

    }
})
const router = new VueRouter({
    mode: 'history',    
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/color',
            component: Color,
            children: [
                {
                    path: '',
                    component: ColorShow
                },
                {
                    path: 'learning',
                    component: ColorLearning
                },
                {
                    path: 'exercise',
                    component: ColorExercise
                }
            ]
        }
    ]
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('LangSwitch', require('./components/LangSwitch.vue'));

const app = new Vue({
    el: '#app',
    store,
    components: { App },
    router
});
