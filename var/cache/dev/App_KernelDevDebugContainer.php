<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVGlupPl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVGlupPl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVGlupPl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVGlupPl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVGlupPl\App_KernelDevDebugContainer([
    'container.build_hash' => 'VGlupPl',
    'container.build_id' => 'df6bb3a8',
    'container.build_time' => 1584370287,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVGlupPl');
