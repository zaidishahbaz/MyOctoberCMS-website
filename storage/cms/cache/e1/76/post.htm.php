<?php 
class Cms5c378ffbdb62a405000709_143a498044ea40c60d3b60b97b581313Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
