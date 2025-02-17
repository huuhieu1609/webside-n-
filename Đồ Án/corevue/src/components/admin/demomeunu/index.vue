<template>
	<div class="sticky top-0 z-[9]" id="app_header">
	  <div class="app-header z-[999] bg-white shadow-sm dark:bg-slate-800 dark:shadow-slate-700">
		<div class="flex h-full items-center justify-between">
		  
		  <!-- Vertical Box for Mobile Logo and Menu -->
		  <div class="vertical-box flex items-center space-x-4 rtl:space-x-reverse md:space-x-4">
			<div class="inline-block xl:hidden">
			  <a class="flex items-center" href="https://shopaccplay.com">
				<img 
				  :src="isDarkMode ? '/uploads/22-06-2024/8cd4b6df-c202-4bec-896a-eccd68522fd6.png' : '/uploads/15-01-2025/f51412c2-d764-4bfb-b58b-474920a0204d.png'" 
				  class="black_logo w-[130px] md:min-w-[150px] h-[40px]" 
				  alt="SHOPACCPLAY - Shop Bán NICK PLAYTOGETHER Giá Rẻ - Uy Tín - Chất Lượng"
				/>
			  </a>
			</div>
			<button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
			  <iconify-icon class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
			</button>
			<button class="sidebarOpenButton !ml-0 text-xl text-slate-900 dark:text-white">
			  <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
			</button>
		  </div>
  
		  <!-- Horizontal Box for Main Logo and Menu -->
		  <div class="horizental-box items-center space-x-4 rtl:space-x-reverse">
			<a class="flex items-center" href="https://shopaccplay.com">
			  <img 
				:src="isDarkMode ? '/uploads/22-06-2024/8cd4b6df-c202-4bec-896a-eccd68522fd6.png' : '/uploads/15-01-2025/f51412c2-d764-4bfb-b58b-474920a0204d.png'" 
				class="black_logo w-[130px] md:min-w-[150px] h-[40px]" 
				alt="SHOPACCPLAY - Shop Bán NICK PLAYTOGETHER Giá Rẻ - Uy Tín - Chất Lượng"
			  />
			</a>
			<button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
			  <iconify-icon class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
			</button>
		  </div>
  
		  <!-- Horizontal Navigation -->
		  <div class="main-menu">
			<ul class="whitespace-nowrap">
			  <li v-for="(menuItem, index) in menuItems" :key="index" class="menu-item-has-children">
				<a :href="menuItem.href" class="transition-all hover:scale-[105%]">
				  <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
					<span class="icon-box">
					  <iconify-icon :icon="menuItem.icon"></iconify-icon>
					</span>
					<div class="text-box">{{ menuItem.text }}</div>
				  </div>
				</a>
			  </li>
			</ul>
		  </div>
  
		  <!-- Navigation Tools (Social Icons, User Dropdown, etc.) -->
		  <div class="nav-tools leading-0 flex items-center space-x-3 rtl:space-x-reverse lg:space-x-5">
			
			<a href="https://www.facebook.com/Shopaccplay/" target="_blank" class="social-icon">
			  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/1024px-2023_Facebook_icon.svg.png" alt="Facebook">
			</a>
			
			<a href="https://www.tiktok.com/@shopaccplay" target="_blank" class="social-icon">
			  <img src="https://static.vecteezy.com/system/resources/previews/016/716/450/non_2x/tiktok-icon-free-png.png" alt="TikTok">
			</a>
  
			<a href="https://zalo.me/g/cktnhp453" target="_blank" class="social-icon">
			  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/1200px-Icon_of_Zalo.svg.png" alt="Zalo">
			</a>
  
			<div>
			  <button id="themeMood" @click="toggleTheme" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
				<iconify-icon v-if="isDarkMode" class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
				<iconify-icon v-if="!isDarkMode" class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
			  </button>
			</div>
  
			<div>
			  <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
				<iconify-icon class="text-slate-800 dark:text-white text-xl" icon="mdi:paint-outline"></iconify-icon>
			  </button>
			</div>
  
			<div class="leading-0 hidden w-full md:block dark:bg-white">
			  <button class="inline-flex items-center rounded-lg text-center text-sm font-medium text-slate-800 focus:outline-none focus:ring-0 dark:text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				<div class="h-7 w-7 flex-1 rounded-full ltr:mr-[10px] rtl:ml-[10px] lg:h-8 lg:w-8">
				  <img class="block h-full w-full rounded-full object-cover" src="https://shopaccplay.com/images/avatar/av-1.svg" alt="user">
				</div>
				<div class="ltr:text-left rtl:text-right">
				  <span class="hidden flex-none items-center overflow-hidden text-ellipsis whitespace-nowrap text-sm font-bold text-slate-600 dark:text-white lg:flex">
					Khách
				  </span>
				  <small class="text-danger-600 block text-[15px] font-bold">0 ₫</small>
				</div>
				<svg class="ml-[10px] inline-block h-[16px] w-[16px] text-base rtl:mr-[10px] dark:text-white lg:inline-block" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
				</svg>
			  </button>
			  <!-- Dropdown menu -->
			  <div class="dropdown-menu !top-[23px] z-10 hidden w-44 divide-y divide-slate-100 overflow-hidden rounded-md border bg-white shadow dark:border-slate-700 dark:bg-slate-800">
				<ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
				  <li>
					<a href="https://shopaccplay.com/login" class="font-inter flex items-center px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
					  <iconify-icon class="text-textColor mr-2 text-lg dark:text-white" icon="material-symbols:login"></iconify-icon>
					  <span class="dropdown-option">
						Đăng Nhập
					  </span>
					</a>
				  </li>
				  <li>
					<a href="https://shopaccplay.com/register" class="font-inter flex items-center px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
					  <iconify-icon class="text-textColor mr-2 text-lg dark:text-white" icon="solar:user-linear"></iconify-icon>
					  <span class="dropdown-option">
						Tạo Tài Khoản
					  </span>
					</a>
				  </li>
				  <li>
					<a href="https://shopaccplay.com/password/reset" class="font-inter flex items-center px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
					  <iconify-icon class="text-textColor mr-2 text-lg dark:text-white" icon="solar:password-linear"></iconify-icon>
					  <span class="dropdown-option">
						Quên Mật Khẩu?
					  </span>
					</a>
				  </li>
				</ul>
			  </div>
			</div>
  
			<button class="smallDeviceMenuController leading-0 block md:hidden">
			  <iconify-icon class="cursor-pointer text-2xl text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
			</button>
		  </div>
		</div>
	  </div>
	</div>
  </template>
  
  <script>
  export default {
	data() {
	  return {
		isDarkMode: false,
		menuItems: [
		  { href: 'https://shopaccplay.com/home', text: 'Trang Chủ', icon: 'ic:twotone-dashboard' },
		  { href: 'https://shopaccplay.com/account/profile', text: 'Tài Khoản', icon: 'iconamoon:profile' },
		  { href: 'https://shopaccplay.com/account/orders/accounts', text: 'Tài Khoản Loại 1', icon: 'healthicons:1' },
		  { href: 'https://shopaccplay.com/account/orders/accounts-v2', text: 'Tài Khoản Loại 2', icon: 'healthicons:2' },
		  { href: 'https://shopaccplay.com/account/profile/transactions', text: 'Dòng Tiền', icon: 'grommet-icons:money' },
		  { href: 'https://shopaccplay.com/news', text: 'Tin Tức', icon: 'wpf:news' }
		]
	  };
	},
	methods: {
	  toggleTheme() {
		this.isDarkMode = !this.isDarkMode;
	  }
	}
  };
  </script>
  
  <style scoped>
  /* Add your styles here */
  </style>
  