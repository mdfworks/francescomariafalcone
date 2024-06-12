<?php

return [
  // …your other settings
  'thumbs' => [
      'srcsets' => [
          'default' => [
              '300w'  => ['width' => 300],
              '600w'  => ['width' => 600],
              '900w'  => ['width' => 900],
              '1200w' => ['width' => 1200],
              '1800w' => ['width' => 1800]
          ],
          'square' => [
              '300w'  => ['width' => 300, 'height' => 300, 'crop' => true],
              '600w'  => ['width' => 600, 'height' => 600, 'crop' => true],
              '900w'  => ['width' => 900, 'height' => 900, 'crop' => true],
              '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => true],
              '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => true]
          ],
          'landscape' => [
              '300w'  => ['width' => 300, 'height' => 200, 'crop' => true],
              '600w'  => ['width' => 600, 'height' => 400, 'crop' => true],
              '900w'  => ['width' => 900, 'height' => 600, 'crop' => true],
              '1200w' => ['width' => 1200, 'height' => 800, 'crop' => true],
              '1800w' => ['width' => 1800, 'height' => 1200, 'crop' => true]
          ],
      ]
  ]
];