<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDF0oC1w\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDF0oC1w/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDF0oC1w.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDF0oC1w\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDF0oC1w\App_KernelDevDebugContainer([
    'container.build_hash' => 'DF0oC1w',
    'container.build_id' => '91f23f39',
    'container.build_time' => 1705397597,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDF0oC1w');
