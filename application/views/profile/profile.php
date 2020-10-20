<div class="content">
	<div class="row">
	  <div class="col-md-12">
			<div class="card card-user">
          <div class="card-body">
            <form method="post" action="<?php $this->config->base_url(); ?>profile/update">
              <input type="text"id="user_id" name="user_id" value="<?= $user_id; ?>" hidden>
							<div class="row">
		            <div class="col-md-3">
		                <label>Firstname</label>
		                <input type="text" class="form-control input-sm" id="fname" name="fname" value="<?= $fname; ?>">
		            </div>
                <div class="col-md-3">
		                <label>Lastname</label>
		                <input type="text" class="form-control input-sm" id="lname" name="lname" value="<?= $lname; ?>">
		            </div>
                <div class="col-md-3">
		                <label>Birthdate</label>
		                <input type="date" class="form-control input-sm" id="birthdate" name="birthdate" value="<?= $birthdate; ?>">
		            </div>
                <div class="col-md-3">
		                <label>Address</label>
		                <input type="text" class="form-control input-sm" id="address" name="address" value="<?= $address; ?>">
		            </div>
		          </div>
              <div class="row">
                <div class="col-md-3">
                    <label>Username</label>
                    <input type="text" class="form-control input-sm" id="username" name="username" value="<?= $username; ?>">
                </div>
                <div class="col-md-3">
                    <label>Password</label>
                    <input type="text" class="form-control input-sm" id="password" name="password" >
                </div>
                <div class="col-md-12">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round btn-sm">Update</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

	  </div>
	</div>
</div>
