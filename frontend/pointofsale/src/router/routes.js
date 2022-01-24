
const routes = [
  {
    path: '/',
    component: () => import('layouts/AuthLayout.vue'),
    children:[
      {path:'',name:'login',component: () => import('pages/auth/Login.vue')},
      {path:'register',component:() => import('pages/auth/Register.vue')},
      {path:'otp',component:() => import('pages/auth/Otp.vue')},
      {path:'forgot',component:() => import('pages/auth/Forgot.vue')},
      {path:'forgot-success',component:() => import('pages/auth/ForgotSuccess.vue')},
    ]
  },
  {
    path:'/user',
    component:()=> import('layouts/KasirLayout.vue'),
    children:[
      { 
        path:'/dashboard',
        name:'Dashboard',
        component:()=>import('pages/Dashboard.vue'),
        meta:{
          access:{
            kasir:true,
            manajer:true
          }
        }
      },
      {
        path:'/kasir',
        name:'Kasir',
        component: () => import('pages/Kasir.vue'),
        meta:{
          access:{
            kasir:true,
            manajer:false
          }
        }
      },
      {
        path:'/data-kasir',
        name:'Data Kasir',
        component:()=> import('pages/manajer/DataKasir.vue'),
        meta:{
          access:{
            kasir:false,
            manajer:true
          }
        }
      },
      {
        path:'/data-supplier',
        name:'Data Supplier',
        component:()=> import('pages/manajer/DataSupplier.vue'),
        meta:{
          access:{
            kasir:false,
            manajer:true
          }
        }
      },
      {
        path:'/stok-produk',
        name:'Stok Produk',
        component:()=> import('pages/manajer/StokProduk.vue'),
        meta:{
          access:{
            kasir:false,
            manajer:true
          }
        }
      },
      {
        path:'/cetak-penjualan',
        name:'Cetak Penjualan',
        component:()=> import('pages/manajer/CetakPenjualan.vue'),
        meta:{
          access:{
            kasir:false,
            manajer:true
          }
        }
      },
      {
        path:'/cetak-pembelian',
        name:'Cetak Pembelian',
        component:()=> import('pages/manajer/CetakPembelian.vue'),
        meta:{
          access:{
            kasir:false,
            manajer:true
          }
        }
      },
    ],
    meta:{
      requireAuth:true,
      userverified:true
    }
  },
 
  {
    path:'/testing',
    component:()=> import('pages/Testing.vue')
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
