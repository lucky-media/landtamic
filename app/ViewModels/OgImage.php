<?php

namespace App\ViewModels;

use Statamic\View\ViewModel;

class OgImage extends ViewModel
{
    public function data(): array
    {
        $image = $this->cascade->get('image');

        if ($image) {
            return [
                'seotamic_image' => $image
            ];
        }

        return [];
    }
}
