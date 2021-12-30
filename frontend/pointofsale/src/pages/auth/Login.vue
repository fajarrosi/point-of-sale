<template>
<div>
    <div class="text-primary text-h6 q-mb-sm">Masuk</div>
    <div class="q-mb-sm text-justify">Isilah form email dan password di bawah ini untuk mengakses aplikasi POS </div>
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
        <q-input
            outlined 
            dense
            v-model="password"
            label="Password"
            lazy-rules
            type="password"
            :rules="[
            (val) => (val && val.length > 0) || 'password tidak boleh kosong'
            ]"
            class="q-mb-sm"
            bg-color="white"
            hide-bottom-space
        />
        <div class="row justify-between">
            <q-checkbox v-model="remember" label="Ingat saya" @click="getRemember" class="col"/>
            <q-btn  label="Lupa kata sandi?" flat  no-caps style="text-decoration: underline;" class="col-5" @click="$router.push('/forgot')"/>
            <q-btn color="primary" label="Masuk" @click="onClick" no-caps class="btn-radius col-12" unelevated/>
        </div>
        <div class="row items-center justify-center">
            <span>belum bergabung? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Daftar sekarang" @click="$router.push('/register')"/>
        </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            remember:false,
            email:'',
            password:''
        }
    },
    methods:{
        getRemember(){

        },
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