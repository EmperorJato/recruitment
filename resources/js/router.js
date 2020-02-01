import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)


let routes = [
    { path: '/dashboard', component: require('./components/hr/Hr_Dashboard.vue') },
    { path: '/ribshack', component: require('./components/hr/Hr_Ribshack.vue') },
    { path: '/delcom', component: require('./components/hr/Hr_Delcom.vue') },
    { path: '/ramx', component: require('./components/hr/Hr_Ramx.vue') },
    { path: '/screening', component: require('./components/hr/Hr_Screening.vue') },
    { path: '/requirements', component: require('./components/hr/Hr_Requirements.vue') },
    { path: '/man_power_request', component: require('./components/hr/Hr_ManPowerRequest.vue') },
    { path: '/applicant', component: require('./components/hr/Hr_Applicant.vue') },
  ];


  const router = new VueRouter({
    mode: 'history',
    routes
  })


  export default new VueRouter({router})