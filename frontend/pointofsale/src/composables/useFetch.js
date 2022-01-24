import {toRefs, ref, reactive} from 'vue'
import { api,header } from 'boot/axios'
export const useFetch = () => {
    const data = ref([])
    const state =   reactive({
        error:null,
        loading:false
    })
    const getData = async (url,options) =>{
        state.loading = true
        await api.get(url,header(options))
        .then(res=>{
            data.value = res.data.data
            state.loading = false
        })
        .catch(err=>{
            state.error = err
            state.loading = false
        })
    }
    const postData = async (url,options,exdata) =>{
        state.loading = true
        await api.post(url,exdata,options)
        .then(res=>{
            data.value = res.data.data
            state.loading = false
        })
        .catch(err=>{
            state.error = err
            state.loading = false
        })
    }
    return { data, ...toRefs(state),getData,postData};
}