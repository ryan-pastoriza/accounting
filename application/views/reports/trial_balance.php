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
                        <th>Accounts Code</th>
  											<th>Accounts</th>
                        <th>Opening Balance</th>
                        <th>Debits</th>
                        <th>Credits</th>
                        <th>Net Change</th>
                        <th>Closing Balance</th>
                      <tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>6-8000</td>
                        <td>Cash on hand</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">40,705.20</td>
                        <td class="text-right">24,545.91</td>
                        <td class="text-right">16,159.29</td>
                        <td class="text-right">16,159.29</td>
                      </tr>
                      <tr>
                        <td>6-3200</td>
                        <td>Utilities</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">9,517.00</td>
                        <td class="text-right">11,304.00</td>
                        <td class="text-right">(1,787.00)</td>
                        <td class="text-right">(1,787.00)</td>
                      </tr>
                      <tr>
                        <td>6-4500</td>
                        <td>Utilities</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">1,932.60</td>
                        <td class="text-right">880.75</td>
                        <td class="text-right">1,051.85</td>
                        <td class="text-right">1,051.85</td>
                      </tr>
                    </tbody>
                    <tfoot class=" text-primary">
                      <tr>
                        <th></th>
                        <th class="text-right">Total:</th>
                        <th class="text-right">0.00</th>
                        <th class="text-right">42,705.20</th>
                        <th class="text-right">42,705.20</th>
                        <th class="text-right">0.00</th>
                        <th class="text-right">18,159.29</th>
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
