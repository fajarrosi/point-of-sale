let menu = [
    {
        name : 'Dashboard',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:true
        }
    },
    {
        name : 'Kasir',
        icon : 'home_max',
        access:{
            manajer:false,
            kasir:true
        }
    },
    {
        name : 'Data Kasir',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:false
        }
    },
    {
        name : 'Data Supplier',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:false
        }
    },
    {
        name : 'Stok Produk',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:false
        }
    },
    {
        name : 'Cetak Penjualan',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:false
        }
    },
    {
        name : 'Cetak Pembelian',
        icon : 'home_max',
        access:{
            manajer:true,
            kasir:false
        }
    },
]

export { menu }