<template>
<!-- style="background:#F9F9FB;" -->
<q-layout view="hHr LpR lFf" >
    <q-page-container>
        <q-page class="login bg-secondary">
                <div class="row justify-center items-center" style="height:100vh;" >
                    <q-card class="login-card col-3 bg-primary">
                        <q-card-section>
                            <q-img
                                src="~assets/login-ilustrasi.svg"
                                spinner-color="primary"
                                spinner-size="82px"
                            />
                        </q-card-section>
                        <q-card-section class="second-section" style="border-top-left-radius:20px;
    background:white;
    border-top-right-radius:20px;">
                            <div class="text-primary text-h6">Masuk</div>
                            <div class="row">
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
                                    class="q-mb-sm col-12 btn-radius"
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
                                    class="q-mb-sm col-12 btn-radius"
                                    bg-color="white"
                                    hide-bottom-space
                                />
                                <q-btn color="primary" label="Masuk" @click="onClick" no-caps class="col-6 btn-radius"/>
                            </div>
                        </q-card-section>
                    </q-card>
                </div>
        </q-page>
    </q-page-container>
</q-layout>
</template>

<script>
export default {
    data(){
        return{
            email:'',
            password:''
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