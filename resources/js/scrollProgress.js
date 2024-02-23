document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        const scrollProgress = document.querySelector('#scrollProgress');
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        window.addEventListener('scroll', () => {
            updateScrollBar(scrollProgress, height);
        });

        window.addEventListener('resize', () => {
            updateScrollBar(scrollProgress, height);
        });
    }, 500);
})

function updateScrollBar(scrollbar, height) {
    const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    scrollbar.style.width = `${(scrollTop / height) * 100}%`;
}
