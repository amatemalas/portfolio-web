<nav class="navbar navbar-dark navbar-expand bg-secondary fixed-top">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between w-100">
            <a href="/" class="navbar-brand">Amatemalas Dev</a>
            <form id="searchbar" class="c-searchBar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="search" id="search" placeholder='Press "/" to focus search'>
            </form>
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fa-brands fa-github fa-xl"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fa-brands fa-twitter fa-xl"></i></a>
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