<?php
include 'Route.php';
class Controller extends RouteClass
{
    // Properties
    static $classAInstance;
    static $viewPage;
    static $modelPage;
    static $indexPage;

    // Constructor
    public function __construct()
    {
        // Create an instance of ClassA
        self::$classAInstance = new RouteClass();

        // Set properties using appropriate methods
        self::$viewPage = self::$classAInstance->ViewPage();
        self::$modelPage = self::$classAInstance->ModelPage();
        self::$indexPage = self::$classAInstance->IndexPage();
    }


    // Call Page according to Mode
    public static function Content(): void
    {
        $URL = self::processURL();
        $Updated_Mode = $URL['Updated_Mode'];
        $page = $Updated_Mode . '.php';
        $control = $Updated_Mode;
        if (isset($control) && in_array($control, self::$viewPage)) {
            require __DIR__ . './../View/' . $page;
        } elseif (isset($control) && in_array($control, self::$modelPage)) {
            require __DIR__ . './../Model/' . $page;
        } else {
        }
    }
    
    // Return Curent Mode (Active URL)
    private static function processURL(): array
    {
        $URL_Size = sizeof(self::getURL());
        $Mode = self::getURL()[($URL_Size - 1)] ?? '';
        $Updated_Mode = !in_array($Mode, self::$viewPage) ? (!in_array($Mode, self::$indexPage) ? (!in_array($Mode, self::$modelPage) ? 'ErrorPage' : $Mode) : $Mode) : $Mode;
        if ($Updated_Mode == 'ErrorPage') {
            $Mode = self::getURL()[($URL_Size - 2)] ?? '';
            $Updated_Mode = !in_array($Mode, self::$viewPage) ? (!in_array($Mode, self::$indexPage) ? (!in_array($Mode, self::$modelPage) ? 'ErrorPage' : $Mode) : $Mode) : $Mode;
            return [
                'Updated_Mode' => $Updated_Mode,
            ];
        }
        return [
            'Updated_Mode' => $Updated_Mode,
        ];
    }

    //Extract URL in Array
    private static function getURL(): array
    {
        $URL = explode('=', $_SERVER['QUERY_STRING']);
        return isset($URL[1]) ? explode('/', $URL[1]) : ["LoginView"];
    }
}