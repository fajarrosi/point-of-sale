import { api,header } from 'boot/axios'

export function datakasir(context){
    return new Promise((resolve,reject)=>{
        api.get('kasir',header(context.rootState.auth.access_token))
        .then(res=>{
            resolve(res)
        })
        .catch(err=>{
            reject(err)
        })
    })
}

export function datasupplier(context){
    return new Promise((resolve,reject)=>{
        api.get('supplier',header(context.rootState.auth.access_token))
        .then(res=>{
            resolve(res)
        })
        .catch(err=>{
            reject(err)
        })
    })
}