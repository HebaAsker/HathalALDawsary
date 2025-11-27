
const faders = document.querySelectorAll('.fade-in');
const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
const appearOnScroll = new IntersectionObserver(function (entries, observer) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    entry.target.classList.add('visible');
    observer.unobserve(entry.target);
  });
}, appearOptions);

faders.forEach(fader => appearOnScroll.observe(fader));

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
  });
});

window.addEventListener('load', () => {
  const heroTexts = document.querySelectorAll('.pb_cover_v1 .fade-in');
  heroTexts.forEach((el, i) => {
    setTimeout(() => el.classList.add('visible'), i * 600); 
  });
});


const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.innerText;
    const count = +counter.getAttribute('data-count') || target;
    let current = 0;
    const increment = target / 200; 
    const interval = setInterval(() => {
      current += increment;
      if (current >= target) {
        counter.innerText = target + (counter.innerText.includes('+') ? '+' : '');
        clearInterval(interval);
      } else {
        counter.innerText = Math.floor(current) + (counter.innerText.includes('+') ? '+' : '');
      }
    }, 20); 
  };
  updateCount();
});


const scrollBtn = document.getElementById('scrollToTop');
window.addEventListener('scroll', () => {
  if (window.scrollY > 300) {
    scrollBtn.style.display = 'block';
  } else {
    scrollBtn.style.display = 'none';
  }
});


scrollBtn.addEventListener('click', (e) => {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
