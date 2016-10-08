<?hh // strict

class Router {
  public static function genRoute(): string {
    var_dump(Utils::getGET());
    return 'a router';
    // return Utils::getGET();
  }

}
