/**
 * Custom JavaScript for the Car Repair Theme
 */

(function() {
    'use strict';

    // Header scroll effect
    function handleHeaderScroll() {
        const header = document.querySelector('.site-header');
        if (!header) return;

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Mobile menu toggle
    function setupMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNavigation = document.querySelector('.main-navigation');
        
        if (!menuToggle || !mainNavigation) return;
        
        menuToggle.addEventListener('click', function() {
            mainNavigation.classList.toggle('toggled');
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
            menuToggle.setAttribute('aria-expanded', !expanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mainNavigation.contains(event.target) && !menuToggle.contains(event.target)) {
                mainNavigation.classList.remove('toggled');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu when clicking a menu item (for mobile)
        const menuItems = mainNavigation.querySelectorAll('a');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    mainNavigation.classList.remove('toggled');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    // Smooth scrolling for anchor links
    function setupSmoothScroll() {
        document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (!target) return;
                
                e.preventDefault();
                
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });
    }
    
    // Animated elements on scroll
    function setupScrollAnimations() {
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        if (!animateElements.length) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    }
    
    // Services filter
    function setupServicesFilter() {
        const filterButtons = document.querySelectorAll('.filter-button');
        const serviceItems = document.querySelectorAll('.service-card');
        
        if (!filterButtons.length || !serviceItems.length) return;
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Filter service items
                serviceItems.forEach(item => {
                    if (filterValue === 'all') {
                        item.style.display = 'block';
                    } else if (item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // Run when DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        handleHeaderScroll();
        setupMobileMenu();
        setupSmoothScroll();
        setupScrollAnimations();
        setupServicesFilter();
    });
})();
