<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI9AWbys\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI9AWbys/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI9AWbys.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI9AWbys\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerI9AWbys\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'I9AWbys',
    'container.build_id' => '85c836e5',
    'container.build_time' => 1684311227,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI9AWbys');
