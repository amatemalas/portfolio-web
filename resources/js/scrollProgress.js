document.addEventListener('DOMContentLoaded', () => {
    const scrollProgress = document.querySelector('#scrollProgress');
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    
    window.addEventListener('scroll', () => {
        const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        scrollProgress.style.width = `${(scrollTop / height) * 100}%`;
    });
})
