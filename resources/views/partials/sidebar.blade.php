 <!-- 1. Sidebar -->
 <aside class="sidebar" id="sidebar">
    <div>
        <!-- Logo -->
        <div class="logo-section">
            <img src="/images/logo.png" alt="Logo" class="logo-icon">
            <span class="btn logo-text">ERP_Dash</span>
        </div>
        
        <!-- Navigation -->
        <nav class="nav-list">
            <!-- Nav Item Component -->
            <button class="nav-item" onclick="handleNavigation('Dashboard')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l-7-7-7 7m10 0v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span>Dashboard</span>
            </button>
            <button class="nav-item" onclick="handleNavigation('Order')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                <span>Order</span>
            </button>
            <!-- Active Link: Product -->
            <button class="nav-item nav-item-active" onclick="handleNavigation('Product')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                <span>Product</span>
            </button>
            <button class="nav-item" onclick="handleNavigation('Customer')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20v-2c0-.38-.057-.75-.164-1.096m0 0a1.232 1.232 0 01-.164-1.096m0 0l.164-1.096m0 0l-3.23-2.154M12 11c2.21 0 4-1.343 4-3s-1.79-3-4-3-4 1.343-4 3 1.79 3 4 3z"></path></svg>
                <span>Customer</span>
            </button>
            <button class="nav-item" onclick="handleNavigation('Employee')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span>Employee</span>
            </button>
            <button class="nav-item" onclick="handleNavigation('Billing')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <span>Billing</span>
            </button>
            <button class="nav-item" onclick="handleNavigation('Analytics')">
                <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                <span>Analytics</span>
            </button>
            
            <div class="nav-divider nav-list">
                <button class="nav-item" onclick="handleNavigation('Setting')">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span style="flex-grow: 1;">Setting</span>
                    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <button class="nav-item" onclick="handleNavigation('Help')">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9.247a1 1 0 01.358-.87l1.458-.876a1 1 0 011.054 0l1.458.876a1 1 0 01.358.87V12a1 1 0 001 1h2a1 1 0 011 1v2a1 1 0 01-1 1h-7a1 1 0 01-1-1v-2a1 1 0 001-1v-2a1 1 0 011-1h2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19H8a4 4 0 01-4-4V7a4 4 0 014-4h8a4 4 0 014 4v8a4 4 0 01-4 4h-1"></path></svg>
                    <span>Help</span>
                </button>
            </div>

        </nav>
    </div>

    <!-- Log out -->
    <button class="nav-item nav-item-logout" onclick="handleNavigation('Log Out')">
        <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        <a class="btn" href="{{route('login.logout')}}"><span>Log out</span>
        </a>
    </button>
</aside>
