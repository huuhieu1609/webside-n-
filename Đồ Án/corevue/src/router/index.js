import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save
import Blank from "../layout/wrapper/blank.vue";

const routes = [
//admin
   {
      path: '/admin/Voucher',
      component: () => import('../components/admin/Voucher/index.vue')
   },
   {
      path: '/admin/demo',
      component: () => import('../components/admin/demomeunu/index.vue'),
      meta: { layout: 'blank' },
   },

   {
      path: '/admin/Danh-Muc',
      component: () => import('../components/admin/Danh-Muc/index.vue')
   },
   {
      path: '/admin/danh-sach-quan-an',
      component: () => import('../components/admin/danh_sach_quanan/index.vue')
   },
   {
      path: '/admin/profile',
      component: () => import('../components/admin/profile/index.vue')
   },
   {
      path: '/admin/danh-sach-hoa-don',
      component: () => import('../components/admin/danh_sach_hoadon/index.vue')
   },
   {
      path: '/admin/phan-quyen',
      component: () => import('../components/admin/phan_quyen/index.vue')
   },
   

   //đây là khách hàng
   {
      path: '/khach-hang/dang-nhap',
      component: () => import('../components/Khach_hang/dang_nhap/indev.vue'),
      meta: { layout: 'blank' },
   },
   {
      path: '/khach-hang/dang-ky',
      component: () => import('../components/Khach_hang/dang_ky/index.vue'),
      meta: { layout: 'blank' },
   },
   {
      path: '/khach-hang/danh-sach-khach-hang',
      component: () => import('../components/Khach_hang/danh_sach_khach_hang/index.vue'),
   },

   //shipper
   {
      path: '/shipper/danh-sach-shipper',
      component: () => import('../components/Shipper/danh_sach_shipper/index.vue'),
   }, {
      path : '/shipper/dang-ky',
      component: ()=>import('../components/Shipper/dang_ky/index.vue'),
      meta:{layout: 'blank'},
   },
   //Quán ăn
   {
      path : '/quan-an/dang-ky',
      component: ()=>import('../components/quan_an/dang_ky/index.vue'),
      meta:{layout: 'blank'},
   },


]

const router = createRouter({
   history: createWebHistory(),
   routes: routes
})

export default router