document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const openBtn = document.getElementById('open-btn');
    const spNav = document.getElementById('sp-nav');
    const closeBtn = document.getElementById('close-btn');
    
    let sclollY = 0;

    openBtn.addEventListener('click', () => {
      sclollY = window.scrollY;
         spNav.dataset.status = "open";
         body.dataset.menu = "open";
         body.style.position = "fixed";
         body.style.top = '-${sclollY}px';
         body.style.width = '100%';
        
    });

    closeBtn.addEventListener('click', () => {
          spNav.dataset.status = "close";
          body.dataset.menu = "close";
          body.style.position = "";
          body.style.top = '';
          body.style.width = '';
          window.scrollTo(0, sclollY);
    });

});

