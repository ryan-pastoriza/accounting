<?php

  $nav = array(

    array('href'=> base_url('dashboard'), 'icon' => 'nc-icon nc-bank', 'label' => 'Dashboard', 'segment' => 'dashboard' ),
    array('href'=> base_url('chart_of_accounts'), 'icon' => 'nc-icon nc-chart-bar-32', 'label' => 'Chart of Accounts', 'segment' => 'chart_of_accounts' ),
    array('href'=> base_url('journal_entry'), 'icon' => 'nc-icon nc-paper', 'label' => 'Journal Entry', 'segment' => 'journal_entry' ),
    array('href'=> base_url('reports'), 'icon' => 'nc-icon nc-tile-56', 'label' => 'Reports', 'segment' => 'reports' ),
    array('href'=> base_url('settings'), 'icon' => 'nc-icon nc-settings-gear-65', 'label' => 'Settings', 'segment' => 'settings' ),

  );

?>

<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="<?php echo base_url(); ?>/assets/img/logo.jpg">
      </div>
    </a>
    <a href="#" class="simple-text logo-normal">
      Accounting
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">

      <?php foreach ($nav as $key => $value) : ?>
        <li class="<?= ($this->uri->segment(1) == strtolower($value['segment'])) ? 'active' : ''; ?>">
          <a href="<?php echo $value['href']; ?>">
            <i class="<?php echo $value['icon']; ?>"></i>
            <p><?= $value['label']; ?></p>
          </a>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</div>