/**
 * Dynamic loading of about-section responsive CSS
 */
(function() {
    // Create a link element for the about-responsive.css
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = document.querySelector('script[src*="about-responsive.js"]').src.replace('js/about-responsive.js', 'css/about-responsive.css');
    link.type = 'text/css';
    
    // Append to the head
    document.getElementsByTagName('head')[0].appendChild(link);
})();
