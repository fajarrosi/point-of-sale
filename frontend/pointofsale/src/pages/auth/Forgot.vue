<template>
<div>
    <q-banner inline-actions class="text-white bg-red btn-radius" v-if="error">
        Akun anda tidak ditemukan
    </q-banner>
    <div class="text-primary text-h6 q-mb-sm">Cari Akun Anda</div>
    <div class="q-mb-sm text-justify">Masukan alamat e-mail Anda yang terdaftar </div>
    <q-form @submit.prevent.stop="onSubmit('auth/forgot',user)" ref="form">
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
        <div class="row items-center justify-center q-mt-md">
            <q-btn color="primary" label="Submit" type="submit"  no-caps class="btn-radius col-12" unelevated :disabled="btndisabled" :loading="load">
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
            user:{
                email:'test@gmail.com'
            },
            error:'',
            btndisabled: false,
            load:false
        }
    },
}
</script>

<style>

</style>