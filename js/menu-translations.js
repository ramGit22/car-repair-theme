/**
 * Menu text translations to Finnish
 */
document.addEventListener('DOMContentLoaded', function() {
    // Menu translations
    const menuTranslations = {
        'Home': 'Etusivu',
        'Book Now': 'Varaa Nyt',
        'Services': 'Palvelut',
        'About': 'Tietoa Meistä',
        'Contact': 'Yhteystiedot',
        'Blog': 'Blogi'
    };

    // Get all menu item links
    const menuLinks = document.querySelectorAll('.main-navigation a');
    
    // Replace text content with Finnish translations
    menuLinks.forEach(link => {
        const originalText = link.textContent.trim();
        if (menuTranslations[originalText]) {
            link.textContent = menuTranslations[originalText];
        }
    });
});
