
  const sidebarLinks = document.querySelectorAll('.sidebar-menu li a');
  
  sidebarLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
     
      if (link.classList.contains('logout')) return;
 
      sidebarLinks.forEach(function(l) {
        l.classList.remove('active');
      });
      
      this.classList.add('active');
    });
  });
