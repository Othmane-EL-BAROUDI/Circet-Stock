<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9Zmq3ij\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9Zmq3ij/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9Zmq3ij.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9Zmq3ij\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9Zmq3ij\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9Zmq3ij',
    'container.build_id' => '5fc5bc03',
    'container.build_time' => 1682423052,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9Zmq3ij');
