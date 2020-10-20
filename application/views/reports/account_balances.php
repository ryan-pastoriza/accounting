<div class="content">
	<div class="row">
	  <div class="col-md-12">
			<div class="card card-user">
          <div class="card-body">
            <form>
							<div class="row">
		            <div class="col-md-2">
		                <label>Fiscal Year</label>
		                <select class="form-control input-sm"></select>
		            </div>
		            <div class="col-md-3">
		                <label>From</label>
		                <input type="date" class="form-control input-sm">
		            </div>
		            <div class="col-md-3">
		                <label>To</label>
		                <input type="date" class="form-control input-sm">
		            </div>

		             <div class="col-md-2">
		              <br />
		              <button type="submit" class="btn btn-primary btn-sm btn-round">Generate</button>
		            </div>
		          </div>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead class=" text-primary">
                      <tr>
  											<th>Accounts</th>
                        <th>Debit</th>
                        <th>Credit</th>
                      </tr>
                    </thead>
                    <tbody>
											<tr>
                        <td>Utilities</td>
                        <td class="text-right">500.00</td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td>Cash Drawer</td>
                        <td class="text-right"></td>
                        <td class="text-right">500.00</td>
                      </tr>
											<tr>
                        <td>Cash on Hand</td>
                        <td class="text-right">1,500.00</td>
                        <td class="text-right"></td>
                      </tr>
                      <tr>
                        <td>Cash Drawer</td>
                        <td class="text-right"></td>
                        <td class="text-right">1,500.00</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="text-right">Total:</td>
                        <td class="text-right">2,000.00</td>
                        <td class="text-right">2,000.00</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Print</button>
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>

	  </div>
	</div>
</div>
