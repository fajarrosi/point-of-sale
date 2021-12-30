<template>
<div>
    <div class="row justify-center">
        <q-img
            src="~assets/otp.svg"
            spinner-color="primary"
            spinner-size="30px"
            class="col-4"
        />
        <div class="text-subtitle2 q-my-md text-center col-12">
            Masukan kode OTP yang dikirim
        </div>
        <q-input outlined bg-color="custom"  v-model="otp1" maxlength="1" mask="#" input-class="otp" input-style="text-align: center; font-size: 60px; color:#9A6E5C; font-weight:700;" class="q-pr-xs" @keyup="nextSiblings($event)"/>
        <q-input outlined bg-color="custom"  v-model="otp2" maxlength="1" mask="#" input-class="otp" input-style="text-align: center; font-size: 60px; color:#9A6E5C; font-weight:700;" class="q-pr-xs " @keyup="nextSiblings($event)"/>
        <q-input outlined bg-color="custom"  v-model="otp3" maxlength="1" mask="#" input-class="otp" input-style="text-align: center; font-size: 60px; color:#9A6E5C; font-weight:700;" class="q-pr-xs " @keyup="nextSiblings($event)"/>
        <q-input outlined bg-color="custom"  v-model="otp4" maxlength="1" mask="#" input-class="otp" input-style="text-align: center; font-size: 60px; color:#9A6E5C; font-weight:700;" class="q-pr-xs " @keyup="nextSiblings($event)"/>
    </div>
    <div class="row items-center justify-center q-mt-md">
            <span>Tidak menerima kode? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Kirim Ulang" @click="$router.push('/')"/>
            <q-btn color="primary" label="Verifikasi & Lanjutkan" @click="$router.push('/otp')" no-caps class="btn-radius col-10" unelevated/>
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

<style scoped>
.q-field--outlined :deep() .q-field__control{
    border-radius: 8px;
    width:72px;
    background:#F5E1D3 !important;
    height:82px;
}

.q-field--outlined :deep() .q-field__control::before{
    border:1px solid #EFBFA4;
}

</style>