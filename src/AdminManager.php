<?php

namespace App;

use Graft\Framework\Annotation\AdminMenu;
use Graft\Framework\Injectable\Renderer;

/**
 * Plugin Administration Manager
 * Generated by Graft Plugin Skeleton
 */
class AdminManager
{
    /**
     * Renderer
     *
     * @var Renderer
     */
    private $renderer;


    /**
     * AdminManager Constructor
     *
     * @param Renderer $renderer Graft Renderer inject by autowiring
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }


    /**
     * Main Plugin Administration Menu
     * 
     * @AdminMenu(title="Main", position=3)
     *
     * @return string
     */
    public function mainAdminMenu()
    {
        return $this->renderer->display("admin/mainmenu.html.twig");
    }
}