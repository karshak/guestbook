<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBc34Qum\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBc34Qum/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBc34Qum.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBc34Qum\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBc34Qum\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bc34Qum',
    'container.build_id' => '84575e37',
    'container.build_time' => 1697047262,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBc34Qum');
