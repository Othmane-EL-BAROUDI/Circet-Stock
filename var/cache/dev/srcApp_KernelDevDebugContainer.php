<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW8gEvst\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW8gEvst/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW8gEvst.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW8gEvst\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerW8gEvst\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'W8gEvst',
    'container.build_id' => '5bb6d809',
    'container.build_time' => 1684230459,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW8gEvst');
