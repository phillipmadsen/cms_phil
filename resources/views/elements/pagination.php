
<?php
$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
if($paginator->getLastPage() > 1):
    // echo '<li class="previous">';
    echo $presenter->render();
    // echo '</li>';
endif;
