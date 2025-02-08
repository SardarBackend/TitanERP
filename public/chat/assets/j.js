document.querySelectorAll('li p').forEach(item => {
    item.addEventListener('click', event => {
        const counterId = counter-${event<span class="hljs-selector-class">.target</span><span class="hljs-selector-class">.textContent</span><span class="hljs-selector-class">.trim</span>()};
        // افزایش مقدار شمارنده
        const counter = document.getElementById(counterId);
        if (counter) {
            counter.textContent = parseInt(counter.textContent) + 1;
        }

        // زنگ انیمیشن
        item.classList.add('animate');
        setTimeout(() => {
            item.classList.remove('animate');
        }, 700);
    });
});
