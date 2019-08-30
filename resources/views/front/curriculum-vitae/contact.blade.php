<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(curriculum/img/oriente.JPG)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">Contacto</h5>
                                </div>
                            <div class="more-info">
                                <ul class="list-ico">
                                    <li>
                                        <span class="ion-ios-location"></span>
                                        {{ $user->address }}
                                    </li>
                                    <li>
                                        <span class="ion-ios-telephone"></span>
                                        <a href="tel:{{ $user->phone }}">{{ $user->phone }}</a>
                                    </li>
                                    <li>
                                        <span class="ion-email"></span>
                                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="socials">
                                <ul>
                                    @if(isset($user->github))
                                        <li>
                                            <a href="{{ $user->github }}" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a>
                                        </li>
                                    @endif
                                    @if(isset($user->gitlab))
                                        <li>
                                            <a href="{{ $user->gitlab }}" target="_blank"><span class="ico-circle"><i class="ion-social-gitlab"></i></span></a>
                                        </li>
                                    @endif
                                    @if(isset($user->linkedin))
                                        <li>
                                            <a href="{{ $user->linkedin }}" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <a href="https://bootstrapmade.com/demo/DevFolio/" target="_blank"><strong>DevFolio</strong></a>. All Rights Reserved</p>
                        <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
                        </div>
                        <div class="credits">
                            Code: <strong><a href="https://gitlab.com/carlosamores93/carlos-salvador-amores-martinez" target="_blank">Gitlab Carlos Amores</a></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </section>