//Components

import promoComponent from './components/promoComponent.js'; 
import formComponent from './components/formComponent.js';


const routes = [
    { path: '/', redirect: {name: 'promotions'}},
    { path: '/promotions', name: 'promotions', component: promoComponent },
    { path: '/form', name: 'form', component: formComponent }
];

const router = new VueRouter ({
    routes
});

const vm = new Vue ({
    el: '#app',

    data: {
        message: "Hi from vue!",
    },

    created: function(){
        console.log('hello hello');
    },

    router: router
}).$mount("#app");

