<template>
    <q-layout view="hHh LpR lFr">

        <q-drawer show-if-above v-model="leftDrawerOpen" 
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
                            <q-btn color="primary" no-caps style="width:60px;height:60px;border-radius:10px;" push >
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
                                <q-btn color="primary" no-caps style="width:60px;height:60px;border-radius:10px;" push flat @click="toggleRightDrawer">
                                    <div class="row items-center">
                                        <q-icon name="shopping_cart" class="col-12"/>
                                        <div class="text-center col-12">
                                            Keranjang
                                        </div>
                                    </div>
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

        <q-drawer  v-model="rightDrawerOpen" side="right"
        :width="300"
        >
            <q-scroll-area class="fit">
                <div class="q-pa-md">
                    <div class="text-subtitle2 q-mb-sm">Keranjang</div>
                    <q-separator />
                    <div v-for="n in 100" :key="n">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                    </div>
                </div>
            </q-scroll-area>
        </q-drawer>

        <q-page-container>
            <q-page class="bg-secondary" padding>
                    <div class="row justify-between">
            <div class=" text-h4 col-4 text-bold">Pilih Kategori</div>
            <q-input filled bottom-slots v-model="search" type="text" label="Search" class="col-3" bg-color="white">
                <template v-slot:append>
                    <q-icon v-if="search !== ''" name="close" @click="search = ''" class="cursor-pointer" />
                    <q-btn round dense flat icon="search" />
                </template>
            </q-input>
        </div>
        <div class="row">
            <q-btn color="white" label="Semua" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori1" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori2" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori3" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori4" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori5" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori6" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            <q-btn color="white" label="kategori7" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
        </div>
        <div class="row q-mt-lg">
            <div class="col-3 q-pr-lg" v-for="n in 12" :key="n">
                <q-card class="item-card q-mb-lg btn-radius" flat >
                    <q-card-section class="row q-pb-none">
                        <div class="col-12">
                            <q-img
                                src="https://cdn.quasar.dev/img/mountains.jpg"
                                spinner-color="primary"
                                spinner-size="82px"
                                class="btn-radius"
                            />
                        </div>
                        <div class="text-h6 col-12">Baju ke-1</div>
                    </q-card-section>
                    <q-card-section class="row">
                        <div class="col-12">
                            <div class="text-h6">Ukuran</div>
                            <q-btn color="white" label="S" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="M" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="L" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="XL" class="text-black q-mr-sm " dense round/>
                        </div>
                        <div class="col-12 q-mt-md">
                            <div class="text-h6">Jumlah</div>
                            <div class="row items-center">
                                <q-btn color="white" icon="remove" class="text-black col-2" dense round/>
                                <span class="text-h6 col-2 q-pl-md">1</span>
                                <q-btn color="white" icon="add" class="text-black col-2" dense round/>
                            </div>
                        </div>
                        <div class="text-h5 col-12 text-bold q-mt-md">Rp 5000</div>
                        <q-btn color="primary" class="text-white col-12 btn-radius q-mt-lg" label="Tambah Ke Billing" no-caps/>
                    </q-card-section>
                </q-card>
            </div>
        </div>
                    <div class="text-primary">@Copyright - Fajar Ilham Rosi - 2021 - POS Busana Muslim</div>
            </q-page>
        </q-page-container>

    </q-layout>
</template>

<script>
import { ref } from 'vue'

export default {
  setup () {
    const rightDrawerOpen = ref(false)
    

    return {
      leftDrawerOpen : ref(true),
      rightDrawerOpen,
      toggleRightDrawer () {
        rightDrawerOpen.value = !rightDrawerOpen.value
      }
    }
  },
   data(){
        return{
            search:'',
        }
    }
}
</script>