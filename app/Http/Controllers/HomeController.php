<?php

namespace App\Http\Controllers;

use App\Repositories\Project\ProjectInterface;
use App\Repositories\Slider\SliderInterface;
use App\Repositories\Tag\TagInterface;
use LaravelLocalization;

/**
 * Class HomeController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class HomeController extends Controller
{
    protected $slider;
    protected $project;
    protected $tag;

    public function __construct(SliderInterface $slider, ProjectInterface $project, TagInterface $tag)
    {
        $this->slider = $slider;
        $this->project = $project;
        $this->tag = $tag;
    }

    public function index()
    {
        $languages = LaravelLocalization::getSupportedLocales();

        $sliders = $this->slider->all();
        $projects = $this->project->all();
        $tags = $this->tag->all();

        return view('frontend/layout/homepage', compact('sliders', 'projects', 'languages', 'tags'));
    }
}
