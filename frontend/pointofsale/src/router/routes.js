
const routes = [
  {
    path: '/',
    component: () => import('layouts/AuthLayout.vue'),
    children:[
      {path:'',component: () => import('pages/auth/Login.vue')},
      {path:'register',component:() => import('pages/auth/Register.vue')},
      {path:'otp',component:() => import('pages/auth/Otp.vue')},
      {path:'forgot',component:() => import('pages/auth/Forgot.vue')},
      {path:'forgot-success',component:() => import('pages/auth/ForgotSuccess.vue')},
    ]
  },
  // {
  //   path:'/login',
  //   component: ()=> import('pages/Login.vue')
  // },
  {
    path:'/user',
    component:()=> import('layouts/KasirLayout.vue'),
    children:[
      {
        path:'/kasir',
        name:'kasir',
        component: () => import('pages/Kasir.vue')
      },
      {
        path:'/manajer',
        name:'manajer',
        component:() => import('pages/Manajer.vue')
      },
      {
        path:'/data-kasir',
        name:'Data Kasir',
        component:()=> import('pages/manajer/DataKasir.vue'),
        meta:{
          manajer:true
        }
      },
      {
        path:'/data-supplier',
        name:'Data Supplier',
        component:()=> import('pages/manajer/DataSupplier.vue'),
        meta:{
          manajer:true
        }
      },
      {
        path:'/stok-produk',
        name:'stok produk',
        component:()=> import('pages/manajer/StokProduk.vue'),
        meta:{
          manajer:true
        }
      },
      {
        path:'/cetak-penjualan',
        name:'cetak penjualan',
        component:()=> import('pages/manajer/CetakPenjualan.vue'),
        meta:{
          manajer:true
        }
      },
      {
        path:'/cetak-pembelian',
        name:'cetak pembelian',
        component:()=> import('pages/manajer/CetakPembelian.vue'),
        meta:{
          manajer:true
        }
      },
    ]
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
