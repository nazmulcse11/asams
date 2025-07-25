<?php
return [
    'Y-m-d H:i' => now()->format('Y-m-d H:i'),
    'd-m-Y H:i' => now()->format('d-m-Y H:i'),
    'm/d/Y H:i' => now()->format('m/d/Y H:i'),
    'd M Y, H:i' => now()->format('d M Y, H:i'),
    'l, d F Y' => now()->format('l, d F Y'),
    'Y-m-d H:i:s' => now()->format('Y-m-d H:i:s'),
    'Y-m-d h:i A' => now()->format('Y-m-d h:i A'),
    'U' => now()->format('U'),
];
