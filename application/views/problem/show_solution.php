<div class="content">
  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>
  <?php require VIEWS_PATH . '_templates/leftmenu.php'; ?>
  <?php
    $file_path = PROBLEMS_PATH . $this->problem_id . '/solution.php';
    if (file_exists($file_path)) {
       echo '<div class="main">';
       include $file_path;
       echo '</div></div>';
     } else {
       echo '
        <div class = "main"> <div class = "textarea">
            <h1 align="center">Problema sem solução ainda, mas use o Fórum para tirar suas dúvidas.</h1>
        </div></div>';
    }?>
</div>
