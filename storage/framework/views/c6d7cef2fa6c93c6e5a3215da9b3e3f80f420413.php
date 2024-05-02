<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1> percobaan livewire </h1>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-post', ['title' => 'nilai awal '])->html();
} elseif ($_instance->childHasBeenRendered('2WtH0l3')) {
    $componentId = $_instance->getRenderedChildComponentId('2WtH0l3');
    $componentTag = $_instance->getRenderedChildComponentTagName('2WtH0l3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2WtH0l3');
} else {
    $response = \Livewire\Livewire::mount('create-post', ['title' => 'nilai awal ']);
    $html = $response->html();
    $_instance->logRenderedChild('2WtH0l3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</body>
</html><?php /**PATH C:\Users\dimas\Documents\crud laravel\resources\views/komponen.blade.php ENDPATH**/ ?>