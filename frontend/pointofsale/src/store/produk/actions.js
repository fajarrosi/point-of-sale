/*
export function someAction (context) {
}
*/
import { dataProduk } from './dummy'
export function setProduk(context){
    return new Promise((resolve,reject)=>{
        setTimeout(() => {
            context.commit('onSave',dataProduk)
            resolve('OK')
        }, 5000);
    })
}