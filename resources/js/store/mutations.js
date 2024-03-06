export default {
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
    }
}
