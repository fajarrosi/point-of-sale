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

        <q-drawer  v-model="rightDrawerOpen" side="right"
        :width="300"
        >
            <q-scroll-area style="width:300px;height:100vh;">
                <div class="q-pa-md" style="width:300px;height:100vh;overflow-wrap: break-word;
  word-wrap: break-word;max-width:300px;">
                    <div class="text-subtitle2 q-mb-sm">Keranjang</div>
                    <q-separator />
                    <div v-for="n in 20" :key="n">
                        <div class="row q-my-md">
                            <div class="col-4">
                                <q-img
                                    src="https://cdn.quasar.dev/img/mountains.jpg"
                                    spinner-color="primary"
                                    spinner-size="82px"
                                    class="btn-radius"
                                />
                            </div>
                            <div class="col-8 row q-pl-md">
                                <span class="ellipsis col-12 text-bold">
                                    Baju ke-1 Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
                                </span>
                                <div class="col-12 row justify-between">
                                    <span class="text-bold col-2">x1</span>
                                    <span class="text-bold col-7">Rp 100.000</span>
                                </div>
                            </div>
                        </div>
                        <q-separator />
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
        <div class="row q-my-lg">
            <div class="col-3 q-pr-lg" v-for="n in 20" :key="n">
                <q-card class="item-card q-mb-lg btn-radius" flat >
                    <q-card-section class="row">
                        <div class="col-4">
                            <q-img
                                src="https://cdn.quasar.dev/img/mountains.jpg"
                                spinner-color="primary"
                                spinner-size="82px"
                                class="btn-radius"
                                height="100px"
                            />
                        </div>
                        <div class="col-8 row q-pl-md">
                            <div class="text-bold  col-12 ">
                                <span class="ellipsis-3-lines">
                                    Baju ke-1 Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
                                    Baju ke-1 Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
                                </span>
                            </div>
                            <div class="text-bold  col-12">
                                Rp 1000.000
                            </div>
                        </div>
                        <div class="row col-12 q-mt-sm justify-between">
                            <div class="col-6">
                                <div class="text-bold q-mb-sm">Jumlah</div>
                                <div class="row items-center">
                                    <q-btn 
                                    no-caps unelevated
                                    style="width:25px;height:25px;border-radius:20px;background:#F7F2F2;"  
                                    >
                                    <div class="row items-center">
                                        <q-icon name="remove" />
                                    </div>
                                    </q-btn>
                                    <span class="q-mx-sm text-h6">1</span>
                                    <q-btn 
                                    no-caps unelevated
                                    style="width:25px;height:25px;border-radius:20px;background:#F7F2F2;" 
                                    >
                                    <div class="row items-center">
                                        <q-icon name="add" />
                                    </div>
                                    </q-btn>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-bold q-mb-sm">Ukuran</div>
                                <div class="row q-mb-sm">
                                    <q-btn 
                                    unelevated
                                    color="accent"
                                    class="q-mr-sm col-6"
                                    style="width:25px;height:25px;border-radius:20px;" 
                                    >
                                        <div class="row items-center">
                                            <span class="text-primary">S</span>
                                        </div>
                                    </q-btn>
                                    <q-btn 
                                    unelevated
                                    color="primary"
                                    class="col-5"
                                    style="width:25px;height:25px;border-radius:20px;"
                                    flat 
                                    >
                                        <div class="row items-center">
                                            <span>M</span>
                                        </div>
                                    </q-btn>
                                </div>
                                <div class="row">
                                    <q-btn 
                                    unelevated
                                    color="primary"
                                    class="q-mr-sm col-6"
                                    style="width:25px;height:25px;border-radius:20px;"
                                    flat 
                                    >
                                        <div class="row items-center">
                                            <span>L</span>
                                        </div>
                                    </q-btn>
                                    <q-btn 
                                    unelevated
                                    color="primary"
                                    class="col-5"
                                    style="width:25px;height:25px;border-radius:20px;"
                                    flat 
                                    >
                                        <div class="row items-center">
                                            <span>XL</span>
                                        </div>
                                    </q-btn>
                                </div>
                            </div>
                        </div>
                            <q-btn color="primary" unelevated class="text-white col-12 btn-radius q-mt-sm" label="Tambah Ke Keranjang" no-caps/>
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