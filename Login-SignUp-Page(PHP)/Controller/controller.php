<?php
class Controller extends route
{

    public static function content(): void
    {
        $URL = self::processURL();
        $Updated_Mode = $URL['Updated_Mode'];
        $page = $Updated_Mode . '.php';
        $control = $Updated_Mode;
        if (isset($control) && in_array($control, self::$viewPage)) {
            require __DIR__ . './../view/' . $page;
        } elseif (isset($control) && in_array($control, self::$modelPage)) {
            require __DIR__ . './../model/' . $page;
        } else {
        }
    }

    private static function getURL(): array
    {
        $data = explode('=', $_SERVER['QUERY_STRING']);
        return isset($data[1]) ? explode('/', $data[1]) : ["login"];
    }


    private static function processURL(): array
    {
        $var = sizeof(self::getURL());
        $Mode = self::getURL()[($var - 1)] ?? '';
        $Updated_Mode = !in_array($Mode, self::$viewPage) ? (!in_array($Mode, self::$indexPage) ? (!in_array($Mode, self::$modelPage) ? 'error' : $Mode) : $Mode) : $Mode;
        if ($Updated_Mode == 'error') {
            $Mode = self::getURL()[($var - 2)] ?? '';
            $Updated_Mode = !in_array($Mode, self::$viewPage) ? (!in_array($Mode, self::$indexPage) ? (!in_array($Mode, self::$modelPage) ? 'error' : $Mode) : $Mode) : $Mode;
            return [
                'Updated_Mode' => $Updated_Mode,
            ];
        }
        return [
            'Updated_Mode' => $Updated_Mode,
        ];
    }
}
class route
{
    protected static $viewPage = ['insert', 'admin_insert', 'register', 'error', 'dbform', 'welcome', 'login', 'admin', 'update'];
    protected static $modelPage = ['registerdata', 'logindata', 'dbconnection', 'logout', 'updatedata', 'deletedata'];
    protected static $indexPage = [''];
}
?>
<?php
?>