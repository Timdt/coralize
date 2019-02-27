

<ul class="navbar-nav">
<li class='nav-item dropdown'>
  <a class='nav-link dropdown-toggle' data-toggle='dropdown' datatarget='dropdown_target' href='#'>
    <span class='caret'></span>Dropdown
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdown_target">

      <?php

      $chunks = array_chunk($dropItems, 2);

      Foreach($chunks as $chunk){
          Foreach($chunk as $item){
              echo "<a class='dropdown-item' href=\"$item[slug]\">$item[title] </a>";
          }
          Echo "<div class='dropdown-divider'></div>";
        }










    /*  foreach ($dropItems as $item ) {

        echo "<a class='dropdown-item' href=\"$item[slug]\">$item[title] </a>";
      echo "<a class='dropdown-item'>Dropdown</a>";

    }*/
       ?>
    </div>
    </li>
</li>


  <?php
    foreach ($navItems as $item ) {
      echo "<li class='nav-item'> <a class='nav-link' href=\"$item[slug]\">$item[title]</a> </li>";
    }


   ?>
<li class='nav-item float-right'> <a class='nav-link' href="#">Login</a> </li>
</ul>
