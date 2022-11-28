document.addEventListener('keypress', (e) => {
    if (e.keyCode === 47) {
        e.preventDefault();
        const input = document.querySelector('#search');
        input.focus();
    }
})