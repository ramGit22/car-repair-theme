/**
 * Header effects script
 * 
 * Handles scrolling effects for the site header
 */
(function() {
    // Get the header element
    const header = document.getElementById('masthead');
    
    if (!header) {
        return;
    }
    
    // Function to handle scroll effects
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Call handleScroll initially to set the correct state on page load
    handleScroll();
})();
