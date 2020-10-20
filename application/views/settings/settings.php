<div class="content">
	<div class="row">
	  <div class="col-md-12">

	  	<div class="card card-user">
         	<div class="card-body">

         		<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Company Settings</a>
				    <a class="nav-item nav-link" id="nav-account-types-tab" data-toggle="tab" href="#nav-account-types" role="tab" aria-controls="nav-account-types" aria-selected="false">Account Types</a>
				    <a class="nav-item nav-link" id="nav-accounting-period-tab" data-toggle="tab" href="#nav-accounting-period" role="tab" aria-controls="nav-accounting-period" aria-selected="false">Accounting Period</a>
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				  	<?php $this->load->view('settings/company_settings'); ?>
				  </div>
				  <div class="tab-pane fade" id="nav-account-types" role="tabpanel" aria-labelledby="nav-account-types-tab">
				  	<?php $this->load->view('settings/account_types'); ?>
				  </div>
				  <div class="tab-pane fade" id="nav-accounting-period" role="tabpanel" aria-labelledby="nav-accounting-period-tab">
				  	<?php $this->load->view('settings/accounting_period'); ?>
				  </div>
				</div>


 			</div>
        </div>

	  </div>
	</div>
</div>


<script type="text/javascript">
	

	$(function(){

		// account types
		$(document).on('submit', '#frm-account-type', function(e){
			e.preventDefault();

			var form = $(this);
			var url = form.attr('action');

			var posting = $.post(url, form.serializeArray());

			posting.done(function(response){
				console.log(response);

				if(response > 0 ){
					
				}


			});


		});


	});

</script>