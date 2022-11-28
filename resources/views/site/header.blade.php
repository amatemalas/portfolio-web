<nav class="navbar navbar-dark navbar-expand bg-secondary fixed-top" data-aos="fade-down">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between w-100">
            <a href="/" class="navbar-brand">amatemalas DEV</a>
            <form id="searchbar" class="c-searchBar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" id="search" placeholder='Pulsa "/" para buscar'>
            </form>
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a href="https://github.com/amatemalas" target="_blank" class="nav-link text-light"><i class="fa-brands fa-github fa-xl"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/holy_ghost____/" target="_blank" class="nav-link text-light"><i class="fa-brands fa-instagram fa-xl"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/adri_matemalas7" target="_blank" class="nav-link text-light"><i class="fa-brands fa-twitter fa-xl"></i></a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>
<div id="scrollProgress" class="c-scrollProgress"></div>

<script>
    document.querySelector('#searchbar').addEventListener('submit', (e) => {
        e.preventDefault();
        const data = new FormData(e.target);
        window.find(data.get('search'));
    })
</script>