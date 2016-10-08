<?hh

class Utils {
  private function __construct() {}

  public static function getGET(): Map<string, mixed> {
    return new Map($_GET);
  }
}
