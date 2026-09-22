document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach(carousel => {
        const images = JSON.parse(carousel.dataset.images);
        const container = carousel.querySelector('.carousel-container');
        
        // Initial setup
        images.forEach((src, index) => {
            const img = document.createElement('img');
            img.src = src;
            img.classList.add('w-full', 'h-full', 'object-cover', 'carousel-item', 'absolute', 'inset-0');
            if (index !== 0) img.style.opacity = '0';
            container.appendChild(img);
        });

        let currentIndex = 0;
        const items = container.querySelectorAll('.carousel-item');

        setInterval(() => {
            items[currentIndex].style.opacity = '0';
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].style.opacity = '1';
        }, 5000);
    });
});
