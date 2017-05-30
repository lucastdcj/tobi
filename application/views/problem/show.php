<div class="content">    
<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>
<?php 
require VIEWS_PATH . '_templates/leftmenu.php';
echo '<div class = "main"><div class = "textarea">'; 
if (isset($this->problem_data) && !empty($this->problem_data)) {
  echo '<center><i>(OBI'       . $this->problem_data->problem_year 
      . ', Nível ' . $this->problem_data->problem_level
      . ', Fase '  . $this->problem_data->problem_phase . ')
    </i></center>';
  echo '<h1 align="center">' .  $this->problem_data->problem_name . '</h1>'; 
  $file_path = PROBLEMS_PATH . $this->problem_id . '/statement.php';  
  if (file_exists($file_path)) {
    include $file_path;
  }    	
} else {
  echo '<h1> Problema inválido </h1>';
  echo '</div></div>'; 
}
?> 
</div>
