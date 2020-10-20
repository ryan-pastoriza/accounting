<div class="content">
  <div class="row">
    <div class="col-md-12">

       <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Company name</h5>
          <p class="card-category">General Ledger Report</p>
        </div>
        <div class="card-body ">

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
                        <th>Date</th>
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

          </div>


        </div>
        <div class="card-footer ">
         <!--  <div class="legend">
            <i class="fa fa-circle text-primary"></i> Opened
            <i class="fa fa-circle text-warning"></i> Read
            <i class="fa fa-circle text-danger"></i> Deleted
            <i class="fa fa-circle text-gray"></i> Unopened
          </div> -->
          <!-- <hr> -->
         <!--  <div class="stats">
            <i class="fa fa-calendar"></i> Number of emails sent
          </div> -->
        </div>
      </div>


    </div>
  </div>
</div>
