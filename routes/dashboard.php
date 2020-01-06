<?php

    Route::resource('configration', 'ConfigrationController')->only(['index', 'update']);

?>