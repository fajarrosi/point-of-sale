<template>
    <q-drawer v-model="sidebar" 
            :width="90"
            :breakpoint="500"
        >
            <q-scroll-area class="fit">
                <q-list padding>
                    <q-item clickable v-ripple>
                        <q-item-section class="text-primary text-bold text-center text-h6">
                            POS
                        </q-item-section>
                    </q-item>

                    <q-separator />

                    <q-item>
                        <q-item-section>
                            <q-btn color="primary" no-caps style="width:60px;height:60px;border-radius:10px;" unelevated >
                                <div class="row items-center">
                                    <q-icon name="home_max" class="col-12"/>
                                    <div class="text-center col-12">
                                        Kasir
                                    </div>
                                </div>
                            </q-btn>
                        </q-item-section>
                    </q-item>

                    <q-item>
                        <q-item-section>
                                <q-btn color="primary" no-caps style="width:60px;height:60px;border-radius:10px;" push flat @click="$emit('update:keranjang',!keranjang)">
                                    <div class="row items-center">
                                        <q-icon name="shopping_cart" class="col-12"/>
                                        <div class="text-center col-12">
                                            Keranjang
                                        </div>
                                    </div>
                                    <q-badge color="red" floating>4</q-badge>
                                </q-btn>
                        </q-item-section>
                    </q-item>
                    <div class="absolute-bottom">
                        <q-separator spaced/>
                        <q-item>
                            <q-item-section>
                                    <q-btn color="primary" no-caps style="width:60px;height:60px;border-radius:10px;" push flat>
                                        <div class="row items-center">
                                            <q-icon name="logout" class="col-12"/>
                                            <div class="text-center col-12">
                                                Logout
                                            </div>
                                        </div>
                                    </q-btn>
                            </q-item-section>
                        </q-item>
                    </div>

                </q-list>
            </q-scroll-area>
        </q-drawer>
</template>

<script>
export default {
    props:[
        'keranjang'
    ],
    data(){
        return{
            sidebar:true
        }
    },
    methods:{
        bukaKeranjang(){

        }
    }
}
</script>

<style>

</style>