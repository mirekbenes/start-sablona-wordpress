// Swiper Translations
const sliderTranslations = {
    'en-gb': {
        paginationBulletMessage: 'Go to slide {{index}}',
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide'
    },
    'cs-cz': {
        paginationBulletMessage: 'Přejít na slide {{index}}',
        prevSlideMessage: 'Předchozí slide',
        nextSlideMessage: 'Následující slide'
    }
};

const documentLang = (document.documentElement.lang || 'cs-cz').toLowerCase();

const sliderTranslate = sliderTranslations[documentLang] || sliderTranslations['cs-cz'];
