<?php

namespace eazycustoms\sidebar;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class sidebar extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'eazycustoms');

    }

    public static function setSideBar()
    {

        $core = self::getCore();
        echo view('eazycustoms::default', ['core' => $core])->render();

    }


    public static function getCore()
    {

        $chat = self::getChat();
        $kb = self::getKnowledgeBase();
        return view('eazycustoms::core',['chat' => $chat, 'kb' => $kb]);

    }

    public static function getChat()
    {
        return view('eazycustoms::chat');

    }

    public static function getKnowledgeBase()
    {
        $route = Route::current()->getName();
        return view('eazycustoms::kb',['route'=>$route]);

    }
}
