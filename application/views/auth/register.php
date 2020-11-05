  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                  </div>
                  <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('fullname'); ?>">
                      <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Buat Akun
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url("auth"); ?>">Telah Memiliki Akun? Login!</a>
                  </div>
                  <div class="row">
                    <div class="col-lg-2">
                    <img src="assets/logobpn.png" style="width: 50px;">
                    </div>
                    <div class="col-lg-10">
                      <h5>Badan Pertanahan Nasional Kabupaten Malang</h4>
                    </div>
                    <div class="col-lg-12">
                      <center><span>Copyright &copy; 2020 SIMPT</span></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>