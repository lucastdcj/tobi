<div class="leftmenu" id="leftmenu">
  <script>
    if (window.innerWidth >= 800) {
      var leftmenu = document.getElementById("leftmenu");
      var height = window.innerHeight - leftmenu.offsetTop;
      leftmenu.style.minHeight = height + "px";
    } else {
      function showProblems(menu_id) { 
        var el = document.getElementById(menu_id);
        toogleChevron(el.firstElementChild);        
        while (true) {
          var next_el = el.nextSibling;
          if (next_el == null || next_el.tagName != "LI") break;
          toggle(next_el);  
          el = next_el;
        }
      }   

      function toogleChevron(chevron) {
        if (chevron.classList.contains("toggled")) {
          chevron.classList.remove("toggled");
        } else {
          chevron.classList.add("toggled");
        } 
      }
         
      function toggle(el) {
        if (el.style.display == 'block') {
          el.style.display = 'none';
        } else {
          el.style.display = 'block'; 
        }
      }
    }
  </script>
  <ul>
    <?php	        
    if ($this->problems) {
      $has_extra = false;
      echo '<a href="#" id="mandatory_problems" onClick="showProblems(this.id)"> <li class="problemtype chevron">  Problemas Obrigatórios </li> </a>';
      $user_problems = Session::get('user_problems');
      $user_section_id = Session::get('section_id');
      
      foreach($this->problems as $key => $value) {		    
        if (!$value->problem_extra) {		    	  
          echo (isset($user_problems[$value->problem_id])) ? '<li class="finished problem-title">' : '<li class="problem-title">';
          echo '<a href="' . URL .'problem/show/' . $this->section_id . '/' . $value->problem_id . '">';
          echo '<img src="' . URL . 'public/img/icons/problem.png" title="Ver Problema">';
          echo '</a>';
          
          if ($user_section_id >= $this->section_id) {
            echo '<a href="' . URL .'submit/show_form/' . $this->section_id . '/' . $value->problem_id . '">';          	    
            echo '<img src="' . URL . 'public/img/icons/submit.png" title ="Submeter Problema">';
            echo '</a>';
            
            echo '<a href="' . URL .'submit/show_history/' . $this->section_id . '/' . $value->problem_id . '">';
            echo '<img src="' . URL . 'public/img/icons/history.png" title ="Ver Submissões">';
            echo '</a>';
          } else {
            echo '<img src="' . URL . 'public/img/icons/submit_gray.png" title ="Submeter Problema">';
            echo '<img src="' . URL . 'public/img/icons/history_gray.png" title ="Ver Submissões">';
          }
          
//          	  if (isset($user_problems[$value->problem_id])) {
//          	    echo '<a href="' . URL .'problem/show_solution/' . $this->section_id . '/' . $value->problem_id .'">';
//          	    echo '<img src="' . URL . 'public/img/icons/solution.png" title="Solução do Problema">';
//          	    echo '</a>';
//          	  } else {
//          	    echo '<img src="' . URL . 'public/img/icons/solution_gray.png" title="Solução do Problema">';
//          	  }
                          
          echo '<a href="' . URL .'problem/show/' . $this->section_id . '/' . $value->problem_id . '">';
          echo $value->problem_name;			  
          echo '</a>';
          echo '</li>';
        } else {
          $has_extra = true;	
        }
        }
        
        if ($has_extra) {
          echo '<a href=#" id="suggested_problems" onClick="showProblems(this.id)"> <li class="problemtype chevron">Problemas Sugeridos </li> </a>';	    
        }
        
        foreach($this->problems as $key => $value) {
              // Skip bug problem.
              if ($value->problem_id == 102) continue;
              if ($value->problem_extra == 1) {
                echo (isset($user_problems[$value->problem_id])) ? '<li class="finished problem-title">' : '<li class="problem-title">';
                echo '<a href="' . URL .'problem/show/' . $this->section_id . '/' . $value->problem_id . '">';
                echo '<img src="' . URL . 'public/img/icons/problem.png" title="Ver Problema">';
                echo '</a>';
                
                if ($user_section_id >= $this->section_id) {
                  echo '<a href="' . URL .'submit/show_form/' . $this->section_id . '/' . $value->problem_id . '">';          	    
                  echo '<img src="' . URL . 'public/img/icons/submit.png" title ="Submeter Problema">';
                  echo '</a>';
                  
                  echo '<a href="' . URL .'submit/show_history/' . $this->section_id . '/' . $value->problem_id . '">';
                  echo '<img src="' . URL . 'public/img/icons/history.png" title ="Ver Submissões">';
                  echo '</a>';
                } else {
                  echo '<img src="' . URL . 'public/img/icons/submit_gray.png" title ="Submeter Problema">';
                  echo '<img src="' . URL . 'public/img/icons/history_gray.png" title ="Ver Submissões">';
                }
                
//          	  if (isset($user_problems[$value->problem_id])) {
//          	    echo '<a href="' . URL .'problem/show_solution/' . $this->section_id . '/' . $value->problem_id .'">';
//          	    echo '<img src="' . URL . 'public/img/icons/solution.png" title="Solução do Problema">';
//          	    echo '</a>';
//          	  } else {
//          	    echo '<img src="' . URL . 'public/img/icons/solution_gray.png" title="Solução do Problema">';
//          	  }
                echo '<a href="' . URL .'problem/show/' . $this->section_id . '/' . $value->problem_id . '">';
                echo $value->problem_name;			  
                echo '</a>';
                
                echo '</li>';
            }
        }
      }		
    ?>
  </ul>
</div>
