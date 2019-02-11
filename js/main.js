import HomeComponent from './components/HomeComponent.js'; //this is like doing a php include
import SignUpComponent from './components/SignUpComponent.js'; //this is like doing a php include

const routes = [
    { path: "/", name: "home", component: HomeComponent },
    { path: "/home", name: "Home", component: Indexomponent },
    { path: "/signup", name: "Sign-Up", component: SignUpComponent}
];

const router = new VueRouter({
    routes
  });

const vm = new Vue({
  // el: '#app',

  data: {},

  mounted() { },

  methods: {},

  router: router
}).$mount("#app");