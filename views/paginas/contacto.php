<?php include_once __DIR__ . '/../templates/pagina.php'; ?>

<!-----START CONTACT SECTION----->
<div class="contact-fetaure pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-2 pb-60">
                    <h5>Contáctenos</h5>
                    <h2>Queremos escucharte. Cuéntanos cómo podemos ayudarte.</h2>
                    <div class="animated-bar"> <span></span></div>
                    <p class="pt-30">Got a project in mind? We’d love to hear about it. Take five minutes to fill
                        out our project form so that we can get to know you and understand your project</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="contact-single-feature">
                    <div class="feature-icon"><i class="far fa-map"></i></div>
                    <div class="contact-content">
                        <div class="contact-title">
                            <h4>Dirección</h4>
                        </div>
                        <p>Cra. 97 #24 32, Bogotá</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="contact-single-feature">
                    <div class="feature-icon"><i class="far fa-clock"></i></div>
                    <div class="contact-content">
                        <div class="contact-title">
                            <h4>Horario de Atención</h4>
                        </div>
                        <p>Lunes - Viernes: 10:00am - 05:00pm</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="contact-single-feature">
                    <div class="feature-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="contact-content">
                        <div class="contact-title">
                            <h4>Directorio de Contacto</h4>
                        </div>
                        <p>ventas@avantesolucionestec.com.co, +57 310 337 9636</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----START APPINTMENT SECTION----->
<div class="appoinment-section style-seven">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head style-2 pb-70">
                    <h2>Contáctenos</h2>
                    <div class="animated-bar"> <span></span></div>
                </div>
            </div>
        </div>
        <div class="form-area upper">
            <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nombre" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Teléfono" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea name="message" id="messagebox" cols="20" rows="7" placeholder="Your Message"
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="buttons">
                                <input type="submit" class="submit-button" value="Obtener Ayuda">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div id="status"></div>
        </div>
    </div>
</div>

<!-----START GOOGLE MAP SECTION----->
<div class="google-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5113174175!2d144.49266028604632!3d-37.97015391508195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612548511761!5m2!1sen!2sbd" width="1920" height="350"style="border:0;" aria-hidden="false" tabindex="0"></iframe> -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5173530379584!2d-74.1343817240097!3d4.67975814183667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c9b11bc34b3%3A0xbe6c26a91baa5cfa!2sAvante%20Soluciones%20Tecnologicas%20Sas!5e0!3m2!1ses!2sco!4v1730230007471!5m2!1ses!2sco"
                    width="1920" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>