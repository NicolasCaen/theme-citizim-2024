document.addEventListener('DOMContentLoaded', function() {

    // Fonction pour mettre à jour la hauteur du header
    function updateHeaderHeight() {
        const header = document.querySelector('header.wp-block-template-part'); // Sélecteur du header
        if (header) {
            const headerHeight = header.offsetHeight;
            document.body.style.setProperty('--header-height', `${headerHeight}px`);
        }
    }

    // Mettre à jour initialement
    updateHeaderHeight();

    // Mettre à jour lors du redimensionnement de la fenêtre
    window.addEventListener('resize', updateHeaderHeight);
});