<template>
<div>
    <q-banner inline-actions class="text-white bg-red btn-radius" v-if="error">
        Email/password yang anda masukkan salah
    </q-banner>
    <div class="text-primary text-h6 q-mb-sm">Masuk</div>
    <div class="q-mb-sm text-justify">Isilah form email dan password di bawah ini untuk mengakses aplikasi POS </div>
    <q-form @submit.prevent.stop="onSubmit('auth/login',user)" ref="form">
        <q-input
            outlined 
            dense
            v-model="user.email"
            label="Alamat E-mail"
            lazy-rules
            :rules="[
            (val) => (val && val.length > 0) || 'Email tidak boleh kosong',val => validemail(val)
            ]"
            type="email"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <q-input
            outlined 
            dense
            v-model="user.password"
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
            <q-btn color="primary" label="Masuk" type="submit" no-caps class="btn-radius col-12" unelevated :disabled="btndisabled" :loading="load">
                <template v-slot:loading>
                    <div class="row items-center">
                        <q-spinner-facebook />  
                    </div>
                </template>
            </q-btn>
        </div>
    </q-form>
        <div class="row items-center justify-center">
            <span>belum bergabung? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Daftar sekarang" @click="$router.push('/register')"/>
        </div>
</div>
</template>

<script>
import config from 'src/common/config'
export default {
    mixins: [config],
    data(){
        return{
            remember:false,
            user:{
                email:'fajarrsbispenjoe@gmail.com',
                password:'password'
            },
            load:false,
            btndisabled:false,
            error:''
        }
    },
    methods:{
        getRemember(){

        },
    }
}
</script>

<style>

</style>