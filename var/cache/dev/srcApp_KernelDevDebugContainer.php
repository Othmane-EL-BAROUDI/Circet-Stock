<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSrzid04\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSrzid04/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSrzid04.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSrzid04\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSrzid04\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Srzid04',
    'container.build_id' => '16611bf5',
    'container.build_time' => 1683627130,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSrzid04');
