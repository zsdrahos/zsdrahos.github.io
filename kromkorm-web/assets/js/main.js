(function() {
  "use strict";

  const select = (el, all = false) => {
    el = el.trim();
    return all ? [...document.querySelectorAll(el)] : document.querySelector(el);
  };
  
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (!selectEl) return;
  
    if (all) {
      selectEl.forEach(e => e.addEventListener(type, listener));
    } else {
      selectEl.addEventListener(type, listener);
    }
  };
  
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener);
  };
  

  const navbarlinks = select('#navbar .scrollto', true);

  const navbarlinksActive = () => {
    const position = window.scrollY + 200;
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return;
      const section = select(navbarlink.hash);
      if (!section) return;
      if (position >= section.offsetTop && position <= section.offsetTop + section.offsetHeight) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    });
  };
  
  window.addEventListener('load', navbarlinksActive);
  onscroll(document, navbarlinksActive);
  
  const scrollto = el => {
    const header = select('#header');
    let offset = header.offsetHeight;
  
    if (!header.classList.contains('header-scrolled')) {
      offset -= 16;
    }
  
    const elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    });
  };
  
  const handleHeader = (selectHeader, nextElement) => {
    const headerOffset = selectHeader.offsetTop;
    const headerFixed = () => {
      if (headerOffset - window.scrollY <= 0) {
        selectHeader.classList.add('fixed-top');
        nextElement.classList.add('scrolled-offset');
      } else {
        selectHeader.classList.remove('fixed-top');
        nextElement.classList.remove('scrolled-offset');
      }
    };
    window.addEventListener('load', headerFixed);
    onscroll(document, headerFixed);
  };
  
  let selectHeader = select('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;
    handleHeader(selectHeader, nextElement);
  }
  
  let selectLogo = document.getElementById('logo');
  if (selectLogo) {
    let headerOffset = selectLogo.offsetTop;
    const handleLogoHeader = () => {
      if (headerOffset - window.scrollY <= 0) {
        selectLogo.parentNode.classList.add('fixed-top-logo');
      } else {
        selectLogo.parentNode.classList.remove('fixed-top-logo');
      }
    };
  
    window.addEventListener('load', handleLogoHeader);
    window.addEventListener('scroll', handleLogoHeader);
  }
  const navbar = select('#navbar');

  on('click', '.mobile-nav-toggle', function(e) {
    navbar.classList.toggle('navbar-mobile');
    this.classList.toggle('bx-menu');
    this.classList.toggle('bx-x');
    this.classList.toggle('feher');
  });

  navbar.addEventListener('click', function(e) {
    if (this.classList.contains('navbar-mobile')) {
      if (e.target.classList.contains('nav-link')) {
        this.classList.remove('navbar-mobile');
        select('.mobile-nav-toggle').classList.remove('bx-x');
        select('.mobile-nav-toggle').classList.remove('feher');
        select('.mobile-nav-toggle').classList.add('bx-menu');
      }
    }
  });
  
  
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  });
  


})()