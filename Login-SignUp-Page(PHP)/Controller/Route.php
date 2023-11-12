<?php
class RouteClass
{
    public static function ViewPage(){
        $viewPage = ['InsertView', 'RegisterView', 'ErrorPage', 'dbform', 'CustomerView', 'LoginView', 'AdminView', 'UpdateView'];
        return $viewPage;
    }

    public static function ModelPage(){
        $modelPage = ['RegisterData', 'LoginData', 'DbConnection', 'Logout', 'UpdateData', 'DeleteData'];
        return $modelPage;
    }

    public static function IndexPage(){
        $indexPage = [''];
        return $indexPage;
    }
}