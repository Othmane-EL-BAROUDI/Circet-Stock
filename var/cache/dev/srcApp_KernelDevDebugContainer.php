<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHD69zG7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHD69zG7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHD69zG7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHD69zG7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHD69zG7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HD69zG7',
    'container.build_id' => '7087a861',
    'container.build_time' => 1684154867,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHD69zG7');
