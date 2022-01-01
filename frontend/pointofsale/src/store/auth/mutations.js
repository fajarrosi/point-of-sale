export function setLogin(state,data){
    state.user = data.user
    state.access_token = data.access_token
}

export function setLogout(state){
    state.user = ''
    state.access_token = ''
}