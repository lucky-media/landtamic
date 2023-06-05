<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class LuckySeo extends Tags
{
    /**
     * The {{ lucky_seo:title }} tag.
     *
     * @return string|array
     */
    public function title()
    {
        $title = $this->context->get('title');
        $title_config = $this->context->raw('seo_title');
        $prepend = $this->context->get('seo:prepend_on_title');
        $append = $this->context->get('seo:append_on_title');


        if ($title_config === 'custom') {
            $title = $this->context->get('seo_custom_meta_title');
        }

        if ($append) {
            return "$title - $append";
        }

        if ($prepend) {
            return "$prepend - $title";
        }

        return $title;
    }

    /**
     * The {{ lucky_seo:description }} tag.
     *
     * @return string|array
     */
    public function description()
    {
        $desc_config = $this->context->raw('seo_meta_description');

        if ($desc_config === 'general') {
            return $this->context->get('seo:meta_description');;
        }

        if ($desc_config === 'custom') {
            return $this->context->get('seo_custom_meta_description');
        }

        return null;
    }

    /**
     * The {{ lucky_seo:canonical }} tag.
     *
     * @return string|array
     */
    public function canonical()
    {
        $canon_config = $this->context->raw('seo_canonical');

        if ($canon_config === 'url') {
            return $this->context->get('seo_canonical_url');
        }

        if ($canon_config === 'entry') {
            return $this->context->get('seo_canonical_custom_entry');
        }

        return $this->context->get('permalink');
    }

    /**
     * The {{ lucky_seo:og_title }} tag.
     *
     * @return string|array
     */
    public function ogTitle()
    {
        $title_config = $this->context->raw('seo_og_title');

        if ($title_config === 'custom') {
            return $this->context->get('seo_custom_og_title');
        }

        return $this->title();
    }

    /**
     * The {{ lucky_seo:og_description }} tag.
     *
     * @return string|array
     */
    public function ogDescription()
    {
        $desc_config = $this->context->raw('seo_og_description');

        if ($desc_config === 'meta') {
            return $this->description();
        }


        if ($desc_config === 'general') {
            return $this->context->get('seo:og_description');
        }

        if ($desc_config === 'custom') {
            return $this->context->get('seo_custom_og_desc');
        }

        return null;
    }

    /**
     * The {{ lucky_seo:tw_title }} tag.
     *
     * @return string|array
     */
    public function twTitle()
    {
        $title_config = $this->context->raw('seo_tw_title');

        if ($title_config === 'custom') {
            return $this->context->get('seo_custom_tw_title');
        }

        return $this->title();
    }

    /**
     * The {{ lucky_seo:tw_description }} tag.
     *
     * @return string|array
     */
    public function twDescription()
    {
        $desc_config = $this->context->raw('seo_og_description');

        if ($desc_config === 'meta') {
            return $this->description();
        }


        if ($desc_config === 'general') {
            return $this->context->get('seo:og_description');
        }

        if ($desc_config === 'custom') {
            return $this->context->get('seo_custom_og_desc');
        }

        return null;
    }

    /**
     * The {{ lucky_seo:og_image }} tag.
     *
     * @return string|array
     */
    public function ogImage()
    {
        $og_image = $this->context->raw('seo_og_image');

        if (!$og_image) {
            return $this->context->get('seo:og_image');
        }
    }
}
