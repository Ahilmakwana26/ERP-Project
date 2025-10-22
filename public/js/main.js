 //sider bar close or open Logic
 let menuicon=document.querySelector('.menuicon');
 let sidebar=document.querySelector('#sidebar');
 let headerbar=document.querySelector(".header-bar");
 let isopen=false;
 menuicon.addEventListener("click",function(e){
     e.stopPropagation();
     if(!isopen)//true
     {
         sidebar.style.display="block";
         isopen=true;
     }else{
         sidebar.style.display="none";
         isopen=false;
     }
 });
 document.addEventListener("click",function(e){
     if (window.innerWidth <= 768) {  // only run on mobile
         if (isopen && !sidebar.contains(e.target) && !menuicon.contains(e.target)) {
             sidebar.style.display = "none";
             isopen = false;
         }
     }
 })
 window.addEventListener("resize",function(){
     if(window.innerWidth>768){
         sidebar.style.display="block";
         isopen=true;
     }else{
         sidebar.style.display="none";
         isopen=false;
     }
 })

 function handleClick(action) {
     console.log(`Action clicked: ${action}`);
 }
 //end
 function handleNavigation(page) {
     console.log(`Navigating to: ${page}`);
     
     // Manage the active state class on the buttons
     const navButtons = document.querySelectorAll('.sidebar .nav-item');
     navButtons.forEach(btn => {
         btn.classList.remove('nav-item-active');
     });

     // Find the current button and make it active (excluding log out)
     if (page !== 'Log Out') {
         const currentButton = Array.from(navButtons).find(btn => btn.textContent.trim().includes(page));
         if (currentButton) {
             currentButton.classList.add('nav-item-active');
         
         }
     }
 }
 //theme chenge Logic
 let themeicon=document.getElementById('theme');
 let elements = document.querySelectorAll('body,.sidebar, .header-bar, .user-card, #search-bar, .btn');
 let logo=document.querySelector('.logo-section img');

 themeicon.addEventListener("click",function(){
         document.body.classList.toggle('dark-mode');
         let isDark=document.body.classList.contains('dark-mode');
         localStorage.setItem('theme',isDark ? 'dark':'light');
         themeicon.innerHTML = isDark
             ? `<i class="ri-contrast-2-line"></i>`
             : `<i class="ri-sun-line"></i>`;
         logo.src =isDark ? '/images/logo.png' : '/images/logo_dark.png'
             elements.forEach(el => {
             el.classList.toggle("dark-mode-sidebar-table", isDark);
         });
     });
 window.addEventListener("load",function(){
     if(localStorage.getItem('theme')==='dark'){
         document.body.classList.add('dark-mode');
         themeicon.innerHTML=`<i class="ri-contrast-2-line">`;
         elements.forEach(el=>el.classList.add('dark-mode-sidebar-table'));
     }
 })
