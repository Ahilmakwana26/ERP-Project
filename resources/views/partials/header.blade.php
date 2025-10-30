 <!-- Header / Search Bar -->
 <header class="header-bar">
                        
    <!-- User and Icons -->
    <div class="user-controls">
        <div class="menuicon">
            <i class="ri-menu-line"></i>
        </div>
        <button class="control-button" onclick="handleClick('Notifications')">
            <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="notification-dot"></span>
        </button>
        <button class="control-button" id="theme" onclick="handleClick('Save/Export')">
            <i class="ri-sun-line"></i>
        </button>

        <!-- User Profile -->
        <div class="profile-section">
            <img src="/images/user.jpg" alt="Jane Cooper" class="profile-img">
            <div class="profile-text">
                <p class="btn name">{{Auth::user()->name}}</p>
                <p class="email">{{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
</header>
