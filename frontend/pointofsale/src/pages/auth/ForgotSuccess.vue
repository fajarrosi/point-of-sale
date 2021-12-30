<template>
<div>
    <div class="row justify-center">
        <q-img
            src="~assets/forgot-success.svg"
            spinner-color="primary"
            spinner-size="30px"
            class="col-4"
        />
        <div class="text-subtitle2 q-my-md text-center col-12">
            Silahkan cek email Anda, kemudian masuk dengan password yang telah diberikan. Jangan lupa untuk segera mengganti password Anda
        </div>
            <q-btn color="primary" label="Masuk Sekarang" @click="$router.push('/')" no-caps class="btn-radius col-10" unelevated/>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            otp1:'',
            otp2:'',
            otp3:'',
            otp4:'',
        }
    },
    methods:{
        nextSiblings(event){
            console.log('ere',event)
            let grandparent = event.target.parentNode.parentNode.parentNode.parentNode
            if(event.keyCode === 8){
                let ps = grandparent.previousElementSibling
                if(ps){
                    if(ps.children[0]){
                        let prev = ps.children[0].children[0].children[0].children[0]
                    prev.focus()
                    }
                }
            }else{
                let ns = grandparent.nextElementSibling
                if(ns){
                    let next = ns.children[0].children[0].children[0].children[0]
                    next.focus()
                }
            }
        }
    },
}
</script>

