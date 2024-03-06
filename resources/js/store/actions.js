import axiosClient from "../axios";
export default {
    login ({ commit }, data) {
        return axiosClient.post('/login', data)
            .then(({ data }) => {
                commit('setUser', data.user);
                commit('setToken', data.token)
                return data;
            })
    },
}
