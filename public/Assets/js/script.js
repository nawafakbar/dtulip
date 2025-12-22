const bars = document.querySelector(".bar"),
  close = document.querySelector(".close"),
  menu = document.querySelector(".menu");

const backToTopBtn = document.getElementById("backToTopBtn");

window.onscroll = function() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    
    if (!backToTopBtn.classList.contains("show")) {
      backToTopBtn.classList.add("show");
    }
  } else {
    
    if (backToTopBtn.classList.contains("show")) {
      backToTopBtn.classList.remove("show");
    }
  }
};

backToTopBtn.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});


  
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".home .home-box nav");
  const homeSection = document.querySelector(".home");

  if (window.scrollY > homeSection.offsetHeight) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});


bars.addEventListener("click", () => {
  menu.classList.add("active");
  gsap.from(".menu", {
    opacity: 0,
    duration: 0.3,
  });

  gsap.from(".menu ul", {
    opacity: 0,
    x: -300,
  });
});

function toggleLogoVisibility() {
  var logo = document.getElementById("logo_hilang");
  if (window.innerWidth <= 768) {
    logo.style.display = "none";
  } else {
    logo.style.display = "block";
  }
}

window.onload = toggleLogoVisibility;
window.onresize = toggleLogoVisibility;

close.addEventListener("click", () => {
  menu.classList.remove("active");
});

function animateContent(selector) {
  selector.forEach((selector) => {
    gsap.to(selector, {
      y: 30,
      duration: 0.1,
      opacity: 1,
      delay: 0.2,
      stagger: 0.2,
      ease: "power2.out",
    });
  });
}

function scrollTirggerAnimation(triggerSelector, boxSelectors) {
  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: triggerSelector,
      start: "top 50%",
      end: "top 80%",
      scrub: 1,
    },
  });

  boxSelectors.forEach((boxSelector) => {
    timeline.to(boxSelector, {
      y: 0,
      duration: 1,
      opacity: 1,
    });
  });
}

function scrollTirggerAnimation2(containerSelector, elements) {
  elements.forEach((elementSelector) => {
    gsap.from(elementSelector, {
      scrollTrigger: {
        trigger: containerSelector,
        start: "top 80%",
        end: "bottom 20%", 
        toggleActions: "play none none none",
      },
      opacity: 0,
      y: 50,
      duration: 1,
      ease: "power2.out",
    });
  });
}


function swipeAnimation(triggerSelector, boxSelectors) {
  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: triggerSelector,
      start: "top 50%",
      end: "top 100%",
      scrub: 3,
    },
  });

  boxSelectors.forEach((boxSelector) => {
    timeline.to(boxSelector, {
      x: 0,
      duration: 1,
      opacity: 1,
    });
  });
}

function galleryAnimation(triggerSelector, boxSelectors) {
  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: triggerSelector,
      start: "top 100%",
      end: "bottom 100%",
      scrub: 1,
    },
  });

  boxSelectors.forEach((boxSelector) => {
    timeline.to(boxSelector, {
      y: 0,
      opacity: 1,
      duration: 1,
    });
  });
}

animateContent([".home .content h5, .home .content h1, .home .content p, .home .content .search"]);

scrollTirggerAnimation(".travel", [".travel .box1", ".travel .box2", ".travel .box3"]);

scrollTirggerAnimation(".article", [".article .label", ".article .heading"]);

scrollTirggerAnimation2(".feedback", [".feedback h1", ".feedback .card"]);

swipeAnimation(".destinations", [".destinations .heading", ".destinations .content"]);

swipeAnimation(".feedback", [".feedback h1", ".feedback .card"]);

swipeAnimation(".article", [".article .latest-article", ".article .box1", ".article .box2", ".article .box3", ".article .box4"]);

galleryAnimation(".destinations .gallery", [".destinations .gallery .box1", ".destinations .gallery .box2", ".destinations .gallery .box3", ".destinations .gallery .box4", ".destinations .gallery .box5"]);


galleryAnimation(".featured .gallery", [".featured .gallery .box1", ".featured .gallery .box2", ".featured .gallery .box3", ".featured .gallery .box4"]);

galleryAnimation(".feedback .voices", [".feedback .voices .box1", ".feedback .voices .box2", ".feedback .voices .box3", ".feedback .voices .box4", ".feedback .voices .box5", ".feedback .voices .box6"]);
