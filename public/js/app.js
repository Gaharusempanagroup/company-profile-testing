// ========== LANGUAGE SWITCHER ==========
let currentLang = localStorage.getItem('lang') || 'id';

function switchLang(lang) {
    currentLang = lang;
    localStorage.setItem('lang', lang);

    // Update switcher buttons
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.lang === lang);
    });

    // Update all elements with data-id / data-en attributes
    document.querySelectorAll('[data-id], [data-en]').forEach(el => {
        const text = lang === 'en' ? el.dataset.en : el.dataset.id;
        if (text !== undefined) {
            el.textContent = text;
        }
    });

    // Update placeholders for inputs/textareas (data-placeholder-id / data-placeholder-en)
    document.querySelectorAll('[data-placeholder-id], [data-placeholder-en]').forEach(el => {
        const ph = lang === 'en' ? el.dataset.placeholderEn : el.dataset.placeholderId;
        if (ph !== undefined) {
            el.placeholder = ph;
        }
    });

    // Update portfolio filter data-category mapping if needed
    // (filter buttons already have data-id/data-en attributes handled above)
}

// ========== NAVBAR SCROLL EFFECT ==========
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}, { passive: true });

// ========== MOBILE MENU ==========
const navToggle = document.getElementById('navToggle');
const mobileMenu = document.getElementById('mobileMenu');

navToggle.addEventListener('click', () => {
    navToggle.classList.toggle('open');
    mobileMenu.classList.toggle('open');
});

// Close mobile menu on link click
document.querySelectorAll('.mobile-nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navToggle.classList.remove('open');
        mobileMenu.classList.remove('open');
    });
});

// ========== SMOOTH SCROLL ==========
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const navHeight = navbar.offsetHeight + 20;
            const offset = target.getBoundingClientRect().top + window.scrollY - navHeight;
            window.scrollTo({ top: offset, behavior: 'smooth' });
        }
    });
});

// ========== PORTFOLIO SWIPER ==========
let portfolioSwiper;
let allPortfolioSlides = []; // Saved once on init

function initPortfolioSwiper() {
    portfolioSwiper = new Swiper('.portfolio-swiper', {
        slidesPerView: 1,
        grid: {
            rows: 2,
            fill: 'row'
        },
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                grid: { rows: 2 }
            },
            1024: {
                slidesPerView: 3,
                grid: { rows: 2 }
            }
        }
    });
}


let isFiltering = false; // guard against rapid clicks

function filterPortfolio(filter) {
    if (isFiltering) return;
    const wrapper = document.getElementById('pfGrid');
    const swiperEl = document.querySelector('.portfolio-swiper');
    if (!wrapper || !swiperEl) return;

    isFiltering = true;

    // --- FADE OUT ---
    swiperEl.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
    swiperEl.style.opacity = '0';
    swiperEl.style.transform = 'scale(0.97)';

    setTimeout(() => {
        // Destroy Swiper
        if (portfolioSwiper) {
            portfolioSwiper.destroy(true, true);
            portfolioSwiper = null;
        }

        // Rebuild wrapper with filtered slides
        while (wrapper.firstChild) wrapper.removeChild(wrapper.firstChild);

        const slidesToShow = filter === 'all'
            ? allPortfolioSlides
            : allPortfolioSlides.filter(slide => {
                const item = slide.querySelector('.portfolio-item');
                return item && item.dataset.category === filter;
            });

        slidesToShow.forEach(slide => wrapper.appendChild(slide));

        // Reinit Swiper
        initPortfolioSwiper();

        // --- FADE IN ---
        // Let browser paint the new layout first
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                swiperEl.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
                swiperEl.style.opacity = '1';
                swiperEl.style.transform = 'scale(1)';
                isFiltering = false;
            });
        });
    }, 260); // wait for fade-out to finish
}



document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        filterPortfolio(this.dataset.filter);
    });
});

// ========== HERO PARALLAX ==========
const heroBg = document.getElementById('heroBg');
window.addEventListener('scroll', () => {
    if (heroBg) {
        const scrolled = window.scrollY;
        heroBg.style.transform = `scale(1.05) translateY(${scrolled * 0.3}px)`;
    }
}, { passive: true });

// ========== AOS INIT ==========
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 750,
        once: true,
        offset: 80,
        easing: 'ease-out-cubic',
    });

    initPortfolioSwiper();

    // Save all slides ONCE after Swiper is initialized
    const wrapper = document.getElementById('pfGrid');
    if (wrapper) {
        allPortfolioSlides = Array.from(wrapper.querySelectorAll('.swiper-slide'));
    }

    // Init company sections
    document.querySelectorAll('.company-section').forEach(el => {
        el.style.transition = 'opacity 0.4s ease';
    });

    // Apply saved language preference on load
    switchLang(currentLang);
});

// ========== ACTIVE NAV LINK ON SCROLL (scroll-position based) ==========
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.navbar-menu a');

function updateActiveNav() {
    const scrollPos = window.scrollY + navbar.offsetHeight + 40;
    const atBottom = (window.scrollY + window.innerHeight) >= (document.body.offsetHeight - 10);

    let current = '';

    if (atBottom) {
        // At bottom of page — force last section active
        current = sections[sections.length - 1].id;
    } else {
        sections.forEach(section => {
            if (section.offsetTop <= scrollPos) {
                current = section.id;
            }
        });
    }

    navLinks.forEach(link => {
        link.style.color = link.getAttribute('href') === `#${current}`
            ? 'var(--gold-light)'
            : '';
    });
}

window.addEventListener('scroll', updateActiveNav, { passive: true });
// Run once on load
updateActiveNav();
