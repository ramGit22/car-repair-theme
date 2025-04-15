/**
 * Mobile enhancements for Car Repair Theme
 * - Adds back-to-top button
 * - Handles table overflow
 */
document.addEventListener('DOMContentLoaded', function() {
    // Create back-to-top button
    var backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    backToTopBtn.className = 'back-to-top';
    backToTopBtn.title = 'Back to top';
    document.body.appendChild(backToTopBtn);

    // Add click event
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    // Make tables responsive
    var tables = document.querySelectorAll('table');
    tables.forEach(function(table) {
        var wrapper = document.createElement('div');
        wrapper.className = 'table-responsive';
        table.parentNode.insertBefore(wrapper, table);
        wrapper.appendChild(table);
    });
});
