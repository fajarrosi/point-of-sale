<template>
<div>
    <div class="text-primary text-h6 q-mb-sm">Daftar</div>
    <div class="q-mb-sm text-justify">Isilah form di bawah ini untuk mendaftar ke dalam aplikasi POS </div>
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
        <q-input
            outlined 
            dense
            v-model="name"
            label="Nama"
            lazy-rules
            :rules="[
            (val) => (val && val.length > 0) || 'Nama tidak boleh kosong'
            ]"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <q-input
            outlined 
            dense
            v-model="address"
            label="Alamat"
            lazy-rules
            :rules="[
            (val) => (val && val.length > 0) || 'Alamat tidak boleh kosong'
            ]"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <q-input
            outlined 
            dense
            v-model="phone"
            label="No telepon"
            lazy-rules
            :rules="[
            (val) => (val && val.length > 0) || 'No telepon tidak boleh kosong'
            ]"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <div class="row items-center justify-center q-mt-md">
            <q-btn color="primary" label="Daftar" @click="$router.push('/otp')" no-caps class="btn-radius col-12" unelevated/>
            <span>Sudah bergabung? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Masuk sekarang" @click="$router.push('/')"/>
                
        </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            remember:false,
            email:'',
            password:'',
            name:'',
            address:'',
            phone:'',
        }
    },
    methods:{
        onClick(){

        }
    }
}
</script>

<style>

</style>