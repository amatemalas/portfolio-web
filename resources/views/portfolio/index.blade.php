<section class="my-5">
    <h2>Portfolio</h2>
    <hr>
    <div class="c-portfolio">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card bg-dark position-relative">
                        <div class="c-availability badge badge rounded-pill bg-primary position-absolute d-flex align-items-center">
                            <div class="c-availability__badge c-availability__badge--waiting rounded me-2"></div> A la espera
                        </div>
                        <img src="{{ asset('images/sonic.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Sonic Drive Studios</h5>
                            <p><i class="card-subtitle mb-3 text-muted">Backend & Frontend</i></p>
                            <button href="#" class="btn btn-primary" disabled>Ver más</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bg-dark position-relative">
                        <div class="c-availability badge badge rounded-pill bg-primary position-absolute d-flex align-items-center">
                            <div class="c-availability__badge c-availability__badge--dev rounded me-2"></div> En proceso
                        </div>
                        <img src="{{ asset('images/yairastas.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Yairastas</h5>
                            <p><i class="card-subtitle mb-3 text-muted">Backend & Frontend</i></p>
                            <button href="#" class="btn btn-primary" disabled>Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="swiper-button-next"></button>
        <button class="swiper-button-prev"></button>
    </div>
</section>
