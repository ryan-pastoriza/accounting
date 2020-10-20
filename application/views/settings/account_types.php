<div class="row">
	<div class="col-md-6">
		<div class="card ">

          <div class="card-body">

            <?= form_open(base_url().'settings/create_account_type', [ 'id' => 'frm-account-type' ]); ?>


    				<div class="row">
    					<div class="col-md-12">
    					  <div class="form-group">
    					    <label>Name</label>
    					    <input type="text" name="name" class="form-control" required>
    					  </div>
    					</div>

    					<div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-round btn-sm">Save Changes</button>
              </div>
    				</div>

           <?= form_close(); ?>


          </div>
        </div>

	</div>

	<div class="col-md-6">

		<div class="card ">
          <div class="card-body ">
             <table class="table table-bordered table-striped">
            <thead class="text-primary">
              <tr>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($account_types as $key => $value) : ?>
                    <tr>
                      <td><?php echo ucwords($value->name); ?></td>
                      <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>	
          </div>
        </div>
	</div>
</div>