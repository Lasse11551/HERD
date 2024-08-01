<?php



spl_autoload_register(function($class) { // En autoloader må ikke returnere noget eller kaste en fejl/error
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
});

$fields = [
    new \App\Text('textfield'),
    new \App\Checkbox('checkboxfield'),
    new \App\Radio('radiofield'),
];

foreach($fields as $field) {
    echo $field->render() . '<br />';
}