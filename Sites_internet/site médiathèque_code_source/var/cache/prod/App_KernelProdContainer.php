<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDDUIVed\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDDUIVed/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerDDUIVed.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerDDUIVed\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerDDUIVed\App_KernelProdContainer([
    'container.build_hash' => 'DDUIVed',
    'container.build_id' => '3cb25866',
    'container.build_time' => 1611936991,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDDUIVed');
