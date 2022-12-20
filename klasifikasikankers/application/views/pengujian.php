<div class="container mt-5" style="margin-top:150px!important">
    <h3><i class="fas fa-edit"></i>Pengujian  </h3>
    <p class=" mt-3  mb-3"> Isilah atribut pengujian dibawah ini secara urut! </br> reset apabila selesai menjalankan pengujian !</p>
<p class=" mt-3  mb-3"> Catatan </br> Rendah bernilai 1-5 </br> Sedang bernilai 6-10 </br> Tinggi bernilai 11-15</p>
        <?php 
        if($this->session->flashdata('message')){
        ?>
        <div class="alert alert-success">
          <b><?= $this->session->flashdata('message') ?></b>
        </div>
        <?php } ?>
        <form method="post" action="<?= base_url('pengujian/rule') ?>"> 
        <div class="form-group">
            <label> motivation willingness (Kerelaan)</label>
            <select class="form-control"  name="motivation_willingness"  id="motivation_willingness">
            <option>Pilih</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> perception severity (tingkat keparahan)</label>
            <select class="form-control"   name="perception_severity" id="perception_severity">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <select>
        </div>
        <div class="form-group">
            <label> empowerment abilities (Kemampuan Pemberdayaan)</label>
            <select class="form-control"  name="empowerment_abilities" id="empowerment_abilities">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> empowerment desires (Keinginan)</label>
            <select class="form-control"  name="empowerment_desires" id="empowerment_desires">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> norm fulfillment (Pemunahan norma)</label>
            <select class="form-control"  name="norm_fulfillment" id="norm_fulfillment">
            <option>Pilih</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> perception vulnerability (Kerentanan)</label>
            <select class="form-control"  name="perception_vulnerability" id="perception_vulnerability">
              <option>Pilih</option>
              
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label>intention aggregation (Niat)</label>
            <select class="form-control"  name="intention_aggregation" id="intention_aggregation">
            <option>Pilih</option>
              <option>rendah</option>
             
              <select>
        </div>
        <div class="form-group">
            <label> motivation strength (Kekuatan Motivasi)</label>
            <select class="form-control"   name="motivation_strength" id="motivation_strength">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> socialSupport emotionality (Dukungan Sosial)</label>
            <select class="form-control"  name="socialSupport_emotionality" id="socialSupport_emotionality">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> behavior eating (Pola Makan)</label>
            <select class="form-control"   name="behavior_eating" id="behavior_eating">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              
              <select>
        </div>
        <div class="form-group">
            <label> empowerment knowledge (Pemberdayaan pengetahuan)</label>
            <select class="form-control"  name="empowerment_knowledge" id="empowerment_knowledge">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> socialSupport appreciation (Dukungan sosial)</label>
            <select class="form-control"  name="socialSupport_appreciation" id="socialSupport_appreciation">
            <option>Pilih</option>
              <option>rendah</option>
              <select>
        </div>
        <div class="form-group">
            <label> behavior sexualRisk (Resiko Seksual)</label>
            <select class="form-control"  name="behavior_sexualRisk" id="behavior_sexualRisk">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <select>
        </div>
        <div class="form-group">
            <label> intention commitment (Komitmen)</label>
            <select class="form-control"  name="intention_commitmen" id="intention_commitmen">
            <option>Pilih</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> socialSupport instrumental (Dukungan Sosial)</label>
            <select class="form-control"  name="socialSupport_instrumental" id="socialSupport_instrumental">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> behavior personalHygine (perilaku kebersihan)</label>
            <select class="form-control"   name="behavior_personalHygine" id="behavior_personalHygine">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <option>tinggi</option>
              <select>
        </div>
        <div class="form-group">
            <label> attitude consistency (Tingkat Ketaatan)</label>
            <select class="form-control"  name="attitude_consistency" id="attitude_consistency">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <select>
        </div>
        <div class="form-group">
            <label> attitude spontaneity (spontanitas/kebebasan)</label>
            <select class="form-control"  name="attitude_spontaneity" id="attitude_spontaneity">
            <option>Pilih</option>
              <option>rendah</option>
              <option>sedang</option>
              <select>
        </div>
        <div class="form-group">
            <label> norm significantPerson (pengaruh orang penting)</label>
            <select class="form-control"  name="norm_significantPerson" id="norm_significantPerson">
            <option>Pilih</option>
              <option>rendah</option>
              <select>
        </div>
       


        <button type="reset" class="btn btn-primary btn-sm mt-3">Reset</button>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>

  
</div>
<section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2021 Kanker Serviks</p>
                  <div class="col-lg-4 main-social-footer-29">
                    <a href="https://www.facebook.com/" class="facebook"><span class="fab fa-facebook-f"></span></a>
                    <a href="#email" class="email"><span class="fas fa-envelope"></span></a>
                    <a href="https://www.instagram.com/jtipolije/" class="instagram"><span class="fab fa-instagram"></span></a>
                 
                  </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <i class="fas fa-level-up-alt"></i>
        </button>
</section>