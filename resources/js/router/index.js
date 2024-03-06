import {createRouter, createWebHistory} from "vue-router";
import store from "../store/index.js";
import AuthLayout from '../layouts/AuthLayout.vue'
import AdminLayout from '../layouts/AdminLayout.vue'
import Login from "../pages/Login.vue";
import Dashboard from "../pages/Dashboard.vue";
import User from "../pages/User.vue";

const routes = [
  {
    path: '/',
    redirect: '/'
  },
  {
    path: '/login',
    redirect: '/login',
    name: 'login',
    component: AuthLayout,
    meta: {
      requiresGuest: true
    },
    children: [
        {
            path: '/login',
            name: 'admin.login',
            component: Login
        },
    ]
  },
  {
    path: '/admin',
    name: 'admin',
    redirect: '/admin/dashboard',
    component: AdminLayout,
    children: [
      {
        path: 'dashboard',
        name: 'admin.dashboard',
        component: Dashboard,
        meta: {
          requiresAuth: true
        },
      },
      {
        path: 'users',
        name: 'admin.users',
        component: User,
        meta: {
          requiresAuth: true
        },
      },
    ]
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
})

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth && !store.state.user.token) {
    next({name: 'admin.login'})
  } else if (to.meta.requiresGuest && store.state.user.token) {
    next({name: 'admin.dashboard'})
  } else {
    next();
  }

})

export default router;