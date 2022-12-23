<?php

namespace App\Repositories;




use App\Models\ContentPage;

/**
 * class ContentPageRepository
 *
 * @package App\Repositories
 */
class ContentPageRepository
{
    private static function baseQuery() {
        return ContentPage::select('content_pages.*', 'content_categories.slug')
            ->join('content_category_content_page', 'content_category_content_page.content_page_id', '=', 'content_pages.id')
            ->join('content_categories', 'content_categories.id', '=', 'content_category_content_page.content_category_id');
    }

    public static function getBySlug($slug) {
        return self::baseQuery()->where('content_categories.slug', $slug)
            ->where('content_pages.publish_status', 1)
            ->first();
    }

    public static function getLatest() {
        $query = self::baseQuery()->whereNotIn('content_categories.slug', ['about', 'regulation'])
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();

        $result = array();
        foreach($query as $key => $value) {
            $result[$key + 1] = $value;
            $result[$key + 1]['identifier'] = $key + 1;
            $result[$key + 1]['image'] = $value->getFeaturedImageAttribute();
        }    

        return $result;
    }

    public static function getAll($slug =  null) {
        return self::baseQuery()->whereNotIn('content_categories.slug', ['about', 'regulation'])
            ->when(!is_null($slug), function($query) use ($slug) {
                $query->where('content_categories.slug', $slug);
            })
            ->orderBy('id', 'desc')
            ->simplePaginate(3);
    }
}
