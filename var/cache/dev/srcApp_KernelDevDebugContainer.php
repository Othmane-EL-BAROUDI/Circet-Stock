<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQXo3CD8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQXo3CD8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQXo3CD8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQXo3CD8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQXo3CD8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QXo3CD8',
    'container.build_id' => 'bb6586a5',
    'container.build_time' => 1683815820,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQXo3CD8');
