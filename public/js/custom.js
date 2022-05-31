document.addEventListener('DOMContentLoaded', () => {
    
    window.onload = () => {
        const el = document.getElementById('overlay')
        el.style.display = 'none'
    }
    
    const currentLocation = location.href
    const navItem = document.querySelectorAll('.nav-link')
    
    if (navItem) {
        const navItemLength = navItem.length
        for (let i = 0; i < navItemLength; i++) {
            if (navItem[i].href === currentLocation) {
                navItem[i].classList.add('active')
            }
        }   
    }
    
    const toggleText = document.getElementById('toggleText')
    const toggleBtn = document.getElementById('toggleBtn')
    
    if (toggleBtn && toggleText) {
        
        const text = toggleText.innerHTML
        toggleText.innerHTML = toggleText.innerHTML.trim().substring(0, 600) + '...'
    
        let status = 'less'
        
        toggleBtn.addEventListener('click', (e) => {
            e.preventDefault()

            switch (status) {
                case 'more':
                    toggleText.innerHTML = toggleText.innerHTML.trim().substring(0, 600) + '...'
                    e.target.innerText = 'Раскрыть'
                    status = 'less'
                    break;
                case 'less':
                    toggleText.innerHTML = text
                    e.target.innerText = 'Свернуть'
                    status = 'more'
                    break;
            }
        })
    }
})