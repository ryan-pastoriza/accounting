<style type="text/css">
  .debit, .credit, input[type="text"].debit::placeholder, input[type="text"].credit::placeholder {  
      /* Firefox, Chrome, Opera */ 
      text-align: right; 
  } 
</style>

<div class="content">
	<div class="row">
	  <div class="col-md-12">
	   	<div class="card card-user">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Entry No</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Document No.</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Document Date</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead class=" text-primary">
                      <tr>
                        <th>Account Code</th>
                        <th>Account Name</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>6-8000</td>
                          <td>Utilities</td>
                          <td class="text-right">500.00</td>
                          <td class="text-right">0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>1-1120</td>
                          <td>Cash Drawer</td>
                          <td class="text-right">0.00</td>
                          <td class="text-right">500.00</td>
                          <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control debit" placeholder="0.00"></td>
                        <td class="text-right"><input type="text" class="form-control credit" placeholder="0.00"></td>
                        <td class="text-right"></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Explanation</label>
                    <textarea class="form-control textarea"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-link">Clear</button>
                      <button type="submit" class="btn btn-secondary btn-round">Save as Draft</button>
                      <button type="submit" class="btn btn-primary btn-round">Save</button>
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