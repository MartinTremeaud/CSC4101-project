<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF3xfcxm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF3xfcxm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF3xfcxm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF3xfcxm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF3xfcxm\App_KernelDevDebugContainer([
    'container.build_hash' => 'F3xfcxm',
    'container.build_id' => 'd4b1564e',
    'container.build_time' => 1726606824,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF3xfcxm');
