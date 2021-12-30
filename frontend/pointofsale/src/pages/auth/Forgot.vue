<template>
<div>
    <div class="text-primary text-h6 q-mb-sm">Cari Akun Anda</div>
    <div class="q-mb-sm text-justify">Masukan alamat e-mail Anda yang terdaftar </div>
        <q-input
            outlined 
            dense
            v-model="email"
            label="Alamat E-mail"
            lazy-rules
            :rules="[
            (val) => (val && val.length > 0) || 'Email tidak boleh kosong',val => validEmail(val)
            ]"
            type="email"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <div class="row items-center justify-center q-mt-md">
            <q-btn color="primary" label="Submit" @click="$router.push('/forgot-success')" no-caps class="btn-radius col-12" unelevated/>
            <span>Sudah bergabung? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Masuk sekarang" @click="$router.push('/')"/>
        </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            email:'',
        }
    },
    methods:{
        validEmail(val){
            if(val.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
                return true;
            }else{
                return 'Email tidak valid';
            }
        },
    }
}
</script>

<style>

</style>