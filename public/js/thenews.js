document.addEventListener('DOMContentLoaded', () => {
    // 1. Lightbox Navigation Search Toggle Engine
    const triggerSearchBtn = document.querySelector('.js-search-form-expand-button');
    const searchModalContainer = document.querySelector('.js-search-form');
    const closeSearchBtn = document.querySelector('.js-search-form-close');

    if (triggerSearchBtn && searchModalContainer) {
        triggerSearchBtn.addEventListener('click', () => {
            searchModalContainer.setAttribute('aria-hidden', 'false');
            triggerSearchBtn.setAttribute('aria-expanded', 'true');
            
            // Auto focus input area target inside the modal box
            const textInput = searchModalContainer.querySelector('.js-search-form-field');
            if (textInput) textInput.focus();
        });
    }

    if (closeSearchBtn && searchModalContainer && triggerSearchBtn) {
        closeSearchBtn.addEventListener('click', () => {
            searchModalContainer.setAttribute('aria-hidden', 'true');
            triggerSearchBtn.setAttribute('aria-expanded', 'false');
        });
    }

    // 2. Tab Categorization Display Controls
    const newsFilterTabs = document.querySelectorAll('.js-tab');
    newsFilterTabs.forEach(tabItem => {
        tabItem.addEventListener('click', function(event) {
            event.preventDefault();

            // Deselect existing chosen filters
            newsFilterTabs.forEach(tab => {
                tab.classList.remove('is-active');
                tab.setAttribute('aria-selected', 'false');
            });

            // Isolate active properties on chosen node
            this.classList.add('is-active');
            this.setAttribute('aria-selected', 'true');

            const selectedCategoryId = this.getAttribute('data-value');
            console.log(`Action target: filtering posts matching unique ID: ${selectedCategoryId}`);
            
            // Optional: Insert custom layout engine script hooks (e.g., Isotope grid updates or AJAX triggers) here
        });
    });
});