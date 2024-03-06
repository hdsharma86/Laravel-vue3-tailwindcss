import { createStore } from 'vuex';
/*import state from "./state";
import actions from "./actions";
import mutations from "./mutations";*/
import axiosClient from "../axios.js";
export default createStore({
    state: {
        user: {
            token: sessionStorage.getItem('TOKEN') || null,
            data: {}
        },
        sidebar: true,
    },
    getters: {},
    actions: {
        login ({ commit }, data) {
            return axiosClient.post('/login', data)
                .then(({ data }) => {
                    commit('setUser', data.user);
                    commit('setToken', data.token)
                    return data;
                })
        },
        logout ({ commit }, data) {
            return axiosClient.post('/logout', data)
                .then((response) => {
                    commit('setUser', {});
                    commit('setToken', null)
                    return response;
                })
        },
        isSidebar ({ commit }) {
            commit('setSidebarToogle');
        }
    },
    mutations: {
        setUser (state, user) {
            state.user.data = user;
        },
        
        setToken (state, token) {
            state.user.token = token;
            if (token) {
                sessionStorage.setItem('TOKEN', token);
            } else {
                sessionStorage.removeItem('TOKEN')
            }
        },
        setSidebarToogle ( state ) {
            state.sidebar = !state.sidebar;
        }
    }
})