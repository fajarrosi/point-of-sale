<template>
    <q-drawer v-model="sidebar" 
            :width="100"
            :breakpoint="300"
        >
        <div class="sidebar">
            <div class="row">
                <span class="text-h6 text-bold text-primary text-center col-12 q-pt-md">POS</span>
                <q-separator class="col-12" style="height:1px !important;"/>
            </div>
            <!-- <div class="d"> -->
                <q-scroll-area class="fit" style="max-width:100%;">
                    <q-list>
                        <q-item v-for="(link,index) in activelink" :key="index">
                            <q-item-section>
                                <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === link.name ? false : true" @click="$router.push({name:link.name})">
                                    <div class="row items-center">
                                        <q-icon :name="link.icon" class="col-12"/>
                                        <div class="text-center col-12" style="font-size:12px;">
                                            {{link.name}}
                                        </div>
                                    </div>
                                </q-btn>
                            </q-item-section>
                        </q-item>
                        <!-- <q-item class="q-pt-none">
                            <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" push flat @click="$emit('update:keranjang',!keranjang)">
                                        <div class="row items-center">
                                            <q-icon name="shopping_cart" class="col-12"/>
                                            <div class="text-center col-12">
                                                Keranjang
                                            </div>
                                        </div>
                                        <q-badge color="red" floating>4</q-badge>
                                    </q-btn>
                            </q-item-section>
                        </q-item> -->
                    </q-list>
                </q-scroll-area>
            <!-- </div> -->

            <div class="row justify-center items-center">
                <q-btn color="primary" no-caps style="border-radius:10px;" push flat class="col-10" @click="$store.dispatch('auth/logout')">
                    <div class="row items-center">
                        <q-icon name="logout" class="col-12"/>
                        <div class="text-center col-12">
                            Keluar
                        </div>
                    </div>
                </q-btn>
            </div>
        </div>

            
        </q-drawer>
</template>

<script>
import { menu } from 'src/common/menu'
export default {
    props:[
        'keranjang'
    ],
    computed:{
        role(){
            let r = this.$store.state.auth.user
            return r ? r.account.role : ''
        },
        activelink(){
            return menu.filter(m => m.access[this.role])
        }
    },
    data(){
        return{
            sidebar:true
        }
    },
    methods:{
        bukaKeranjang(){

        },
    }
}
</script>

<style>

</style>