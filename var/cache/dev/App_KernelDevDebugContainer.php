<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ0jzAzE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ0jzAzE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ0jzAzE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ0jzAzE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZ0jzAzE\App_KernelDevDebugContainer([
    'container.build_hash' => 'Z0jzAzE',
    'container.build_id' => '7621fec7',
    'container.build_time' => 1700057904,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ0jzAzE');
