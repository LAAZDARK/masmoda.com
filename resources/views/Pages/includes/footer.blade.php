<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="{{ route('page.index')}} "><img width="190px" src="{{ asset('img/Logo-footer.png')}}" alt="logo-masmoda"></a>
                    </div>
                    <ul>
                        <li> <a href="https://www.google.com/maps/place/Facultad+de+Estudios+Superiores+Cuautitl%C3%A1n/@19.6919881,-99.1905188,15z/data=!4m2!3m1!1s0x0:0x13d9c1b986e25ecc?sa=X&ved=2ahUKEwi9hIOerODwAhUFMawKHU3RBaIQ_BIwHnoECFUQBQ" target="_blank" rel="noopener noreferrer">Carr, Cuautitlán - Teoloyucan, San Sebastian Xhala, 54714 Cuautitlán Izcalli</a></li>
                        <li> <a href="tel:+525547113677">Phone: +52 5547 1136 77</a></li>
                        <li> <a href="mailto:contacto@masmoda.com"> Email: contacto@masmoda.com</a></li>
                    </ul>
                    <div class="footer-social">
                        <a target="_blank" href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/?hl=es-la"><i class="ti-instagram"></i></a>
                        <a target="_blank" href="https://www.youtube.com/"><i class="ti-youtube"></i></a>
                        <a target="_blank" href="https://www.pinterest.com.mx/"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="footer-widget">
                    <h5>Paginas</h5>
                    <ul>
                        <li><a href="{{ route('page.contact')}} ">Contacto</a></li>
                        <li><a href=" {{ route('page.shop.caballero')}} ">Caballero</a></li>
                        <li><a href="{{ route('page.shop.dama')}}">Dama</a></li>
                        <li><a href="{{ route('page.terms')}}">Términos y condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Inscríbete aquí</h5>
                    <p>Y recibiras ofertas especiales.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Ingresa correo electrónico">
                        <button type="button">Subscribete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados - masmoda.com
                    </div>
                    <div class="payment-pic">
                        <img width="70px" src="{{ asset('img/paypal.png')}}" alt="method-payment">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
