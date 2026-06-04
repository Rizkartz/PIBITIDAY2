
document.addEventListener('DOMContentLoaded', () => {
    
    const htmlElement = document.documentElement;
    const toggleBtn = document.getElementById('darkModeToggle');

    if (localStorage.getItem('theme') === 'dark') {
        htmlElement.classList.add('dark');
    }
    toggleBtn.addEventListener('click', () => {
        htmlElement.classList.toggle('dark');
        if (htmlElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

});