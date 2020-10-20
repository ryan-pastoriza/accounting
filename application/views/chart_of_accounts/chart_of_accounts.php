<style type="text/css">
  .tree, .tree ul {
    margin:0;
    padding:0;
    list-style:none;
    font-size: 12px;
  }
  .tree ul {
      margin-left:1em;
      position:relative
  }
  .tree ul ul {
      margin-left:.5em
  }
  .tree ul:before {
      content:"";
      display:block;
      width:0;
      position:absolute;
      top:0;
      bottom:0;
      left:0;
      border-left:1px solid
  }
  .tree li {
      margin:0;
      padding:0 1em;
      line-height:2em;
      color:#369;
      font-weight:700;
      position:relative
  }
  .tree ul li:before {
      content:"";
      display:block;
      width:10px;
      height:0;
      border-top:1px solid;
      margin-top:-1px;
      position:absolute;
      top:1em;
      left:0
  }
  .tree ul li:last-child:before {
      background:#fff;
      height:auto;
      top:1em;
      bottom:0
  }
  .indicator {
      margin-right:5px;
      color: #ef8157;
      cursor: pointer;
  }

  .tree li a {
      text-decoration: none;
      color:#369;
  }
  .tree li button, .tree li button:active, .tree li button:focus {
      text-decoration: none;
      color:#369;
      border:none;
      background:transparent;
      margin:0px 0px 0px 0px;
      padding:0px 0px 0px 0px;
      outline: 0;
  }
</style>


<div class="content">
	<div class="row">

    <?php

      // echo '<pre>';
      // var_export($chart_of_accounts);
      // echo '</pre>';

    ?>

     <div class="col-md-12">

      <div class="card ">
          <div class="card-body ">
              <ul id="tree1">
                <?php foreach ($chart_of_accounts as $key => $value) : ?>
                    <li><a href="#"><?= ucwords($key); ?></a>
                      <ul>

                        <?php foreach ($value['accounts'] as $k => $v) : ?>
                          
                            <li><span> <?= $v['account_code']; ?> </span> - <a href="#"> <?= ucwords($v['account_title']); ?> </a>
                              
                              <ul>
                              <?php foreach ($v['accounts'] as $k1 => $v1) : ?>
                                
                                
                                  <li><span> <?= $v1['account_code']; ?> </span> - <a href="#"> <?= ucwords($v1['account_title']); ?> </a>

                                  <ul>
                                    <?php foreach ($v1['accounts'] as $k2 => $v2) : ?>
                                      
                                        
                                        <li><span> <?= $v2['account_code']; ?> </span> - <a href="#"> <?= ucwords($v2['account_title']); ?> </a>
                                        </li>
                                    
                                    <?php endforeach; ?>
                                    </ul>

                                  </li>
                              

                              <?php endforeach; ?>
                              </ul>
                          </li>

                        <?php endforeach; ?>

                      </ul>
                  </li>
                <?php endforeach; ?>
            </ul>
          </div>
          <div class="card-footer ">
          </div>
        </div>
    </div>

	  <div class="col-md-12">

	    <div class="card ">
	        <div class="card-body ">
	          	<ul id="tree1">
		            <li><a href="#">Assets</a>
		                <ul>
		                    <li><span> 1-1000 - </span> <a href="#"> Current Assets </a>
		                        <ul>
		                            <li><span> 1-1100 - </span> <a href="#"> Cash On Hand </a>
		                                <ul>
		                                    <li><span> 1-1110 - </span> Checking Account</li>
		                                    <li><span> 1-1120 - </span> Cash Drawer</li>
		                                    <li><span> 1-1130 - </span> Petty Cash</li>
		                                </ul>
		                            </li>
		                            <li><span> 1-1200 - </span> Accounts Receivable</li>
		                        </ul>
		                    </li>
		                </ul>
		            </li>
		            <li><a href="#">Liabilities</a>
		              <ul>
		                    <li><span> 1-1000 - </span> Current Assets 
		                        <ul>
		                            <li><span> 1-1100 - </span> Cash On Hand
		                                <ul>
		                                    <li><span> 1-1110 - </span> Checking Account</li>
		                                    <li><span> 1-1120 - </span> Cash Drawer</li>
		                                    <li><span> 1-1130 - </span> Petty Cash</li>
		                                </ul>
		                            </li>
		                            <li><span> 1-1200 - </span> Accounts Receivable</li>
		                        </ul>
		                    </li>
		                </ul>
		            </li>
		        </ul>
	        </div>
	        <div class="card-footer ">
	         <!--  <hr>
           <button class="btn btn-primary btn-sm btn-round" data-toggle="modal" data-target="#chartofaccountsModal">Add</button> -->
	        </div>
      	</div>
	  </div>
	</div>
</div>


<!-- modal -->
<div class="modal" id="chartofaccountsModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Chart of Accounts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          
          <div class="col-md-6">
            
            <div class="form-group">
              <label>G/L Account</label>
              <input type="text" class="form-control">
            </div>

          </div>

          <div class="col-md-6">
              
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control">
            </div>

          </div>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

  $.fn.extend({
    treed: function (o) {
      
      var openedClass = 'fa fa-caret-down';
      var closedClass = 'fa fa-caret-right';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator " + closedClass + "'></i>");
            branch.addClass('branch');

            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            });

            // branch.on('dblclick', function(e){
            //   if( this == e.target ){
            //     alert('open sesame');
            //   }
            // });

            branch.children().children().toggle();
      });

      $(document).on('dblclick', 'li > a', function(e){
    
        e.preventDefault();
        
        var modal = $('#chartofaccountsModal');

        modal.modal('show');

      });



        //fire event from the dynamically added icon
      tree.find('.indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        // tree.find('.branch>a').each(function () {
        //     $(this).on('click', function (e) {
        //         $(this).closest('li').click();
        //         e.preventDefault();
        //     });
        // });
        //fire event to open branch if the li contains a button instead of text
        // tree.find('.branch>button').each(function () {
        //     $(this).on('click', function (e) {
        //         $(this).closest('li').click();
        //         e.preventDefault();
        //     });
        // });
    }
  });

//Initialization of treeviews

  $('#tree1').treed();


  $(function(){



  });

</script>