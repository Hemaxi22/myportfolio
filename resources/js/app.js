import './bootstrap';

import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('DOMContentLoaded', () => {
    // Smoother AOS initialization
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic',
    });

    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.pointerEvents = 'none';
        }, 700);
    }

    // Typing effect
    const roles = ['Laravel Developer', 'PHP Developer', 'Backend Developer', 'Web Developer'];
    const typingEl = document.getElementById('typing-text');
    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    const type = () => {
        if (!typingEl) return;
        const currentRole = roles[roleIndex];
        typingEl.textContent = isDeleting
            ? currentRole.substring(0, charIndex--)
            : currentRole.substring(0, charIndex++);

        if (!isDeleting && charIndex === currentRole.length + 1) {
            isDeleting = true;
            setTimeout(type, 1500); // Wait longer when finished typing
            return;
        }

        if (isDeleting && charIndex < 0) {
            isDeleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
        }
        setTimeout(type, isDeleting ? 50 : 100);
    };
    type();

    // Smoother GSAP Hero Entrance
    gsap.from('.hero-bg-blob', { 
        scale: 0.5, 
        opacity: 0, 
        duration: 2.5, 
        stagger: 0.6, 
        ease: 'power3.out' 
    });
    
    const heroTimeline = gsap.timeline({ delay: 0.5 });
    heroTimeline
        .from('.exact-badge', { y: -30, opacity: 0, duration: 1.2, ease: 'power4.out' })
        .from('.exact-hero-title', { y: 40, opacity: 0, duration: 1.2, ease: 'power4.out' }, '-=0.8')
        .from('.exact-hero-subtitle', { y: 30, opacity: 0, duration: 1.2, ease: 'power4.out' }, '-=0.8')
        .from('.exact-hero-desc', { y: 30, opacity: 0, duration: 1.2, ease: 'power4.out' }, '-=0.8')
        .from('.exact-btn', { 
            y: 25, 
            opacity: 0, 
            duration: 1, 
            stagger: 0.2, 
            ease: 'back.out(1.7)' 
        }, '-=0.6');

    // Skill Progress Bars
    const progressBars = document.querySelectorAll('.skill-progress');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const width = element.getAttribute('data-width') || '0';
                gsap.to(element, { width: `${width}%`, duration: 1.5, ease: 'power2.out' });
                skillObserver.unobserve(element);
            }
        });
    }, { threshold: 0.35 });

    progressBars.forEach((bar) => skillObserver.observe(bar));

    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                const counter = entry.target;
                const target = Number(counter.getAttribute('data-target') || 0);
                let obj = { value: 0 };
                gsap.to(obj, {
                    value: target,
                    duration: 2,
                    ease: 'power2.out',
                    onUpdate: () => {
                        counter.textContent = Math.floor(obj.value) + '+';
                    }
                });
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(c => counterObserver.observe(c));

    // Back to Top
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (!backToTop) return;
        if (window.scrollY > 450) {
            gsap.to(backToTop, { display: 'block', opacity: 1, duration: 0.4 });
        } else {
            gsap.to(backToTop, { opacity: 0, duration: 0.4, onComplete: () => backToTop.style.display = 'none' });
        }
    });
    
    backToTop?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Smooth Mouse Interaction
    const cursorGlow = document.querySelector('.cursor-glow');
    const heroContent = document.querySelector('#hero [data-aos]');
    
    window.addEventListener('mousemove', (event) => {
        if (cursorGlow) {
            gsap.to(cursorGlow, {
                duration: 0.8,
                left: event.clientX,
                top: event.clientY,
                ease: 'power2.out'
            });
        }

        if (heroContent) {
            const xPos = (event.clientX / window.innerWidth - 0.5) * 35;
            const yPos = (event.clientY / window.innerHeight - 0.5) * 35;
            
            gsap.to(heroContent, {
                duration: 1.5,
                x: xPos,
                y: yPos,
                ease: 'power3.out'
            });
        }
    });
});
