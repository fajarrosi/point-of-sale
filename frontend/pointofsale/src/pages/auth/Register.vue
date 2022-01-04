<template>
<div>
    <q-banner inline-actions class="text-white bg-red btn-radius" v-if="error">
        {{error}}
    </q-banner>
    <div class="text-primary text-h6 q-mb-sm">Daftar</div>
    <div class="q-mb-sm text-justify">Isilah form di bawah ini untuk mendaftar ke dalam aplikasi POS </div>
    <q-form @submit.prevent.stop="onSubmit('auth/register',user)" ref="form">
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
        <q-input
            outlined 
            dense
            v-model="user.name"
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
            v-model="user.address"
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
            v-model="user.telephone"
            label="No telepon"
            lazy-rules
            mask="####-####-####"
            :rules="[
            (val) => (val && val.length > 0) || 'No telepon tidak boleh kosong'
            ]"
            class="q-mb-sm "
            bg-color="white"
            hide-bottom-space
        />
        <div class="row items-center justify-center q-mt-md">
            <q-btn color="primary" label="Daftar" type="submit" no-caps class="btn-radius col-12" unelevated :disabled="btndisabled" :loading="load">
            <template v-slot:loading>
                    <div class="row items-center">
                        <q-spinner-facebook />  
                    </div>
                </template>
            </q-btn>
            <span>Sudah bergabung? </span>
            <q-btn flat no-caps class="text-primary text-bold" label="Masuk sekarang" @click="$router.push('/')"/>
        </div>
    </q-form>
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
                password:'password',
                name:'fajar',
                address:'alamat testing',
                telephone:'082308230823',
            },
            error:'',
            btndisabled:false,
            load:false
        }
    },
}
</script>

<style>

</style>