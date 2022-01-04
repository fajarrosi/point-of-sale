import { api,header } from 'boot/axios'
export function login(context,payload) {
    return new Promise((resolve,reject) =>{
        api.post('login',payload)
        .then(response=>{
            context.commit('setLogin',response.data.data)
            api.defaults.headers.common['Authorization'] = 'Bearer ' + response.data.data.access_token
            resolve(response)
            this.$router.push('/dashboard')
        })
        .catch(error=>{
            reject(error)
        })
    })
}

export function logout(context){
    return new Promise((resolve,reject)=>{
        api.get('logout',header(context.state.access_token))
        .then(()=>{
            resolve('ok')
            context.commit('setLogout')
            this.$router.push('/')
        })
        .catch(error=>{
            reject(error)
        })
    })
}

export function forgot(context,payload){
    return new Promise((resolve,reject)=>{
        api.post('forgot',payload)
        .then(()=>{
            resolve('ok')
            this.$router.push('forgot-success')
        })
        .catch(error=>{
            reject(error)
        })
    })
}

export function register(context,payload){
    return new Promise((resolve,reject)=>{
        api.post('register',payload)
        .then(response=>{
            context.commit('setLogin',response.data.data)
            api.defaults.headers.common['Authorization'] = 'Bearer ' + response.data.data.access_token
            this.$router.push('otp')
            resolve(response)
        })
        .catch(error=>{
            reject(error)
        })
    })
}

export function otp(context,payload) {
    return new Promise((resolve,reject)=>{
        api.post('verify',payload,header(context.state.access_token))
        .then(response=>{
            context.commit('setEmailVerified')
            this.$router.push('/dashboard')
            resolve(response)
        })
        .catch(error=>{
            reject(error)
        })
    })
}