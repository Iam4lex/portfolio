const toggleSwitch = document.querySelector('.toggle-checkbox');

toggleSwitch.addEventListener('change', switchTheme);

function switchTheme() {
    if (this.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}
