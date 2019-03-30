
<?php

// via the constructor
$templateVariables = [
    "title" => "Title"
];
$phpView = new PhpRenderer("./path/to/templates", $templateVariables);

// or setter
$phpView->setAttributes($templateVariables);

// or individually
$phpView->addAttribute($key, $value);
