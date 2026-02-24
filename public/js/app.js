// ========== COMPANY SWITCHER ==========
let currentCompany = 'gsg';

function switchCompany(company) {
    currentCompany = company;

    // Update switcher buttons
    document.querySelectorAll('.switcher-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.company === company);
    });

    // Animate sections
    const sections = ['tentang', 'portfolio'];
    sections.forEach(section => {
        const active = document.getElementById(`${section}-${company}`);
        const other  = document.getElementById(`${section}-${company === 'gsg' ? 'kak' : 'gsg'}`);
        if (other) {
            other.style.opacity = '0';
            setTimeout(() => {
                other.classList.remove('active');
                if (active) {
                    active.classList.add('active');
                    requestAnimationFrame(() => { active.style.opacity = '1'; });
                }
            }, 250);
        }
    });

    // Update hero badge
    const badge = document.getElementById('hero-company-label');
    if (badge) {
        badge.textContent = company === 'gsg'
            ? 'PT. Gaharu Sempana · Est. 1994'
            : 'PT. Kencana Adhi Karma · Est. 1988';
    }

    // Reset portfolio filter to 'all'
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
    if (allBtn) allBtn.classList.add('active');
    filterPortfolio('all');
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
const navToggle  = document.getElementById('navToggle');
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
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const navHeight = navbar.offsetHeight + 20;
            const offset    = target.getBoundingClientRect().top + window.scrollY - navHeight;
            window.scrollTo({ top: offset, behavior: 'smooth' });
        }
    });
});

// ========== PORTFOLIO FILTER ==========
function filterPortfolio(filter) {
    const activeGrid = document.getElementById(`pfGrid-${currentCompany}`);
    if (!activeGrid) return;

    const items = activeGrid.querySelectorAll('.portfolio-item');
    items.forEach((item, i) => {
        const cat = item.dataset.category;
        const show = filter === 'all' || cat === filter;
        item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        if (show) {
            item.style.opacity   = '1';
            item.style.transform = 'scale(1)';
            item.style.display   = '';
        } else {
            item.style.opacity   = '0';
            item.style.transform = 'scale(0.95)';
            setTimeout(() => { if (!show) item.style.display = 'none'; }, 300);
        }
    });
}

document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
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

    // Init company sections
    document.querySelectorAll('.company-section').forEach(el => {
        el.style.transition = 'opacity 0.4s ease';
    });
});

// ========== ACTIVE NAV LINK ON SCROLL (Intersection Observer) ==========
const sections = document.querySelectorAll('section[id]');
const navLinks  = document.querySelectorAll('.navbar-menu a');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navLinks.forEach(link => {
                link.style.color = link.getAttribute('href') === `#${entry.target.id}`
                    ? 'var(--gold-light)'
                    : '';
            });
        }
    });
}, { threshold: 0.35 });

sections.forEach(s => observer.observe(s));
