<?php include "header.php"; ?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-header mt-5">
        <h2>Contact</h2>
        <p>Ingin Pesan? <span>Hubungi Kami</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <img src="icons/bootstrap-icons-1.9.0/map.svg" alt="" class="flex-shrink-0">
            <div>
              <h3>Alamat Kami</h3>
              <p>Jalan Merdeka Medan, Simpang Selayang
            </div>
          </div>
        </div>
        <!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <img src="icons/bootstrap-icons-1.9.0/whatsapp.svg" alt="">
            <div>
              <h3>whatsapp</h3>
              <p>O858-8888-8888</p>
            </div>
          </div>
        </div>
        <!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <img src="icons/bootstrap-icons-1.9.0/telephone.svg" alt="">
            <div>
              <h3>Telepon</h3>
              <p>0858-8888-8888</p>
            </div>
          </div>
        </div>
        <!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <img src="icons/bootstrap-icons-1.9.0/clock.svg" alt="">
            <div>
              <h3>Buka Pada</h3>
              <div>
                <strong>Setiap Hari</strong> 10AM - 22PM
              </div>
            </div>
          </div>
        </div>
        <!-- End Info Item -->
      </div><br><br>



      <?php 

          if(@$_GET['pesan']=="inputBerhasil"){

          ?>
                  <div class="alert alert-success">
                  Terima kasih, pesan anda sudah terkirim!
                  </div>
          <?php

          }

          ?>



      <form
        action="proses-contact.php"
        method="post"
        role="form"
        class="form p-3 p-md-4"
      >
        <div class="row"><br>

          <div class="col-xl-6 form-group">
            <input
              type="text"
              name="nama"
              class="form-control"
              id="nama"
              placeholder="Your Name"
              required
            />
          </div>

          <div class="col-xl-6 form-group">
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              placeholder="Your Email"
              required
            />
          </div>
        </div>

        

        <div class="form-group">
          <textarea
            class="form-control"
            name="pesan"
            rows="5"
            placeholder="Message"
            required
          ></textarea>
        </div>
        <div class="my-3">
        </div>
        <div class="text-center">
          <button type="submit">Send Message</button>
        </div>
      </form>
      <!--End Contact Form -->
    </div>
  </section>
  <!-- End Contact Section -->

<?php include "footer.php"; ?>